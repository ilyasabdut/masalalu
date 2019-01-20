<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <!-- Bootstrap core CSS-->
  <link href="{{URL::to('/')}}/admin/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="{{URL::to('/')}}/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <!-- Custom styles for this template-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" rel="stylesheet">   


</head>


<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                     <a class="navbar-brand" href="{{ url('/') }}"> 
                            <img class="img" src="{{URL::to('/')}}/img/logo_long.png" width="200px" alt=""> 
                       </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  Hello,  {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="/logout">
                                        {{ __('Logout') }}
                                    </a>
                                </div>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

  </body>

 <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Ilyas Abduttawab</small>
        </div>
      </div>
    </footer>

    <!-- Logout Modal-->
   
  <!-- Bootstrap core JavaScript-->
    <script src="{{URL::to('/')}}/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{URL::to('/')}}/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="{{URL::to('/')}}/admin/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->

    

</html>