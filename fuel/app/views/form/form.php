<?php echo Form::open(array('action' => '/entry','class' => 'form-horizontal')); ?>

<div class="container">
  <h2>エントリー</h2>
  <div class="form-group">
    <label for='entry_name' class="col-sm-2 control-label">名前</label>
    <div class="col-sm-10">
      <div class="row">
        <div class="col-sm-6">
          <?php echo Form::input('entry_name', Session::get_flash('entry_name'), array('class' => 'form-control', 'required' => 'required')); ?>

          <?php if($val->error('entry_name')): ?>
            <p class="alert alert-warning"><?php echo $val->error('entry_name'); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label for='entry_ruby' class="col-sm-2 control-label">ふりがな</label>
    <div class="col-sm-10">
      <div class="row">
        <div class="col-sm-6">
          <?php echo Form::input('entry_ruby', Session::get_flash('entry_ruby'), array('class' => 'form-control')); ?>

          <?php if($val->error('entry_ruby')): ?>
            <p class="alert alert-warning"><?php echo $val->error('entry_ruby'); ?></p>
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
            <?php echo Form::select('entry_birthday_year', Session::get_flash('entry_birthday_year'), $year, array('class' => 'form-control')); ?>

            <span class="input-group-addon">年</span>
          </div>
        </div>

        <div class="col-xs-4 col-sm-2">
          <div class="input-group">
            <?php echo Form::select('entry_birthday_month', Session::get('entry_birthday_month'), $month, array('class' => 'form-control')); ?>

            <span class="input-group-addon">月</span>
          </div>
        </div>

        <div class="col-xs-4 col-sm-2">
          <div class="input-group">
            <?php echo Form::select('entry_birthday_day', Session::get('entry_birthday_day'), $day, array('class' => 'form-control')); ?>
            <?php if($val -> error('entry_birthday')):?>
              <p class="text-danger"><?php echo $val->error('entry_birthday');?></p>
            <?php endif;?>

            <span class="input-group-addon">日</span>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="form-group">
    <label for="entry_prefecture" class="col-sm-2 control-label">都道府県</label>
    <div class="col-sm-10">
      <div class="row">
        <div class="col-sm-3">
          <?php echo Form::select('entry_prefecture', Session::get('entry_prefecture'), $prefecture, array('class' => 'form-control')); ?>
          <?php if($val -> error('entry_prefecture')):?>
            <p class="text-danger"><?php echo $val->error('entry_prefecture');?></p>
          <?php endif;?>
        </div>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label for='entry_address' class="col-sm-2 control-label">ご住所</label>
    <div class="col-sm-10">
      <div class="row">
        <div class="col-sm-6">
          <?php echo Form::input('entry_address', Session::get_flash('entry_address'), array('class' => 'form-control', 'required' => 'required')); ?>

          <?php if($val->error('entry_address')): ?>
            <p class="alert alert-warning"><?php echo $val->error('entry_address'); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label for="entry_telephone" class="col-sm-2 control-label">電話番号</label>
    <div class="col-sm-10">
      <div class="row">
        <div class="col-xs-3 col-sm-2">
          <?php echo Form::input('entry_telephone_h', Session::get_flash('entry_telephone_h'), array('class' => 'form-control', 'required' => 'required')); ?>

          <?php if($val->error('entry_telephone_h')): ?>
            <p class="alert alert-warning"><?php echo $val->error('entry_telephone_h'); ?></p>
          <?php endif; ?>
        </div>
        <div class="col-xs-1 col-1em">
          <p class="form-control-static text-center">
            -
          </p>
        </div>
        <div class="col-xs-3 col-sm-2">
          <?php echo Form::input('entry_telephone_m', Session::get_flash('entry_telephone_m'), array('class' => 'form-control', 'required' => 'required')); ?>

          <?php if($val->error('entry_telephone_m')): ?>
            <p class="alert alert-warning"><?php echo $val->error('entry_telephone_m'); ?></p>
          <?php endif; ?>
        </div>
        <div class="col-xs-1 col-1em">
          <p class="form-control-static text-center">
            -
          </p>
        </div>
        <div class="col-xs-3 col-sm-2">
          <?php echo Form::input('entry_telephone_l', Session::get_flash('entry_telephone_l'), array('class' => 'form-control', 'required' => 'required')); ?>

          <?php if($val->error('entry_telephone_l')): ?>
            <p class="alert alert-warning"><?php echo $val->error('entry_telephone_l'); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label for="entry_email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <div class="row">
        <div class="col-sm-6">
          <?php echo Form::input('entry_email', Session::get_flash('entry_email'), array('class' => 'form-control','placeholder' => 'mail@example.com', 'required' => 'required')); ?>

          <?php if($val->error('entry_email')): ?>
            <p class="alert alert-warning"><?php echo $val->error('entry_email'); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label for="entry_magazine" class="col-sm-2 control-label">メールマガジン</label>
    <div class="col-sm-10">

      <div class="radio">
        <label>
          <?php echo Form::radio('entry_magazine', '0', Session::get_flash('entry_magazine')); ?>
          受信しない
        </label>
      </div>

      <div class="radio">
        <label>
          <?php echo Form::radio('entry_magazine', '1', Session::get_flash('entry_magazine'), array('checked' => 'checked')); ?>
          受信する
        </label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label for="entry_magazine_type" class="col-sm-2 control-label">メールマガジンのタイプ</label>
    <div class="col-sm-10">

      <div class="radio">
        <label>
          <?php echo Form::radio('entry_magazine_type', '0', Session::get_flash('entry_magazine_type')); ?>
          モバイル
        </label>
      </div>

      <div class="radio">
        <label>
          <?php echo Form::radio('entry_magazine_type', '1', Session::get_flash('entry_magazine_type'), array('checked' => 'checked')); ?>
          PC
        </label>
      </div>
    </div>
  </div>


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
