<?php $__env->startSection('content'); ?>
<div class="container">
     <div class="row">
        <div class="col-md-6 margin-tb">
            <div class="pull-left">
                <h6>Room Management</h6>
            </div>
        </div>
        <div class="col-md-6 margin-tb">
            <div class="pull-right" align="right">
                <a class="btn btn-success" href="<?php echo e(route('rooms.create')); ?>"> Create New Room</a>
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
            <th>Room No</th>
            <th>Room Type</th>
            <th>Room Price</th>
            <th>Floor</th>
            <th width="280px">Action</th>
        </tr>
    <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e(++$i); ?></td>
        <td><?php echo e($rm->room_no); ?></td>
        <td><?php echo e($room_types[$rm->room_types_id]); ?></td>
        <td><?php echo e($rm->room_price); ?></td>
        <td><?php echo e($rm->floor); ?></td>
        <td>
            <a class="btn btn-info" href="<?php echo e(route('rooms.show',$rm->id)); ?>">Show</a>
            <a class="btn btn-primary" href="<?php echo e(route('rooms.edit',$rm->id)); ?>">Edit</a>

 
            <?php echo Form::open(['method' => 'DELETE','route' => ['rooms.destroy', $rm->id],'style'=>'display:inline']); ?>

            <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

            <?php echo Form::close(); ?>

        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <?php echo $rooms->links(); ?>

</div>
<?php $__env->stopSection(); ?>
   
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>