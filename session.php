<?php
  session_start();
  if(!isset($_SESSION['id'])) {
      echo "<script>alert('세션감지실패');</script>";
      echo "<script>location.replace('login.html');</script>";            
  }
  
  else {
    echo "<script>alert('세션감지성공');</script>";          
      $id = $_SESSION['id'];
      $name = $_SESSION['name'];
  } 
  ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>lakeside - book</title>
    <link
      rel="stylesheet"
      href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css/common.css" />
    <link rel="stylesheet" href="css/back.css" />
  </head>
  <body>
    <header class="text-center login_header">
    <h1 id="logo"><a href="index.html">lakeside</a></h1>
  <div class="widget_box d-flex">
    <div class="weather_cast">
      <div class="preview d-flex">
        <ul class="d-flex"></ul>
      </div>
      <div class="swiper container">
        <ul class="swiper-wrapper"></ul>
      </div>
      <div class="swiper-button-prev">◀</div>
      <div class="swiper-button-next">▶</div>
      <div class="shortcut">
        <div
          class="reservation d-flex justify-content-center align-items-center gap-4"
        >
          <div class="calendar"><a href="book.html">예약하기</a></div>
          <i class="fa-solid fa-calendar-plus"></i>
        </div>
        <div class="faq d-flex justify-content-center align-items-center gap-4">
          <div class="phone"><a href="">문의하기</a></div>
          <i class="fa-solid fa-square-phone-flip"></i>
        </div>
        <div
          class="location d-flex justify-content-center align-items-center gap-4"
        >
          <div class="map"><a href="notice.html#directions">오시는길</a></div>
          <i class="fa-solid fa-map-location-dot"></i>
        </div>
      </div>
    </div>
    <div class="preview_widget">
      <div class="today_weather">
        <div class="today_icon"></div>
        <div class="today_temp"></div>
        <div class="today_date"></div>
        <div class="preview_shortcut">
          <p>
            <i class="fa-solid fa-calendar-plus"></i>
          </p>
          <p><i class="fa-solid fa-square-phone-flip"></i></p>
          <p><i class="fa-solid fa-map-location-dot"></i></p>
        </div>
      </div>
    </div>
  </div>

  <div
    class="menu d-flex flex-column justify-content-center align-items-center"
  >
    <ul class="menus d-flex">
      <li>
        <a href="book.html" class="main_menu">예약하기</a>
        <ul>
          <li class="sub_menu"><a href="">예약안내</a></li>
          <li class="sub_menu">
            <a href="book.html#book_wrapper">예약하기</a>
          </li>
          <li class="sub_menu"><a href="">예약확인</a></li>
        </ul>
      </li>
      <li>
        <a href="course.html" class="main_menu">코스안내</a>
        <ul>
          <li class="sub_menu"><a href="course.html#course_wv">코스전경</a></li>
          <li class="sub_menu"><a href="course.html#hole_desc">코스소개</a></li>
          <li class="sub_menu">
            <a href="course.html#course_gallery">코스갤러리</a>
          </li>
          <li class="sub_menu">
            <a href="course.html#holeinone">홀인원이벤트</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="" class="main_menu">클럽안내</a>
        <ul>
          <li class="sub_menu"><a href="notice.html#history">연혁/대회</a></li>
          <li class="sub_menu"><a href="notice.html#rocess">이용안내</a></li>
          <li class="sub_menu"><a href="notice.html#facility">시설안내</a></li>
          <li class="sub_menu">
            <a href="notice.html#directions">오시는길</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="board.php" class="main_menu">클럽인포</a>
        <ul>
          <li class="sub_menu">
            <a href="board.php#board_wrapper">공지사항</a>
          </li>
          <li class="sub_menu"><a href="">명예의전당</a></li>
        </ul>
      </li>
      <li>
        <a href="login.html" class="main_menu">회원정보</a>
        <ul>
          <li class="sub_menu">
            <a href="login.html#login_wrapper">로그인하기</a>
          </li>
          <li class="sub_menu"><a href="">회원정보관리</a></li>
        </ul>
      </li>
    </ul>
    <div class="button">
      <a href="index.html" id="logo-mobile"
        ><img src="./img/logo_white.png" alt=""
      /></a>
    </div>
  </div>
  <div class="icon_mouse">
    <img src="img/icon_mouse.svg" alt="" />
  </div>
</header>










    <main id="session">
        <div class="session_wrapper">
            <div class="session container text-center">
                <div class="session_title">login info</div>
                <div class="session_info ">
                    <p> 
                        <b>ID : </b>
                        <?php echo "$id"; ?>
                    </p>
                    <p> 
                        <b>Name : </b>
                        <?php echo "$name"; ?>
                    </p>
                    <a href="php/logout.php" class="board_common_btn">LOGOUT</a>
                </div>
                
            </div>
        </div>
    </main>











 
    <a href="#" id="go-top"><i class="fa-solid fa-arrow-up"></i></a>
<!-- 탑 버튼 -->

<footer>
  <div class="terms d-flex justify-content-center">
    <a href="">이용약관</a>
    <a href="">웹회원 약관</a>
    <a href="">개인정보처리방침</a>
    <a href="">영상정보처리기기 방침</a>
    <a href="">사업자정보확인</a>
    <a href="">사이트맵</a>
  </div>
  <a href="index.html" class="footer-logo text-center">logo</a>

  <address class="">
    <dl class="d-flex justify-content-center">
      <dt>주소 :</dt>
      <dd>16887 경기도 용인시 처인구 모현읍 능원로 181</dd>
      <dt>대표전화 :</dt>
      <dd>031-334-2111</dd>
      <dt>팩스 :</dt>
      <dd>031-332-2106</dd>
    </dl>
    <dl class="d-flex justify-content-center">
      <dt>팩스 :</dt>
      <dd>031-332-2106</dd>
      <dt>이메일 :</dt>
      <dd>lakeside@lakeside.kr</dd>
    </dl>
    <dl class="d-flex justify-content-center">
      <dt>사업자등록번호</dt>
      <dd>135-81-02491</dd>
      <dt>통신판매신고</dt>
      <dd>제 2009-용인처인-0170호</dd>
      <dt>대표이사</dt>
      <dd>문지태</dd>
    </dl>
    <p class="text-uppercase text-center">
      copyright lakeside country club. all rights reserved
    </p>
  </address>
</footer>
    <script
      src="https://code.jquery.com/jquery-3.6.3.min.js"
      integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"
      integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0="
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/back.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
