<!doctype html>
<html lang="en" class="light-theme">

     <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="icon" href="{{asset('assets/images/favicon-32x32.png')}}" type="image/png" />
          <!-- Bootstrap CSS -->
          <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
          <link href="{{asset('assets/css/bootstrap-extended.css')}}" rel="stylesheet" />
          <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
          <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

          <!-- loader-->
          <link href="{{asset('assets/css/pace.min.css')}}" rel="stylesheet" />

          <title>Authentification</title>
     </head>

     <body class="bg-surface">

          <!--start wrapper-->
          <div class="wrapper">

               <!--start content-->
               <main class="authentication-content">

                    @yield('content')

               </main>


          </div>


          <!-- Bootstrap bundle JS -->
          <script src="assets/js/bootstrap.bundle.min.js"></script>

          <!--plugins-->
          <script src="assets/js/jquery.min.js"></script>
          <script src="assets/js/pace.min.js"></script>


     </body>

</html>