<div class="row">
    <div class="col-sm-3">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CHECK-IN:</strong>
            <?php echo Form::date('check_in', null, array('placeholder' => 'Check In','class' => 'form-control')); ?>

        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CHECK-OUT:</strong>
            <?php echo Form::date('check_out', null, array('placeholder' => 'Check Out','class' => 'form-control')); ?>

        </div>
      </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-3">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>NUMBER OF PERSONS:</strong>
            <?php echo Form::text('guests', null, array('placeholder' => 'Guests','class' => 'form-control')); ?>

        </div>
        <button type="submit" class="btn btn-primary">Search</button>
      </div>
    </div>
</div>