<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Room No:</strong>
            <?php echo Form::text('room_no', null, array('placeholder' => 'Room No','class' => 'form-control')); ?>

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Room Type:</strong>
            <?php echo e(Form::select('room_types_id', $room_types, null, ['class' => 'form-control'])); ?>

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Room Price:</strong>
            <?php echo Form::text('room_price', null, array('placeholder' => 'Room Price','class' => 'form-control')); ?>

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Floor:</strong>
            <?php echo Form::text('floor', null, array('placeholder' => 'Floor','class' => 'form-control')); ?>

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-right">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>