
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
        <title> {{@($title)?$title. " | ":""}}SafeName | Secure Anonymous Identity</title>
        <meta content="" name="description">
        <!-- favicon files -->
        <link href="images/favicon_package/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180">
        <link href="images/favicon_package/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
        <link href="images/favicon_package/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
        <link href="images/favicon_package/site.webmanifest" rel="manifest">
        <link href="images/favicon_package/safari-pinned-tab.svg" rel="mask-icon">
        <meta content="SafeName" name="apple-mobile-web-app-title">
        <meta content="SafeName" name="application-name">
        <meta content="#205995" name="msapplication-TileColor">
        <meta content="#205995" name="theme-color">
        <!-- Bootstrap CSS -->
        <script src="https://unpkg.com/feather-icons">
	</script>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>




  <body onload="document.body.style.opacity='1'">


<div  id="app">


<div class="">

   

 
 @yield('content')




  </div>
  </div>




     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 

    <script src="{{ asset('js/app.js') }}" ></script>
  
  </body>
</html>