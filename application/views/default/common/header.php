    <title>Blue Power Technology</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('asset/asset_default/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom CSS -->
    <?php
        if($this->uri->segment(1) == ""){
    ?>
    <link href="<?php echo base_url('asset/asset_default/css/stylish-portfolio.css')?>" rel="stylesheet">
    <?php
    }
    ?>

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('asset/asset_default/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Vollkorn|Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('asset/asset_default/js/bootstrap.min.js')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/asset_default/default.css')?>">
    <link rel="icon" href="<?php echo base_url('asset/images/favicon.jpg')?>" type="image/jpg">
