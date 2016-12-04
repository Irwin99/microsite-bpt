 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('asset/asset_lte/dist/img/user2-160x160.jpg')?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="<?php echo base_url('adminpanel/dashboard/')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i> <span>Article</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('adminpanel/article/add_article')?>"><i class="fa fa-plus-circle"></i> Add article</a></li>
            <li><a href="<?php echo base_url('adminpanel/article/manage_article')?>"><i class="fa fa-list"></i> Manage article</a></li>
            <li><a href="<?php echo base_url($this->uri->segment(1).'/category/add_category')?>"><i class="fa fa-plus-circle"></i> Add Category</a></li>
            <li><a href="<?php echo base_url('adminpanel/category/manage_category')?>"><i class="fa fa-list"></i> Manage Category</a></li>
          </ul>
        </li>
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i> <span>Page</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-plus-circle"></i> Add Page</a></li>
            <li><a href="index2.html"><i class="fa fa-list"></i> Manage Page</a></li>
          </ul>
        </li> -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('adminpanel/user/add_user')?>"><i class="fa fa-plus-circle"></i> Add User</a></li>
            <li><a href="<?php echo base_url('adminpanel/user/manage-user')?>"><i class="fa fa-list"></i> Manage User</a></li>
          </ul>
        </li>
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-cogs"></i> <span>Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-cog"></i> Configuration</a></li>
            <li><a href="index2.html"><i class="fa fa-bars"></i> Menu Management</a></li>
          </ul>
        </li> -->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
