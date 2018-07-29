<?php $__env->startSection('content'); ?>
    <div class="container">
         <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h6><a href="">New Booking</a> / Search result</h6>
                </div>
               <!--  <div class="pull-right">
                    <a class="btn btn-success" href="<?php echo e(route('bookings.create')); ?>"> Create New Booking</a>
                </div> -->
            </div>
        </div>
        <br>


        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success">
                <p><?php echo e($message); ?></p>
            </div>
        <?php endif; ?>

        <?php echo Form::open(array('url' => 'bookings/addRooms','method'=>'POST','class'=>'')); ?>

        <table class="table table-bordered">
        <tr>
            <th>Select</th>
            <th>Room No</th>
            <th>Room Type</th>
            <th>Room Price</th>
            <th>Floor</th>
            <th>Room Status</th>
        </tr>
        <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>
                <div class="checkbox">
                  <label><input type="checkbox" name="room_id[]" value="<?php echo e($rm->id); ?>"></label>
                </div>
            </td>
            <td><?php echo e($rm->room_no); ?></td>
            <td><?php echo e($rm->room_type); ?></td>
            <td><?php echo e($rm->room_price); ?></td>
            <td><?php echo e($rm->floor); ?></td>
            <td>Clean</td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="" align="right">
                    <button type="submit" class="btn btn-success">Add Room/Rooms</button>
                </div>
            </div>
        </div>
        <?php echo Form::close(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>