<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>
  @yield('style')
  <script>
  	 window.Laravel = <?php echo json_encode([
  			 'csrfToken' => csrf_token(),
  	 ]); ?>
   </script>
</head>
<body>
<header></header><!--end header-->
<main>
  @yield('content')
</main><!-- end main -->
<footer></footer><!--end footer -->
@yield('script')
</body>
</html>
