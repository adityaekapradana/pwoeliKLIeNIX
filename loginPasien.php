<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Poliklinik</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/AdminLTE/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="index.php"><b>Poliklinik</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">LOGIN PASIEN!!!</p>

                <form action="pages/loginPasien/checkLoginPasien.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" name="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password" required data-eye>
                        <div class=" input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" style="width:318px; text-align: center; " class="btn btn-primary btn-block" >Login</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                

                <p class="mb-0" 
                    style="  
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        margin: 20px 0;">
                        
                    <hr style="flex-grow: 1; border: none; border-top: 1px solid rgb(0, 0, 0); margin: 0 10px; width: 100%;">
                        <center>
                        <span style="      
                                color: #555;
                                font-size: 14px;
                                font-weight: bold;">Atau</span>
                        </center>
                    
                    <span>
                    <a href="registerPasien.php" class="text-center">
                        <button 
                            style="
                                color: white;
                                border: none;
                                cursor: pointer;
                                transition: background-color 0.1s ease;"
                            onmouseover="this.style.backgroundColor='rgb(10, 67, 238)'" 
                            onmouseout="this.style.backgroundColor='rgb(106, 101, 235)'"
                            class="btn btn-primary btn-block">
                            Register
                        </button>
                    </a>
                    </span>
                </p>
                <p class="mb-1">
                    <a href="login.php">Login sebagai dokter</a>
                </p>
            </div>
            <!-- /.login-card-body -->

        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/AdminLTE/dist/js/adminlte.min.js"></script>
</body>

</html>