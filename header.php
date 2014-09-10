<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 Strict//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<!--
IdleRPG Website by adamus1red is licensed under a 
Creative Commons Attribution-NonCommercial-ShareAlike 
3.0 Unported License.
Based on a work at http://idlerpg.net/.
-->

<html>
  <head>
    <title><?php echo $irpg_chan;?> Idle RPG: <?php echo $irpg_page_title;?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="<?php echo $BASEURL;?>js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo $BASEURL;?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo $BASEURL;?>js/scripts.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo $BASEURL; ?>theme/classic/css/style.css" media="screen">
    <link href="<?php echo $BASEURL; ?>css/style.css" rel="stylesheet" media="screen">
<?php
        if ($enable_analytics == True) {
            include("analytics.php");
        }
        if ($fuck_IE == True) {
            echo '            <!--[if lte IE 9]> <script type="text/javascript" src="' . $BASEURL . 'js/fucking-ie.js"></script> <![endif]-->';
        } else {
            echo '            <!--[if lte IE 9]> <script type="text/javascript" src="' . $BASEURL . 'js/html5shiv.js"></script> <![endif]-->';
        }
        ?>
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php $BASEURL; ?>"><?php echo $net_name; ?></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li<?php if ($BASEURL . 'index.php' == $_SERVER['PHP_SELF']) { echo " class=active";}?>><a href="<?php echo $BASEURL;?>">Game Info</a></li>
                    <li<?php if ($BASEURL . 'players.php' == $_SERVER['PHP_SELF']) { echo " class=active";}?>><a href="<?php $BASEURL; ?>players.php">Player Info</a></li>
                    <li<?php if ($BASEURL . 'worldmap.php' == $_SERVER['PHP_SELF']) { echo " class=active";}?>><a href="<?php $BASEURL; ?>worldmap.php">World Map</a></li>
                    <li<?php if ($BASEURL . 'quest.php' == $_SERVER['PHP_SELF']) { echo " class=active";}?>><a href="<?php $BASEURL; ?>quest.php">Quest Info</a></li>
                    <li<?php if ($BASEURL . 'contact.php' == $_SERVER['PHP_SELF']) { echo " class=active";}?>><a href="<?php $BASEURL; ?>contact.php">Contact</a></li>
                    <li><a href="https://github.com/rustybower/idlerpg-site/">Site Source</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container wrap">
