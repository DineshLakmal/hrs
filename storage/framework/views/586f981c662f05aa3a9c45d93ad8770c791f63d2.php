<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h6><a href="">New Booking</a> / <a href="">Search result<a> / New Customer</h6>
            </div>
            <!--  <div class="pull-right">
                <a class="btn btn-primary" href="<?php echo e(route('bookings.index')); ?>"> Back</a>
            </div> -->
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


    <?php echo Form::open(array('route' => 'bookings.store','method'=>'POST')); ?>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <strong>Customer Name:</strong>
                <?php echo Form::text('name', null, array('placeholder' => 'Customer Name','class' => 'form-control')); ?>

            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <strong>ID No:</strong>
                <?php echo Form::text('id_no', null, array('placeholder' => 'ID No','class' => 'form-control')); ?>

            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <strong>Customer Address:</strong>
                <?php echo Form::text('address', null, array('placeholder' => 'Customer Address','class' => 'form-control')); ?>

            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <strong>No of Guests:</strong>
                <?php echo Form::text('guests', null, array('placeholder' => 'No of guests','class' => 'form-control')); ?>

            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <strong>Extras:</strong>
                <?php echo Form::text('extras', null, array('placeholder' => 'Extras','class' => 'form-control')); ?>

            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <strong>Paid:</strong>
                <?php echo Form::text('paid', null, array('placeholder' => 'Paid','class' => 'form-control')); ?>

            </div>
        </div>
        <div class="col-sm-12" align="right">
                <button type="submit" class="btn btn-primary">Create New Customer</button>
        </div>
    </div>
    <?php echo Form::close(); ?>

    

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>