<?php $__env->startSection('content'); ?>
<div class="container">
     <div class="row">
        <div class="col-lg-12 margin-tb">
            <h6><a class="" href="<?php echo e(route('rooms.index')); ?>"> View All rooms</a> / Add New Room</h6>
        </div>
    </div>
    <br>


    <?php if(count($errors) < 0): ?>
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>


    <?php echo Form::open(array('route' => 'rooms.store','method'=>'POST')); ?>

         <?php echo $__env->make('rooms.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo Form::close(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>