<?php echo Form::open(array('action' => '/entry','class' => 'form-horizontal')); ?>

<div class="container">
  <h2>エントリー</h2>
  <div class="form-group">
    <label for='form-name' class="col-sm-2 control-label">名前</label>
    <div class="col-sm-10">
      <div class="row">
        <div class="col-sm-6">
          <?php echo Form::input('name', Session::get_flash('name'), array('class' => 'form-control')); ?>

          <?php if($val->error('name')): ?>
            <p class="alert alert-warning"><?php echo $val->error('name'); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label for="form-email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <div class="row">
        <div class="col-sm-6">
          <?php echo Form::input('email', Session::get_flash('email'), array('class' => 'form-control','placeholder' => 'mail@example.com')); ?>

          <?php if($val->error('email')): ?>
            <p class="alert alert-warning"><?php echo $val->error('email'); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label for="form-content" class="col-sm-2 control-label">内容</label>
    <div class="col-sm-10">
      <div class="row">
        <div class="col-sm-6">
          <?php echo Form::textarea('msg', Session::get_flash('msg'), array('rows' => '6','class' => 'form-control')); ?>

          <?php if($val->error('msg')): ?>
            <p class="alert alert-warning"><?php echo $val->error('msg'); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-4 col-xs-8">
      <?php echo Form::submit('submit', '内容確認', array('class' => 'btn btn-success')); ?>

      <?php echo Form::hidden(Config::get('security.csrf_token_key'), Security::fetch_token()); ?>

    </div>
  </div>
</div>
<?php echo Form::close(); ?>
