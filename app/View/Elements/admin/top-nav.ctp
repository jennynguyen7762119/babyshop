<div class="top-navbar">
    <div class="top-navbar-inner">

        <!-- Begin Logo brand -->
        <div class="logo-brand">
        	<?php echo $this -> Html -> link ($this -> Html -> image('admin/img/sentir-logo-primary.png'), array('controller' => 'top', 'action' => 'index') , array('escape' => false)); ?>
        </div><!-- /.logo-brand -->
        <!-- End Logo brand -->

        <div class="top-nav-content">

            <!-- Begin button sidebar left toggle -->
            <div class="btn-collapse-sidebar-left">
                <i class="fa fa-long-arrow-right icon-left-arrow"></i>
            </div><!-- /.btn-collapse-sidebar-left -->
            <!-- End button sidebar left toggle -->

            <!-- Begin user session nav -->
            <ul class="nav-user navbar-right">
                <li class="dropdown">
                    <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
                    	<?php echo $this -> Html -> image('admin/img/avatar/avatar-1.jpg', array('alt' => 'Avatar', 'class' => 'avatar img-circle')); ?>
                        Hi, <strong><?php echo $this -> Session ->read(SYS_LOG_000.'.User.username'); ?></strong>
                    </a>
                    <ul class="dropdown-menu square primary margin-list-rounded with-triangle">
                        <li><a href="#fakelink">Cài đặt tài khoản</a></li>
                        <li><a href="#fakelink">Đổi password</a></li>
                        <li><a href="#fakelink">Thông tin tài khoản</a></li>
                        <li><a href="login.html">Thoát</a></li>
                    </ul>
                </li>
            </ul>
            <!-- End user session nav -->
            <!-- Begin Collapse menu nav -->
            <div class="collapse navbar-collapse" id="main-fixed-nav">
                <!-- Begin nav search form -->
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Tìm kiếm">
                    </div>
                </form>
                <!-- End nav search form -->

            </div><!-- /.navbar-collapse -->
            <!-- End Collapse menu nav -->
        </div><!-- /.top-nav-content -->
    </div><!-- /.top-navbar-inner -->
</div><!-- /.top-navbar -->