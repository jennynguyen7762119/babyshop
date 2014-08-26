<?php
$this -> start('title');
echo " Quản lý user admin - BabyShop";
$this -> end();
?>
<!-- BEGIN PAGE CONTENT -->
<div class="page-content">
	<div class="container-fluid">
		<!-- Begin page heading -->
		<h1 class="page-heading">Thông Tin Admin<small> Admin</small></h1>
		<!-- End page heading -->
		<!-- Begin breadcrumb -->
		<ol class="breadcrumb default square rsaquo sm">
			<li><a href="index.html"><i class="fa fa-home"></i></a></li>
			<li><a href="#fakelink">Người dùng</a></li>
			<li class="active">Admin</li>
			<li style="float:right;"><a href="<?php echo Router::url('/admin/accounts/add') ;?>"><i class="fa fa-users"></i> Thêm mới</a></li>
		</ol>
		<br>
		<div class="the-box transparent full search-page">
			<div class="the-box no-margin no-border bg-success" id="search-heading">
				<?php echo $this -> Form -> create('Accounts', array('action' => 'index', 'novalidate')) ?>
				<div class="form-group has-feedback lg no-label">
					<?php echo $this -> Form -> input('username', array('class' => 'form-control fno-border input-lg', 'placeholder' => 'Admin Name')); ?>
				</div>
				<div class="form-group has-feedback lg no-label">
					<?php echo $this -> Form -> input('email', array('class' => 'form-control fno-border input-lg', 'placeholder' => 'Admin Email')); ?>
				</div>
				<div class="text-center">
					<button class="btn btn-primary" type="reset">
						<i class="fa fa-refresh"></i> Nhập lại
					</button>
					<button class="btn btn-success" type="submit">
						<i class="fa fa-suitcase"></i> Tìm kiếm
					</button>
				</div><!-- /.text-center -->
				<?php echo $this -> Form -> end(); ?>
			</div>
			<div class="panel with-nav-tabs panel-success panel-square panel-no-border">
				<div class="panel-heading">
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#example-search-article" data-toggle="tab"><i class="fa fa-edit"></i> Kết quả tìm kiếm</a>
						</li>
					</ul>
				</div>
				<div id="panel-collapse-1" class="collapse in">
					<?php if(isset( $search_result ) == TRUE ): ?>
					<div class="panel-body">
						<?php if(empty( $search_result ) == FALSE && is_array($search_result) == TRUE ): ?>
						<div class="alert alert-warning fade in alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
								&times;
							</button>
							<strong><?php echo count($search_result);?></strong> kết quả <i>được tìm thấy</i>
						</div>
						<div class="the-box">
							<div class="table-responsive">
								<table class="table table-striped table-hover" id="datatable-example">
									<thead class="the-box dark full">
										<tr>
											<th>Username</th>
											<th>Họ và tên</th>
											<th>Hình đại diện</th>
											<th>Vai trò</th>
											<th>Cập nhật</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($search_result as $value):?>
											<tr class="odd gradeX">
				                                <td><?php echo $value['Account']['username'];?></td>
				                                <td><?php echo $value['Account']['full_name'];?></td>
				                                <td>
				                                    <?php if(empty($value['Account']['image']) ==FALSE &&  file_exists(WWW_ROOT."img/uploads/users/".$value['Account']['image'])):?>
				                                    	<?php echo $this -> Html -> image("uploads/users/".$value['Account']['image'], array('alt' => 'avatar','height' => '50px', 'width' => '50px'));?>
				                                    <?php else: ?>
				                                        <img src="" height="50px" width="50px" />
				                                    <?php endif;?>
				                                </td>
				                                <?php if ($value['Account']['role'] == 1):?>
				                                    <td class="center">Admin</td>
				                                <?php else: ?>
				                                    <td class="center">Nhân viên</td>
				                                <?php endif;?>
				                                <td class="center">
				                                	<a class="btn btn-mini btn-primary" href=<?php echo $this->Html->url( '/', true );?>account/details/<?php echo $value['Account']['user_id'];?>>Sửa</a>
				                                	<a class="btn btn-mini btn-danger" href=<?php echo $this->Html->url( '/', true );?>account/details/<?php echo $value['Account']['user_id'];?>>Xóa</a>
				                                </td>
											</tr>
										<?php endforeach;?>
									</tbody>
								</table>
							</div>
						</div>
						<?php else: ?>
						<div class="alert alert-warning fade in alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
								&times;
							</button>
							<strong>Không có kết quả</strong> nào được tìm thấy <i>theo yêu cầu</i>
						</div>
						<?php endif; ?>
					</div>
					<?php endif ;?>
				</div>
			</div><!-- /.the-box full -->
		</div><!-- /.container-fluid -->
	</div><!-- /.page-content -->
	<!-- END PAGE CONTENT -->
