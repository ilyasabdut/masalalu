<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <title>Masalalu Cafe</title>
        
        <link rel="shortcut icon" href="/img/logo_simple.jpeg" type="image/x-icon" />
		<link type="text/css" rel="stylesheet" href="{{ asset('/plugins/animate/animate.min.css') }}" />
		<link type="text/css" rel="stylesheet" href="{{ asset('/plugins/sweetalert.css') }}" />
		<link type="text/css" rel="stylesheet" href="{{ asset('/plugins/bootstrap-select/bootstrap-select.css') }}" />

		<link type="text/css" rel="stylesheet" href="{{ asset('/css/main.css') }}" />

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>
        <div class="login-content">
            <div class="title_login">
                <img src="{{ asset ('/img/logo_long.png') }}" width="200px">
            </div>
            
            <!-- Login -->
            <div class="lc-block toggled" id="l-login">
                <div class="lcb-form">
                    <form class="form secure_form" id="login_form" action="/auth/login" accept-charset="utf-8" method="post">
                        {!! csrf_field() !!}        
                        <div class="input-group m-b-20">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <div class="fg-line">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" autofocus>
                            </div>
                        </div>

                        <div class="input-group m-b-20">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <div class="fg-line">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                        </div>

                        <div class="checkbox">
                            <!--<label>-->
                            <a href="#" data-ma-action="login-switch" data-ma-block="#l-forget-password"><i class="fa fa-key"></i> &nbsp; <span>Lupa Password</span></a>
                            <!--</label>-->
                        </div>

                        <button type="submit" class="btn btn-login btn-primary btn-float"><i class="zmdi fa fa-arrow-right"></i></button>
                    </form>
                </div>
            </div>

            <!-- Forgot Password -->
            <div class="lc-block" id="l-forget-password">
                <div class="lcb-form">
                    <form class="form reset_form" id="reset_form" action="submit/reset_password" accept-charset="utf-8" method="post">
                    <p class="text-left">Masukkan email Anda yang terdaftar untuk mereset password Anda.</p>

                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                        <div class="fg-line">
                            <input type="text" class="form-control" placeholder="Masukkan email Anda" name="email" id="email_reset" required="required">
                        </div>
                    </div>

                    <!--<a href="#" class="btn btn-login btn-success btn-float"><i class="zmdi zmdi-check"></i></a>-->
                    <button type="submit" class="btn btn-login btn-primary btn-float"><i class="zmdi zmdi-check"></i></button>
                    </form>
                </div>

                <div class="lcb-navigation">
                    <a href="#" data-ma-action="login-switch" data-ma-block="#l-login"><i class="zmdi zmdi-long-arrow-right"></i> <span>Sign in</span></a>
                </div>
            </div>
        </div>       
    </body>
</html>