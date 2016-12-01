<!DOCTYPE html>
<html>
  <head>
  <?php $this->load->view('admin/common/header'); ?>
  </head>
<body class="hold-transition skin-blue sidebar-mini">


<?php 
	$this->load->view($path_content);
?>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('asset/asset_lte/plugins/jQuery/jquery-2.2.3.min.js')?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('asset/asset_lte/bootstrap/js/bootstrap.min.js')?>"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url('asset/asset_lte/plugins/morris/morris.min.js')?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('asset/asset_lte/plugins/sparkline/jquery.sparkline.min.js')?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('asset/asset_lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')?>"></script>
<script src="asset/asset_lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="asset/asset_lte/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="asset/asset_lte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="asset/asset_lte/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="asset/asset_lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="asset/asset_lte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="asset/asset_lte/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="asset/asset_lte/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="asset/asset_lte/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="asset/asset_lte/dist/js/demo.js"></script>
</body>
</html>
