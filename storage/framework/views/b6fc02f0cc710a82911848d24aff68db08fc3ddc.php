<?php $__env->startSection('content'); ?>
    <div class="container">
         <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Reservations</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="<?php echo e(route('reservations.create')); ?>"> Create New Reservations</a>
                </div>
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
                <th>Email</th>
                <th width="280px">Action</th>
            </tr>
        <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($reservation->name); ?></td>
            <td><?php echo e($reservation->email); ?></td>
            <td>
                <a class="btn btn-info" href="<?php echo e(route('reservations.show',$reservation->id)); ?>">Show</a>
                <a class="btn btn-primary" href="<?php echo e(route('reservations.edit',$reservation->id)); ?>">Edit</a>

     
                <?php echo Form::open(['method' => 'DELETE','route' => ['reservations.destroy', $reservation->id],'style'=>'display:inline']); ?>

                <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

                <?php echo Form::close(); ?>

            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table> 


        <?php echo $reservations->links(); ?>

    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>