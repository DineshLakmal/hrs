 
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 m-auto">
            <img src="<?php echo e(asset('uploads/avatars/'.$user->avatar)); ?>" style="width:150px; height:auto; float:left; border-radius:4%; margin-right:25px;">
            <h3><?php echo e($user->name); ?>'s Profile</h3>
            <form enctype="multipart/form-data" action="<?php echo e(url('profile')); ?>" method="POST">
                <label>Update Profile Image</label>
                <br>
                <input type="file" name="avatar" required>
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <br><br>
                <input type="submit" class="btn btn-sm btn-primary pull-right" value="Update your profile image">
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>