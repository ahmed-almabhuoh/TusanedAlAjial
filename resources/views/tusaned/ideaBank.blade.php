@extends('tusaned.temp')
<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    @section('title-page', 'Idea Bank')
    <link rel="stylesheet" type="text/css" href="{{asset('tusaned/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('tusaned/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('tusaned/css/animate.css')}}" />

    <link rel="stylesheet" href="{{asset('tusaned/css/ideaBank.css')}}" />
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
              <a class="navbar-brand mr-1" href="{{route('home')}}">شباب تساند الأجيال</a>
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

                  <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">
                      <span> <img src="./image/textus.svg" /> </span>
                      <span>من نحن</span>
                    </a>
                  </li>

                  <li class="nav-item active">
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
      <section class="idea-bank pb-2">
        <div class="container-div py-md-5">
          <div class="row pt-md-5 mt-md-2">
            <div class="col-md-5 order-1 order-md-0">
              <div class="info-idea-bank text-right mt-4 mt-md-0">
                <h4 class="wow fadeInDown" data-wow-delay=".3s">
                  <span> بنك الأفكار </span>
                </h4>
                <h1
                  class="
                    d-flex
                    flex-column
                    mt-2
                    pb-3
                    my-md-4
                    mt-lg-5
                    mb-lg-4
                    wow
                    fadeInDown
                  "
                  data-wow-delay=".4s"
                >
                  <span> بنك المبادرات والأفكار </span>
                </h1>
                <p class="wow fadeInDown" data-wow-delay=".5s">
                  بنك المبادرات والأفكار هي مقترحـات بإمكانــك إضافتها عبر
                  النموذج التالي ويتم عرض الأفكار ومناقشتها بشكل دوري بين أعضاء
                  مجلس الإدارة ويتم كذلك اختيار الأفكار الصالحة للتطبيق والعمل
                  عليها ضمن فرق المبادرات .الشبابية وتنفيذها ونقلها إلى أرض
                  الواقع
                </p>
                <div class="btn-idea-bank wow fadeInDown" data-wow-delay=".6s">
                  <a href="{{route('submit.idea.one')}}">تقديم مبادرة</a>
                </div>
              </div>
            </div>
            <div class="col-md-7 order-0 order-md-1 pt-4 pt-md-0">
              <div class="img-idea-bank mr-md-auto wow fadeInLeft">
                <img src="./image/ideaBank.png" class="img-fluid" alt="" />
              </div>
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
        <p>Created by: <a href="https://www.linkedin.com/in/ahmad-z-a-almabhoh-6842611a4/">AHMAD ALMABHOH</a></p>
      </div>
    </footer>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
