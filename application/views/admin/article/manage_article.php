
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage article
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Manage article</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="box body">
      <a class="btn btn-sm bpt-btn-primary btn-rd" style="margin-top:10px" href="<?php echo base_url($this->uri->segment(1).'/article/add-article/')?>" role="button">
        <i class="fa fa-plus fa-fw" aria-hidden="true"></i>Add article
      </a>
      <div class="table-responsive">
        <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th width="10%">Title</th>
                  <th>Category</th>
                  <th width="20%">Content</th>
                  <th>Image</th>
                  <th>Caption</th>
                  <td>Input By</td>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
              		if($results!=FALSE){
              			foreach ($results as $rows) {
              				?>
              				<tr>
                        <td><?php echo $rows->title_article ?></td>
                        <td><?php echo $rows->name_category ?></td>
                        <td><?php echo substr($rows->content_article,0,300) ?>...</td>
                        <td><?php if($rows->image_article!= "") {
                          ?>
                          <img src="<?php echo base_url($rows->image_article)?>" height="150px">
                          <?php
                        } ?></td>
                        <td><?php echo $rows->caption ?></td>
                        <td><?php echo $rows->fullname?></td>
                  <td>
                    <a class="btn btn-sm bpt-btn-primary btn-rd" href="<?php echo base_url($this->uri->segment(1).'/article/edit-article/'.$rows->id_article)?>" role="button">
                      <i class="fa fa-pencil fa-fw" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-sm bpt-btn-primary btn-rd" href="<?php echo base_url($this->uri->segment(1).'/article/delete-article/'.$rows->id_article)?>" role="button">
                      <i class="fa fa-trash fa-fw" aria-hidden="true"></i>
                    </a>
                  </td>
                </tr>
                <?php
                }
              }
                 ?>
                 <?php
                 echo $links;
                  ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Content</th>
                  <th>Image</th>
                  <th>Caption</th>
                  <td>Input By</td>
                  <th>Action</th>
                </tr>
              </tfoot>

              </table>
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
