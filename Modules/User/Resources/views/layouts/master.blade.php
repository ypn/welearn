<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Togetther,we learn! Together, we conquer!</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <!-- Font Awesome -->
    <!-- Custom Theme Style -->
    <link href="//vjs.zencdn.net/5.11/video-js.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{Module::asset('user:css/master.css')}}">
    @yield('style')

  </head>

  <body>

  <header>
    <!--Top navigation -->
    <nav class="navbar navbar-default wln-nav">
      <div class="container">
        <ul class="nav navbar-nav">
          <li>
            <a href="javascript:void();" data-toggle="dropdown" class="dropdown-toggle"><img src="/img/logo.png" style="width:54px;" alt=""></a>
            <div class="dropdown-menu list-notice">
              <ul
                <li><a href="/">Trang chủ</a></li>
                <li><a href="#">Blogs</a></li>
                <li><a href="#">Danh sách khóa học</a></li>
                <li><a href="#">Danh sách giảng viên</a></li>
                <li><a href="/user/register-as-trainer">Trở thành giảng viên</a></li>
              </ul>
            </div>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="javascript:void();" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope-o"></i></a>
            <div class="dropdown-menu list-notice">
              <ul>
                <li>
                  <a href="#">
                    <span class="image">
                      <img src="/modules/user/css/avatar_01.png" alt="">
                    </span>
                    <span style="font-size:12px;">
                      <span>{{$user['name']}}</span>
                      <span class="pull-right"><i><b>3 mins ago</b></i></span>
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="javascript:void();" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{$user['picture']}}" style="width:29px;height:29px;border-radius:50%;" alt="">
              <span>{{$user['name']}}</span>
              <span class="fa fa-angle-down"></span>
            </a>

            <div class="dropdown-menu">
              <ul>
                <li><a href="/user/dashboard">Trang quản lý</a></li>
                <li>
                  <div>
                    <a href="javascript:void();" onclick="document.getElementById('form-log-out').submit();">
                      <form action="/user/logout" method="post" id="form-log-out">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                      </form>Đăng xuất
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!--end top navigation-->
  </header>
  <main>
  @yield('content')
  </main>
  <script src="/js/app.js"></script>
  @yield('script')
  </body>
  </html>
