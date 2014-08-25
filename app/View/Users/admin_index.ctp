<?php echo $this->Form->create('Users',array('action'=>'login','name'=>'UsersLoginForm')); ?>

<div class="login">
	<h1>Đăng nhập hệ thống</h1>
	<?php echo $this -> Session -> flash('bad'); ?>
	<p><?php echo $this->Form->input("adminId",array('label'=>'Tên đăng nhập:', 'value'=>"", 'placeholder'=>'Tên đăng nhập')); ?></p>
	<p><?php echo $this->Form->input("adminUserPass",array('label'=>'Mật khẩu:', 'value'=>"", 'placeholder'=>'Mật khẩu','type'=>'password')); ?></p>
	<p class="submit">
		<input type="submit" name="commit" value="Đăng nhập">
	</p>

</div>

<div class="login-help">
	<p>
		Bạn quên mật khẩu? <a href="#">Nhấn vào đây để lấy lại mật khẩu</a>.
	</p>
</div>
<?php echo $this->Form->end();?>
