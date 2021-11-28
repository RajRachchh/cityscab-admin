<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
  <!-- Font Awesome -->
  <?php $url = base_url(); ?>
  <link rel="stylesheet" href="<?php echo $url."assets/admin/"; ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons 
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  -->
  <!-- Tempusdominus Bbootstrap 4 
  <link rel="stylesheet"  href="<?php // echo $url."assets/admin/"; ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  -->
  <!-- iCheck 
  <link rel="stylesheet"  href="<?php // echo $url."assets/admin/"; ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  -->
  <!-- JQVMap 
 <link rel="stylesheet"  href="<?php //echo $url."assets/admin/"; ?>plugins/jqvmap/jqvmap.min.css">
 -->
  <!-- Theme style -->
   <link rel="stylesheet"  href="<?php echo $url."assets/admin/"; ?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars  -->
   <link rel="stylesheet"  href="<?php echo $url."assets/admin/"; ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
   
  <!-- Daterange picker -->
   <link rel="stylesheet"  href="<?php echo $url."assets/admin/"; ?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote 
   <link rel="stylesheet"  href="<?php // echo $url."assets/admin/"; ?>plugins/summernote/summernote-bs4.css">
	-->
	
	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo $url."assets/admin/"; ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo $url."assets/admin/"; ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

	<!-- SweetAlert2  Toastr -->
	<link rel="stylesheet"  href="<?php echo $url."assets/admin/"; ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
	<link rel="stylesheet"  href="<?php echo $url."assets/admin/"; ?>plugins/toastr/toastr.min.css">
	
	
	<!-- Select2 -->
	<link rel="stylesheet" href="<?php echo  base_url("assets/") ?>plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="<?php echo  base_url("assets/") ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Autocomplte  
	<link rel="stylesheet" href="<?php // echo  base_url("assets/") ?>plugins/Autocomplte/jquery-ui.css">	
	 Jquery Ui css  -->	
	

	<!-- Jquery -->
	<script src="<?php echo $url."assets/admin/"; ?>plugins/jquery/jquery.min.js"></script>
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php include "Topbar.php" ?>
<?php include "Sidebar.php" ?>
