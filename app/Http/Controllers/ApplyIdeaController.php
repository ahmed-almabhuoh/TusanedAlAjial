<?php

namespace App\Http\Controllers;

use App\Models\ApplyIdea;
use App\Models\IdeaDesc;
use App\Models\Staff;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApplyIdeaController extends Controller
{
    //
    public function personalInfo (Request $request) {
        $validator = Validator($request->all(), [
            'idea_name' => 'required|string|min:5|max:30',
            'full_name' => 'required|string|min:5|max:30',
            'phone' => 'required|string|min:7|max:20',
            'pin' => 'required|string|min:9|max:20',
        ]);

        if (!$validator->fails()) {
            $idea = new ApplyIdea();
            $idea->idea_name = $request->get('idea_name');
            $idea->full_name = $request->get('full_name');
            $idea->phone = $request->get('phone');
            $idea->pin = $request->get('pin');

            $isSaved = $idea->save();

            return response()->json([
                'message' => $isSaved ? 'لقد تم حفظ التقدم' : 'حدثت مشكلة يرجى المحاولة مرة أخرى'
            ], $isSaved ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
        }else{
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    public function delegatesNames (Request $request) {
        // $idea = ApplyIdea::where('pin', $request->get('pin'))->latest('created_at')->first();
        $validator = Validator($request->all(), [
            'full_name' => 'required|string|min:5|max:30',
            'pin' => 'required|string|min:9|max:20',
            'phone' => 'required|string|min:7|max:20',
            'location' => 'required|string|min:5|max:15',
        ]);

        if (!$validator->fails()) {
            // GETTING IDEA
            $idea = ApplyIdea::where('pin', $request->get('pin'))->latest('created_at')->first();

            $staff = new Staff();
            $staff->full_name = $request->get('full_name');
            $staff->pin = $request->get('pin');
            $staff->phone = $request->get('phone');
            $staff->location = $request->get('location');
            $staff_isSaved = $staff->save();

            if ($staff_isSaved) {
                // GETTING STAFF
                $staff = Staff::select(['id'])->where('pin', $request->get('pin'))->first();

                // UPDATE IDEA WITH STAFF ID
                $idea->staff_id = $staff->id;
                $idea_isSaved = $idea->save();

                return response()->json([
                    'message' => $idea_isSaved ? 'تم حفظ التقدم' : 'حدثت مشكلة ما يرجى المحاولة مرة أخرى'
                ], $idea_isSaved ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
            }else {
                return response()->json([
                    'message' => 'لقد حدث خطأ ما يرجى المحاولة مرة أخرى'
                ], Response::HTTP_BAD_REQUEST);
            }

        }else {
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    public function ideaDesc (Request $request) {
        $validator = Validator($request->all(), [
            'desc' => 'required|string|min:10|max:500',
            'governorate' => 'required|string|min:3|max:30',
            'pin' => 'required|string|min:9|max:20',
            'location' => 'required|string|min:5|max:30',
            'goals' => 'required|string|min:10|max:300',
            'importance' => 'required|string|min:10|max:300',
            'male_no' => 'required|integer|min:0|max:100',
            'female_no' => 'required|string|min:0|max:100',
            'methodology' => 'required|string|min:10|max:300',
        ]);

        if (!$validator->fails()) {

            // GETTING IDEA
            $idea = ApplyIdea::select(['id'])->where('pin', $request->get('pin'))->latest('created_at')->first();

            $ideaDesc = new IdeaDesc();
            $ideaDesc->idea_desc = $request->get('desc');
            $ideaDesc->governorate = $request->get('governorate');
            $ideaDesc->pin = $request->get('pin');
            $ideaDesc->goal = $request->get('goals');
            $ideaDesc->importance = $request->get('importance');
            $ideaDesc->male_no = $request->get('male_no');
            $ideaDesc->female_no = $request->get('female_no');
            $ideaDesc->idea_id = $idea->id;
            $ideaDesc->methodology = $request->get('methodology');
            $ideaDesc->district = $request->get('location');

            $isCreated = $ideaDesc->save();
            return response()->json([
                'message' => $isCreated ? 'تم حفظ التقدم' : 'حدث خطأ ما حاول مرة أخرى'
            ], $isCreated ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
        }else {
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}
