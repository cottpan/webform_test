<div class="container">

		<?php echo Form::open(array('action' => 'send', 'class' => 'form-horizontal')); ?>
			<h2>エントリー</h2>
			<?php echo Form::hidden('action', 'action', array('value'=>'complete')); ?>
			
			<?php echo Form::hidden(Config::get('security.csrf_token_key'), Security::fetch_token()); ?>
			
			<?php echo Form::hidden('entry_name', 'entry_name', array('value'=> $entry_name)); ?>
			
			<?php echo Form::hidden('entry_ruby', 'entry_ruby', array('value'=> $entry_ruby)); ?>
			
			<?php echo Form::hidden('entry_birthday_year', 'entry_birthday_year', array('value'=> $entry_birthday_year)); ?>
			
			<?php echo Form::hidden('entry_birthday_month', 'entry_birthday_month', array('value'=> $entry_birthday_month)); ?>
			
			<?php echo Form::hidden('entry_birthday_day', 'entry_birthday_day', array('value'=> $entry_birthday_day)); ?>
			
			<?php echo Form::hidden('entry_prefecture', 'entry_prefecture', array('value'=> $entry_prefecture)); ?>
			
			<?php echo Form::hidden('entry_address', 'entry_address', array('value'=> $entry_address)); ?>
			
			<?php echo Form::hidden('entry_telephone_h', 'entry_telephone_h', array('value'=> $entry_telephone_h)); ?>
			
			<?php echo Form::hidden('entry_telephone_m', 'entry_telephone_m', array('value'=> $entry_telephone_m)); ?>
			
			<?php echo Form::hidden('entry_telephone_l', 'entry_telephone_l', array('value'=> $entry_telephone_l)); ?>
			
			<?php echo Form::hidden('entry_email', 'entry_email', array('value'=> $entry_email)); ?>
			
			<?php echo Form::hidden('entry_magazine', 'entry_magazine', array('value'=> $entry_magazine)); ?>
		
			<?php echo Form::hidden('entry_magazine_type', 'entry_magazine_type', array('value'=> $entry_magazine_type)); ?>

			<div class="alert alert-info" role="alert">
				<ul>
					<li>内容に間違いがなければ「投稿」ボタンを選択してください。</li>
				</ul>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">お名前</label>
				<div class="col-sm-10">
					<p class="form-control-static">
						<?php echo $entry_name; ?>
					</p>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">フリガナ</label>
				<div class="col-sm-10">
					<p class="form-control-static">
						<?php echo $entry_ruby; ?>
					</p>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">生年月日</label>
				<div class="col-sm-10">
					<p class="form-control-static">
						<?php echo $entry_birthday_year; ?> 年
						<?php echo $entry_birthday_month; ?> 月
						<?php echo $entry_birthday_day; ?> 日
					</p>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">都道府県</label>
				<div class="col-sm-10">
					<p class="form-control-static">
						<?php echo $entry_prefecture; ?>
					</p>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">ご住所</label>
				<div class="col-sm-10">
					<p class="form-control-static">
						<?php echo $entry_address; ?>
					</p>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">電話番号</label>
				<div class="col-sm-10">
					<p class="form-control-static">
						<?php echo $entry_telephone_h; ?> -
						<?php echo $entry_telephone_m; ?> -
						<?php echo $entry_telephone_l; ?>
					</p>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">メールアドレス</label>
				<div class="col-sm-10">
					<p class="form-control-static">
						<?php echo $entry_email; ?>
					</p>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">メールマガジン</label>
				<div class="col-sm-10">
					<p class="form-control-static">
						<?php echo $entry_magazine; ?>
					</p>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">メールマガジンのタイプ</label>
				<div class="col-sm-10">
					<p class="form-control-static">
						<?php echo $entry_magazine_type; ?>
					</p>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4 col-xs-8 col-sm-offset-2 col-xs-offset-4">
					<button type="submit" class="btn btn-lg btn-primary btn-block">保存 <span class="glyphicon glyphicon-chevron-right"></span></button>
				</div>
			</div>
			
		<?php echo Form::close(); ?>
		
		
		
		<?php echo Form::open(array('action' => 'send', 'class' => 'form-horizontal col-sm-2 col-xs-4 form-slideup', 'role'=>'form')); ?>
			<?php echo Form::hidden('action', 'action', array('value'=>'complete')); ?>
			
			<?php echo Form::hidden(Config::get('security.csrf_token_key'), Security::fetch_token()); ?>
			
			<?php echo Form::hidden('entry_name', 'entry_name', array('value'=> $entry_name)); ?>
			
			<?php echo Form::hidden('entry_ruby', 'entry_ruby', array('value'=> $entry_ruby)); ?>
			
			<?php echo Form::hidden('entry_birthday_year', 'entry_birthday_year', array('value'=> $entry_birthday_year)); ?>
			
			<?php echo Form::hidden('entry_birthday_month', 'entry_birthday_month', array('value'=> $entry_birthday_month)); ?>
			
			<?php echo Form::hidden('entry_birthday_day', 'entry_birthday_day', array('value'=> $entry_birthday_day)); ?>
			
			<?php echo Form::hidden('entry_prefecture', 'entry_prefecture', array('value'=> $entry_prefecture)); ?>
			
			<?php echo Form::hidden('entry_address', 'entry_address', array('value'=> $entry_address)); ?>
			
			<?php echo Form::hidden('entry_telephone_h', 'entry_telephone_h', array('value'=> $entry_telephone_h)); ?>
			
			<?php echo Form::hidden('entry_telephone_m', 'entry_telephone_m', array('value'=> $entry_telephone_m)); ?>
			
			<?php echo Form::hidden('entry_telephone_l', 'entry_telephone_l', array('value'=> $entry_telephone_l)); ?>
			
			<?php echo Form::hidden('entry_email', 'entry_email', array('value'=> $entry_email)); ?>
			
			<?php echo Form::hidden('entry_magazine', 'entry_magazine', array('value'=> $entry_magazine)); ?>
		
			<?php echo Form::hidden('entry_magazine_type', 'entry_magazine_type', array('value'=> $entry_magazine_type)); ?>
			<div class="form-group">
				<button type="submit" class="btn btn-lg btn-default btn-block"><span class="glyphicon glyphicon-chevron-left"></span> 戻る</button>
			</div>
		<?php echo Form::close(); ?>



	</div>
