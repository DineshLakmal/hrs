<?php $__env->startSection('content'); ?>
    <div class="container">
         <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h6><a href="">New Booking</a> / Bookings</h6>
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


        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Guests</th>
                <th>Extras</th>
                <th>Check In</th>
                <th>Check Out</th>
                <th>Total Charge</th>
                <th>Paid</th>
                <!-- <th width="280px">Action</th> -->
            </tr>
        <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($booking->name); ?></td>
            <td><?php echo e($booking->guests); ?></td>
            <td><?php echo e($booking->extras); ?></td>
            <td><?php echo e($booking->check_in); ?></td>
            <td><?php echo e($booking->check_out); ?></td>
            <td><?php echo e($booking->total_charge); ?></td>
            <td><?php echo e($booking->paid); ?></td>
           
           <!--  <td>
                <a class="btn btn-info" href="<?php echo e(route('bookings.show',$booking->id)); ?>">Show</a>
                <a class="btn btn-primary" href="<?php echo e(route('bookings.edit',$booking->id)); ?>">Edit</a>

     
                <?php echo Form::open(['method' => 'DELETE','route' => ['bookings.destroy', $booking->id],'style'=>'display:inline']); ?>

                <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

                <?php echo Form::close(); ?>

            </td> -->
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table> 


        <?php echo $bookings->links(); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>