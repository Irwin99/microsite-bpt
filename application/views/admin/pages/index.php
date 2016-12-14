<!DOCTYPE html>
<html>
  <head>
  <?php $this->load->view('admin/common/header'); ?>
  </head>
<body class="hold-transition skin-blue sidebar-mini">


<?php
    $this->load->view('admin/common/navbar');
    $this->load->view('admin/common/sidebar');
	$this->load->view($path_content);
?>
  <?php $this->load->view('admin/common/script'); ?>
<!-- jQuery 2.2.3 -->

</body>
</html>
