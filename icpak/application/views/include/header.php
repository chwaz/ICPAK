<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified JavaScript -->
		<script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>

		<!--<script src="<?php //echo base_url();?>assets/js/bootstrap.min.js"></script>-->
		<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>

		<!-- Style CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style_new.css">

		<!-- Font Import -->
		<link href='http://fonts.googleapis.com/css?family=Exo' rel='stylesheet' type='text/css'>
		<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet"> -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
		<link ref="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">

		<!-- Optional theme -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-theme.min.css">

		<script type="test/javascript">
		$(document).ready(function(){
			if ($('#Address1').is(':empty')){
				  //do something
				  $( ".fa-home" ).hide();
				}
			else if ($('#Address2').is(':empty')){
				  //do something
				  $( ".fa-map-marker" ).hide();
				}
			else if ($('#Address3').is(':empty')){
				  //do something
				  $( ".fa-location-arrow" ).hide();
				}
			else if ($('#City').is(':empty')){
				  //do something
				  $( ".fa-location-building" ).hide();
				}
			else if ($('#Email').is(':empty')){
				  //do something
				  $( ".fa-inbox" ).hide();
				}
			else ($('#Telephone').is(':empty')){
				  //do something
				  $( ".fa-phone" ).hide();
				}
		});
		</script>
	</head>
	<body>
		<div class="container">