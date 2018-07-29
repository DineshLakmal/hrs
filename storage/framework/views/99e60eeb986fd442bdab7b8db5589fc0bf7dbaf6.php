<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo e(asset('css/login_register.css')); ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="background">    
<section class="height-100p valign-center">
     <div class="container">
        <div class="row">
                      <div class="col-sm-3 col-lg-4">
                      </div>
                      <div class=" col-sm-6 col-lg-4">
                               <div class="login-wrapper">
                                      <img src="<?php echo e(asset('images/logo.png')); ?> " class="logo-login">
                                      <form method="POST" action="<?php echo e(route('register')); ?>" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>

                                        <div class="form-group">
                                                <label for="name"><?php echo e(__('Name')); ?></label>                                        
                                                <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                                <?php if($errors->has('name')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="email"><?php echo e(__('E-Mail Address')); ?></label>                                        
                                            <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                                            <?php if($errors->has('email')): ?>
                                                <span class="invalid-feedback">
                                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="password"><?php echo e(__('Password')); ?></label>
                                            <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                            <?php if($errors->has('password')): ?>
                                                <span class="invalid-feedback">
                                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="password-confirm"><?php echo e(__('Confirm Password')); ?></label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="avatar">Profile Image</label>
                                            <input id="avatar" type="file" class="form-control" name="avatar">
                                        </div>

                                        <div align="right">
                                           <button type="submit" class="btn btn-default btn-register">Register</button>
                                        </div>
                                      
                                        <a href="<?php echo e(route('login')); ?>">Login with your username and password</a>
                                    </form>
                               </div>
                      </div>
                       <div class="col-sm-3 col-lg-4">
                      </div>
            </div>
      </div>
</section>


<footer class="container-fluid valign-center">
        <div class="container">
                <p class="f-right">Powered by Miracle <img src="<?php echo e(asset('images/miracle-logo.png')); ?>" class="footer-logo"> </p>
                <p class="f-left">&copy; Copyright 2017 Hotel Reservation System </p>
        </div> 
</footer>

</body>
</html>