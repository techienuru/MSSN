<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login | <?=APP_NAME?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="<?php echo PUBLIC_URL.'/assets/css/Admin/css/style.css';?>" rel="stylesheet">
    <link href="<?php echo PUBLIC_URL.'/assets/css/Admin/css/Boostrap.css';?>" rel="stylesheet">

</head>

<body>
    <div class="container-xxl d-flex p-0" style="background-image: linear-gradient(to top,hsla(148, 96%, 35%, 0.56),hsla(148, 96%, 35%, 0.58)),url(<?=PUBLIC_URL.'/images/New\ mssn\ mosque.jpg';?>);background-repeat:no-repeat;background-size:cover;background-position:center;">
        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-5" style="border: 2px solid rgba(0, 0, 0, 0.214);">
                    <div class="rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-center flex-column mb-5">
                            <h3 class="text-white">Admin Login</h3>
                        </div>
                        
                    <?php if(isset($success)) : ?>
                    <div class="alert alert-light-success color-success"><i class="bi bi-check-circle"></i> <?=$success;?> 
                    </div>
                    <?php elseif(isset($error)) : ?>
                    
                    <div class="alert alert-light-warning color-warning"><i class="bi bi-exclamation-triangle"></i>
                        <?=$error;?>
                    </div>
                    <?php endif;?>

                        <form  method="POST">
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control p-3" id="floatingInput" placeholder="Email Address" style="box-shadow:none;outline:none; border:0px 0px 2px #04b054;">
                                <label for="floatingInput">Email address</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="password" name="password" class="form-control p-3" id="floatingPassword" placeholder="Password" style="box-shadow:none;outline:none; border:0px 0px 2px #04b054;">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <button type="submit" name="submit" class="btn py-3 w-100 mb-4" style="background-color: #04b054;color:white;">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>