@extends('tusaned.temp')
<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    @section('title-page', 'تقديم مبادرة')
    <link rel="stylesheet" type="text/css" href="{{asset('tusaned/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('tusaned/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('tusaned/css/submitIdea.css')}}" />
    <link rel="stylesheet" href="{{asset('tusaned/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('tusaned/css/mediaQ.css')}}" />
  </head>
  <body>
    <div id="loading-wrapper">
      <div id="loading-text">LOADING</div>
      <div id="loading-content"></div>
    </div>
    <header class="position-fixed fixed-top">
      <div class="container-div">
        <nav
          class="
            navbar navbar-expand-lg navbar-light
            d-flex
            justify-content-between
            align-items-center
          "
        >
          <div class="logo d-flex align-items-center">
            <img src="./image/logo.png" alt="" class="img-fluid" />
            <span class="d-flex justify-context-center">
              <a class="navbar-brand mr-1" href="#">شباب تساند الأجيال</a>
            </span>
          </div>
          <div class="modal-container">
            <div class="nav-menu">
              <div class="d-flex align-items-center mt-5 pt-2 mt-md-0">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">
                      <span>
                        <img src="./image/home.svg" alt="" />
                      </span>
                      <span>الرئيسية</span>

                      <span class="sr-only"></span>
                    </a>
                  </li>

                  <li class="nav-item active">
                    <a class="nav-link" href="{{route('about')}}">
                      <span> <img src="./image/textus.svg" /> </span>
                      <span>من نحن</span>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="{{route('idea.bank')}}">
                      <span> <img src="./image/Group 698.svg" /> </span>
                      <span> بنك الأفكار </span>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="{{route('actions')}}">
                      <span> <img src="./image/star.svg" alt="" /> </span>
                      <span> مبادراتنا </span></a
                    >
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="{{route('events')}}">
                      <span>
                        <img src="./image/news icon.svg" alt="" />
                      </span>
                      <span>فعالياتنا</span>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="{{route('contact.us')}}">
                      <span>
                        <img src="./image/user.svg" alt="" />
                      </span>
                      <span>تواصل معنا</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="nav-form d-none d-lg-flex">
            <div
              class="
                form-group
                position-relative
                d-flex
                align-items-center
                mb-0
              "
            >
              <span class="position-absolute search-icon">
                <label htmlFor="exampleInputEmail1" class="mb-0">
                  <i class="fa fa-search"></i>
                </label>
              </span>
              <input
                type="email"
                class="form-control lll"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="ابحث"
              />
            </div>
          </div>
          <div
            class="
              burger-button
              d-flex
              alighn-items-between
              flex-column
              d-lg-none
            "
            id="burger-menu-btn"
          >
            <img src="./image/menu.svg" alt="" id="menu-icon" />
          </div>
        </nav>
      </div>
    </header>
    <main>
      <section class="submit-idea pb-2">
        <div class="container-div py-md-5">
          <div class="container">
            <div class="info-progress text-right py-4">
              <div
                class="
                  brogress-item
                  d-flex
                  flex-column
                  justify-context-between
                  align-items-center
                  active
                "
              >
                <span>1</span>
                <span>التفاصيل الشحصية</span>
              </div>
              <div
                class="
                  brogress-item
                  d-flex
                  flex-column
                  justify-context-between
                  align-items-center
                  active
                "
              >
                <span>2</span>
                <span> أسماء المفوضين</span>
              </div>
              <div
                class="
                  brogress-item
                  d-flex
                  flex-column
                  justify-context-between
                  align-items-center
                  active
                "
              >
                <span>3</span>
                <span> تفاصيل المبادرة</span>
              </div>
              <div
                class="
                  brogress-item
                  d-flex
                  flex-column
                  justify-context-between
                  align-items-center
                "
              >
                <span>4</span>
                <span> المخرجات المتوقعة</span>
              </div>
              <div
                class="
                  brogress-item
                  d-flex
                  flex-column
                  justify-context-between
                  align-items-center
                "
              >
                <span>5</span>
                <span> الموازنة</span>
              </div>
            </div>
          </div>
          <div class="card-form text-right">
            <div class="card mt-3">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12 mt-2">
                    <label> وصف المبادرة : </label>
                    <textarea
                      name="desc-idea"
                      id="desc-idea"
                      cols="30"
                      rows="5"
                      class="form-control form-control-lg"
                      placeholder="الرجاء تقديم وصفا بسيطا للمبادرة المقدمة بما لا يزيد عن 150 كلمة..."
                    ></textarea>
                  </div>

                  <div class="col-12 mt-3 mb-2">
                    <h6>مكان تنفيذ المبادرة</h6>
                  </div>
                  <div class="col-md-6 mt-2">
                    <label>المحافظة : </label>

                    <select name="" class="form-control form-control-lg">
                      <option value="" hidden>اختر المحافظة</option>
                    </select>
                  </div>

                  <div class="col-md-6 mt-2">
                    <label> الحي : </label>
                    <select
                      name="location"
                      id="location"
                      class="form-control form-control-lg"
                    >
                      <option value="" disabled selected hidden>
                        اختر الحي
                      </option>
                    </select>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="card-form text-right">
            <div class="card mt-3">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12 mt-2">
                    <label>اهداف المبادرة : </label>
                    <textarea
                      name="desc-idea"
                      id="desc-idea"
                      cols="30"
                      rows="1"
                      class="form-control form-control-lg"
                      placeholder="الرجاء تحديد الأهداف التي تسعى المبادرة لتحقيقها من خلال تطبيقها في مجتمعك"
                    ></textarea>
                  </div>
                </div>
              </div>
              <div
                class="
                  card-footer
                  d-flex
                  justify-content-between
                  align-items-center
                "
              >
                <span><i class="fas fa-plus"></i></span>
                <span><i class="far fa-trash-alt"></i></span>
              </div>
            </div>
          </div>
          <div class="card-form text-right">
            <div class="card mt-3">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12 mt-2">
                    <label> أهمية المبادرة : </label>
                    <textarea
                      name="desc-idea"
                      id="desc-idea"
                      cols="30"
                      rows="5"
                      class="form-control form-control-lg"
                      placeholder="الرجاء توضيح المشكلة التي تسعى المبادرة لإيجاد حلول لها ومعالجتها بإستخدام الحقائق والإمكانات المتاحة مع تقديم الحقائق والدلائل التي تدعم الاحتياج للمبادرة ..."
                    ></textarea>
                  </div>
                  <div class="col-12 mt-3 mb-2">
                    <h6>الفئات المستهدفة من المبادرة</h6>
                  </div>
                  <div class="col-md-6 mt-2">
                    <label> الذكور: </label>
                    <input
                      class="form-control form-control-lg"
                      name="name-idea"
                      required=""
                      type="text"
                      placeholder="مثال: ادخل عدد الذكور"
                    />
                  </div>
                  <div class="col-md-6 mt-2">
                    <label> الاناث: </label>
                    <input
                      class="form-control form-control-lg"
                      name="name-idea"
                      required=""
                      type="text"
                      placeholder="مثال: ادخل عدد الاناث"
                    />
                  </div>
                </div>
              </div>

          </div>

        </div> <div class="card-form text-right">
            <div class="card mt-3">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12 mt-2">
                    <label> منهجية وآلية تنفيذ المبادرة : </label>
                    <textarea
                      name="desc-idea"
                      id="desc-idea"
                      cols="30"
                      rows="1"
                      class="form-control form-control-lg form-control-lg"
                      placeholder=" الرجاء تقديم عرض مفصل للأنشطة المراد تقديمها من خلال المبادرة..."
                    ></textarea>
                  </div>
                </div>
              </div>
              <div
                class="
                  card-footer
                  d-flex
                  justify-content-between
                  align-items-center
                "
              >
                <span><i class="fas fa-plus"></i></span>
                <span><i class="far fa-trash-alt"></i></span>
              </div>
            </div>
            <div
              class="
                d-flex
                flex-column flex-sm-row
                align-items-center
                justify-content-center
                p-3
              "
            >

              <div class="prev-btn mt-3 mt-md-5 mb-2 ml-sm-4">
                <a href="{{route('submit.idea.two')}}"> السابق</a>
              </div>
              <div class="next-btn mt-2 mt-md-5 mb-2 mt-sm-3">
                <a href="{{route('submit.idea.four')}}"> التالي</a>
              </div>
            </div>
          </div>
      </section>
    </main>

    <footer class="py-3">
      <div
        class="
          container-div
          d-flex
          flex-column flex-md-row
          justify-content-between
          align-items-center
        "
      >
        <div class="footer-logo">
          <img src="./image/logo.png" alt="" />
          شباب تساند الأجيال
        </div>
        <div class="footer-sponsor">
          <img src="./image/sponsor1.png" alt="" />
          <img src="./image/sponsor2.png" alt="" />
        </div>
        <div
          class="
            footer-social
            d-flex
            flex-column
            align-items-center
            justify-context-center
            mt-3 mt-md-0
          "
        >
          <span> تابعنا على شبكاتنا الاجتماعية </span>
          <div class="social-media-footer mt-2">
            <a href="#">
              <span>
                <i class="fab fa-instagram"></i>
              </span>
            </a>
            <a href="#">
              <span> <i class="fab fa-twitter"></i> </span>
            </a>
            <a href="#">
              <span> <i class="fab fa-youtube"></i> </span>
            </a>
            <a href="#">
              <span> <i class="fab fa-facebook-f"></i> </span>
            </a>
            <a href="#">
              <span> <i class="fab fa-whatsapp"></i> </span>
            </a>
          </div>
        </div>
      </div>
      <div class="copy-rights text-center mt-3">
        ‏2021 جميع الحقوق محفوظة جمعية شباب تساند الأجيال
      </div>
    </footer>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
