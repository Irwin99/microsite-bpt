
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Edit article
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit article</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="box body">
    <div class="container">
      <a class="btn btn-sm bpt-btn-primary btn-rd" style="margin-top:10px" href="<?php echo base_url($this->uri->segment(1).'/article/manage-article')?>" role="button">
        <i class="fa fa-arrow-left fa-fw" aria-hidden="true"></i>Back to Article
      </a>
      <?php echo validation_errors();
        ?>

      <?php
      if(isset($error)){
     echo $error;
   }
      ?>
      <?php echo form_open_multipart('');?>
      <div class="form-group">
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-3 text-right">
            <label class="control-label">Title</label>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-9">
            <input type="text" class="form-control col-md-7 col-xs-12" name='title_article' value="<?php echo $result['title_article']?>">
          </div>
          <div class="col-md-3 col-sm-3 hidden-xs"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-3 text-right">
            <label class="control-label">Category</label>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-9">
            <?php
        $options = array(''=>'choose category');
          if($category != FALSE){
            foreach ($category as $rows) {
              $options[$rows->id_category] = $rows->nama_category;
            }
          }
          echo form_dropdown('id_category',$options,$result['id_category'],'class="form-control"');
        ?>
          </div>
          <div class="col-md-3 col-sm-3 hidden-xs"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-3 text-right">
            <label class="control-label">Content</label>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-9">
            <textarea class="textarea" placeholder="Enter text ..." style="width: 810px; height: 200px;"name="content_article"><?php echo $result['content_article']?></textarea>
          </div>
          <div class="col-md-3 col-sm-3 hidden-xs"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-3 text-right">
            <label class="control-label">Caption</label>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-9">
            <input type="text" class="form-control col-md-7 col-xs-12" name='caption' value="<?php echo $result['caption']?>">
          </div>
          <div class="col-md-3 col-sm-3 hidden-xs"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-3 text-right">
            <label class="control-label"> Image</label>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-9">
            <input type="file" class="form-control col-md-7 col-xs-12" name="userfile">
            <button class="btn btn-sm bpt-btn-primary btn-rd" style="margin-top:10px" href="#" role="button">
              Save
            </button>
          </div>
          <div class="col-md-3 col-sm-3 hidden-xs"></div>
        </div>
      </div>

      </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
_
