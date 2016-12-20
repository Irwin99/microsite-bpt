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
          <p><?php echo $this->session->userdata('username');?></p>
          <!-- Status -->

        </div>
      </div>
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="<?php echo base_url('adminpanel/dashboard/')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <?php
        if($this->session->userdata('permission')== 2){
        ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i> <span>Article</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('adminpanel/article/add-article')?>"><i class="fa fa-plus-circle"></i> Add article</a></li>
            <li><a href="<?php echo base_url('adminpanel/article/manage-article')?>"><i class="fa fa-list"></i> Manage article</a></li>
            <li><a href="<?php echo base_url($this->uri->segment(1).'/category/add-category')?>"><i class="fa fa-plus-circle"></i> Add Category</a></li>
            <li><a href="<?php echo base_url('adminpanel/category/manage-category')?>"><i class="fa fa-list"></i> Manage Category</a></li>
          </ul>
        </li>
        <?php
      }
      else if($this->session->userdata('permission')==1){
         ?>
         <li class="treeview">
           <a href="#">
             <i class="fa fa-newspaper-o"></i> <span>Article</span>
             <span class="pull-right-container">
               <i class="fa fa-angle-left pull-right"></i>
             </span>
           </a>
           <ul class="treeview-menu">
             <li><a href="<?php echo base_url('adminpanel/article/add-article')?>"><i class="fa fa-plus-circle"></i> Add article</a></li>
             <li><a href="<?php echo base_url('adminpanel/article/manage-article')?>"><i class="fa fa-list"></i> Manage article</a></li>
             <li><a href="<?php echo base_url($this->uri->segment(1).'/category/add-category')?>"><i class="fa fa-plus-circle"></i> Add Category</a></li>
             <li><a href="<?php echo base_url('adminpanel/category/manage-category')?>"><i class="fa fa-list"></i> Manage Category</a></li>
           </ul>
         </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('adminpanel/user/add-user')?>"><i class="fa fa-plus-circle"></i> Add User</a></li>
            <li><a href="<?php echo base_url('adminpanel/user/manage-user')?>"><i class="fa fa-list"></i> Manage User</a></li>
          </ul>
        </li>
        <?php
      }
         ?>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
