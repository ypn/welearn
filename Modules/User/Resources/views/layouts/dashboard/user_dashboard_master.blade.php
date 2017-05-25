<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="{{Module::asset('user:build/css/user.dashboard.css')}}">
    @yield('style')
  </head>
  <body>
    @yield('expand')
    <div id="wrapper">
      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
          <ul class="nav sidebar-nav">
              <li class="sidebar-brand">
                  <a href="#">
                    <img src="http://znews-photo-td.zadn.vn/w1024/Uploaded/neg_rtlzofn/2017_01_23/14494601_177404746951l3484_2482115257403382069_n.jpg" style="width:50px;height:50px;object-fit: cover;border-radius:50%;" alt="">
                    <span>Phạm Như Ý</span>
                  </a>
              </li>
              <li>
                  <a href="/"><i class="fa fa-fw fa-home"></i> Trang chủ</a>
              </li>
              <li>
                  <a href="#"><i class="fa fa-fw fa-home"></i> Thông báo</a>
              </li>
              <li>
                  <a href="/user/dashboard"><i class="fa fa-fw fa-folder"></i> Trang cá nhân</a>
              </li>
              <li>
                  <a href="#"><i class="fa fa-fw fa-file-o"></i> Bài viết</a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-plus"></i> Khóa học <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li class="dropdown-header">Quản lí khóa học</li>
                  <li><a href="/user/teaching-courses">Đang giảng dạy</a></li>
                  <li><a href="#">Đang theo học</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-plus"></i> Phòng học trực tuyến <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li class="dropdown-header">Quản lý phòng học</li>
                  <li><a href="/user/create-class-room">Thiết đặt phòng học</a></li>
                </ul>
              </li>
              <li>
                  <a href="#"><i class="fa fa-fw fa-bank"></i> Page four</a>
              </li>
              <li>
                  <a href="#"><i class="fa fa-fw fa-dropbox"></i>Cài đặt</a>
              </li>
          </ul>
      </nav>
      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      <div id="page-content-wrapper">
        <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
          <span class="hamb-top"></span>
          <span class="hamb-middle"></span>
          <span class="hamb-bottom"></span>
        </button>
          @yield('content')
      </div>
      <!-- /#page-content-wrapper -->

  </div>
  <script src="/js/app.js"></script>
  @yield('script')
  <!-- /#wrapper -->
  <script type="text/javascript">

    $(document).ready(function () {
    var trigger = $('.hamburger'),
        overlay = $('.overlay'),
       isClosed = false;

      trigger.click(function () {
        hamburger_cross();
      });

      function hamburger_cross() {

        if (isClosed == true) {
          overlay.hide();
          trigger.removeClass('is-open');
          trigger.addClass('is-closed');
          isClosed = false;
        } else {
          overlay.show();
          trigger.removeClass('is-closed');
          trigger.addClass('is-open');
          isClosed = true;
        }
    }

    $('[data-toggle="offcanvas"]').click(function () {
          $('#wrapper').toggleClass('toggled');
    });
  });
  </script>
  </body>
</html>
