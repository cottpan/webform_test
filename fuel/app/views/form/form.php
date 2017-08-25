<?php echo Form::open(array('action' => '/entry','class' => 'form-horizontal')); ?>

<div class="container">
  <h2>エントリー</h2>
  <div class="form-group">
    <label for='form-name' class="col-sm-2 control-label">名前</label>
    <div class="col-sm-10">
      <div class="row">
        <div class="col-sm-6">
          <?php echo Form::input('name', Session::get_flash('name'), array('class' => 'form-control', 'required' => 'required')); ?>

          <?php if($val->error('name')): ?>
            <p class="alert alert-warning"><?php echo $val->error('name'); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label for='form-ruby' class="col-sm-2 control-label">ふりがな</label>
    <div class="col-sm-10">
      <div class="row">
        <div class="col-sm-6">
          <?php echo Form::input('ruby', Session::get_flash('ruby'), array('class' => 'form-control')); ?>

          <?php if($val->error('ruby')): ?>
            <p class="alert alert-warning"><?php echo $val->error('ruby'); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">生年月日</label>
    <div class="col-sm-10">
      <div class="row">
        <div class="col-xs-4 col-sm-2">
          <div class="input-group">
            <?php echo Form::select('year', Session::get_flash('year'), $year, array('class' => 'form-control')); ?>
            <?php if($val -> error('year')):?>
              <p class="text-danger"><?php echo $val->error('year');?></p>
            <?php endif;?>

            <span class="input-group-addon">年</span>
          </div>
        </div>

        <div class="col-xs-4 col-sm-2">
          <div class="input-group">
            <?php echo Form::select('month', Session::get('month'), $month, array('class' => 'form-control')); ?>
            <?php if($val -> error('month')):?>
              <p class="text-danger"><?php echo $val->error('month');?></p>
            <?php endif;?>

            <span class="input-group-addon">月</span>
          </div>
        </div>

        <div class="col-xs-4 col-sm-2">
          <div class="input-group">
            <?php echo Form::select('day', Session::get('day'), $day, array('class' => 'form-control')); ?>
            <?php if($val -> error('day')):?>
              <p class="text-danger"><?php echo $val->error('day');?></p>
            <?php endif;?>

            <span class="input-group-addon">日</span>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="form-group">
    <label for="form_prefecture" class="col-sm-2 control-label">都道府県</label>
    <div class="col-sm-10">
      <div class="row">
        <div class="col-sm-3">
          <?php echo Form::select('prefecture', Session::get('prefecture'), $prefecture, array('class' => 'form-control')); ?>
          <?php if($val -> error('prefecture')):?>
            <p class="text-danger"><?php echo $val->error('prefecture');?></p>
          <?php endif;?>
        </div>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label for='form-address' class="col-sm-2 control-label">ご住所</label>
    <div class="col-sm-10">
      <div class="row">
        <div class="col-sm-6">
          <?php echo Form::input('address', Session::get_flash('address'), array('class' => 'form-control', 'required' => 'required')); ?>

          <?php if($val->error('address')): ?>
            <p class="alert alert-warning"><?php echo $val->error('address'); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label for="form_telephone" class="col-sm-2 control-label">電話番号</label>
    <div class="col-sm-10">
      <div class="row">
        <div class="col-xs-3 col-sm-2">
          <?php echo Form::input('telephone_h', Session::get_flash('telephone_h'), array('class' => 'form-control', 'required' => 'required')); ?>

          <?php if($val->error('telephone_h')): ?>
            <p class="alert alert-warning"><?php echo $val->error('telephone_h'); ?></p>
          <?php endif; ?>
        </div>
        <div class="col-xs-1 col-1em">
          <p class="form-control-static text-center">
            -
          </p>
        </div>
        <div class="col-xs-3 col-sm-2">
          <?php echo Form::input('telephone_m', Session::get_flash('telephone_m'), array('class' => 'form-control', 'required' => 'required')); ?>

          <?php if($val->error('telephone_m')): ?>
            <p class="alert alert-warning"><?php echo $val->error('telephone_m'); ?></p>
          <?php endif; ?>
        </div>
        <div class="col-xs-1 col-1em">
          <p class="form-control-static text-center">
            -
          </p>
        </div>
        <div class="col-xs-3 col-sm-2">
          <?php echo Form::input('telephone_l', Session::get_flash('telephone_l'), array('class' => 'form-control', 'required' => 'required')); ?>

          <?php if($val->error('telephone_l')): ?>
            <p class="alert alert-warning"><?php echo $val->error('telephone_l'); ?></p>
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
          <?php echo Form::input('email', Session::get_flash('email'), array('class' => 'form-control','placeholder' => 'mail@example.com', 'required' => 'required')); ?>

          <?php if($val->error('email')): ?>
            <p class="alert alert-warning"><?php echo $val->error('email'); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>


  <!-- <div class="form-group">
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
  </div> -->


  <div class="form-group">
    <label for="form_magazine" class="col-sm-2 control-label">メールマガジン</label>
    <div class="col-sm-10">

      <div class="radio">
        <label>
          <?php echo Form::radio('magazine', '0', Session::get_flash('magazine')); ?>
          受信しない
        </label>
      </div>

      <div class="radio">
        <label>
          <?php echo Form::radio('magazine', '1', Session::get_flash('magazine'), array('checked' => 'checked')); ?>
          受信する
        </label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label for="form_magazine_type" class="col-sm-2 control-label">メールマガジンのタイプ</label>
    <div class="col-sm-10">

      <div class="radio">
        <label>
          <?php echo Form::radio('magazine_type', '0', Session::get_flash('magazine')); ?>
          モバイル
        </label>
      </div>

      <div class="radio">
        <label>
          <?php echo Form::radio('magazine_type', '1', Session::get_flash('magazine'), array('checked' => 'checked')); ?>
          PC
        </label>
      </div>
    </div>
  </div>


  <!-- <div class="form-group">
    <div class="col-sm-4 col-xs-8">
      <?php echo Form::submit('submit', '内容確認', array('class' => 'btn btn-success')); ?>

      <?php echo Form::hidden(Config::get('security.csrf_token_key'), Security::fetch_token()); ?>

    </div>
  </div> -->

  <div class="form-group">
    <div class="col-sm-2 col-xs-4">
      <a href="/" class="btn btn-lg btn-default btn-block"><span class="glyphicon glyphicon-chevron-left"></span> 戻る</a>
    </div>
    <div class="col-sm-4 col-xs-8">
      <button type="submit" class="btn btn-lg btn-primary btn-block">確認 <span class="glyphicon glyphicon-chevron-right"></span></button>
      <?php echo Form::hidden(Config::get('security.csrf_token_key'), Security::fetch_token()); ?>
    </div>
  </div>


</div>
<?php echo Form::close(); ?>
