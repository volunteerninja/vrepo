<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo htmlspecialchars( $results['pageTitle'] )?></title>
	<?php include_once "fbaccess.php"; ?>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div id="container">

      <a href="." class="abc"><img id="logo" src="images/logo.jpg" alt="Volunteer Ninjas" /><img id="title" src="images/logo_txt.png" alt="Volunteer Ninjas" /></a><?php if($user) echo('<img src="https://graph.facebook.com/'. $user .'/picture?type=large"/>');?>
	  <br style="clear:both"/>

