<?php
$this -> start('title');
echo " Đăng ký Admin mới- BabyShop";
$this -> end();
?>
<!-- BEGIN PAGE CONTENT -->
<div class="page-content">
<div class="container-fluid">
    <!-- Begin page heading -->
    <h1 class="page-heading">Thông Tin Chi Tiết Admin<small> Admin</small></h1>
    <!-- End page heading -->
    <!-- Begin breadcrumb -->
    <ol class="breadcrumb default square rsaquo sm">
        <li><a href="/admin/top/index"><i class="fa fa-home"></i></a></li>
        <li><a href="#fakelink">Người dùng</a></li>
        <li class="/admin/accounts/index">Admin</li>
        <li class="active">Chi tiết</li>
        <li class="active" style="float:right;"><a href="/admin/accounts/index"><i class="fa fa-long-arrow-left"></i> Quay lại</a></li>
    </ol>
 	<!-- BEGIN DATA TABLE -->
	<div class="the-box">
		<div class="table-responsive">

			<!--
			===========================================================
			BEGIN PAGE
			===========================================================
			-->
			<?php echo $this -> Form -> create('Accounts',array('action' => 'add', 'name' => 'AccountAddForm', 'novalidate')); ?>
			<?php echo $this->Session->flash('bad'); ?>
			<div class="row">
                    <div class="col-lg-12">
                        <div class="regist-wrapper">
                        	<div class="form-group has-feedback lg left-feedback no-label">
                        		<?php echo $this -> Form -> input('full_name',array('label' => false, 'error'=> false, 'div' => FALSE,'type' => 'text', 'class' => 'form-control input-lg rounded','placeholder' => "Họ và tên",'autofocus' => "autofocus")); ?>
                                <span class="fa fa-male form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback lg left-feedback no-label">
                            	<?php echo $this -> Form -> input('username',array('label' => false, 'error'=> false, 'div' => FALSE,'type' => 'text', 'class' => 'form-control input-lg rounded','placeholder' => "Nhập username",'maxlength' => '20'));?>
                                <span class="fa fa-user form-control-feedback"></span>
</div>
                            <div class="form-group has-feedback lg left-feedback no-label">
                            	<?php echo $this -> Form -> input('email',array('label' => false, 'error'=> false, 'div' => FALSE,'type' => 'email', 'class' => 'form-control input-lg rounded','placeholder' => "Nhập email"));?>
                                <span class="fa fa-envelope form-control-feedback"></span>
</div>
                            <div class="form-group has-feedback lg left-feedback no-label">
                            	<?php echo $this -> Form -> input('password',array('label' => false, 'error'=> false, 'div' => FALSE,'type' => 'password', 'class' => 'form-control input-lg rounded','placeholder' => "Nhập password",'maxlength' => '20'));?>
                                <span class="fa fa-lock form-control-feedback"></span>
</div>
                            <div class="form-group">
                                <img id="blah" src="#" alt="your image" />
                                <?php echo $this->Form->input('image', array('type' => 'file','multiple onchange' => "readURL(this);"));?>
                                
                            </div>
                            <div class="form-group checkbox">
                                <span style="color:black;">Admin cấp cao</span><?php echo $this -> Form -> input('role',array('label' => false, 'error'=> false, 'div' => FALSE,'type' => 'checkbox', 'autofocus' => 'autofocus','value' =>'0'));?>
                            </div>
                            <div class="form-group checkbox">
                                <span style="color:black;">Chặn quyền</span><?php echo $this -> Form -> input('status',array('label' => false, 'error'=> false, 'div' => FALSE,'type' => 'checkbox', 'autofocus' => 'autofocus','value' =>'0'));?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
					<button class="btn btn-primary" type="reset">
						<i class="fa fa-refresh"></i> Nhập lại
					</button>
					<button class="btn btn-success" type="submit">
						<i class="fa fa-suitcase"></i> Xác nhận
					</button>
				</div><!-- /.text-center -->
                
			<?php echo $this -> Form -> end(); ?>
		</div>
	</div>
	</div>
</div>