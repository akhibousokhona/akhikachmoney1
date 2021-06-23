<!-- Copyright (c) <2016>, <Kachallah Abagana Mahamat et Akhibou Sokhona>
All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE. -->
<?php 
session_start();
$nom = $_SESSION['nom'];
if(!isset($nom)){
	header('Location : ../index.php');
	exit();	
}
	
 ?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>akhikachmoney : <?php echo $nom; ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/css/main.css">
  <script src="../assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
  <script src="../assets/js/vendor/scotchPanels.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
  your browser</a> to improve your experience.</p>
<![endif]-->

  <aside id="sidebar-nav" class="pushy pushy-left">
    <nav>
      <h1 class="text-center"><a href="./"><img src="../assets/img/logo.png" alt="logo"/></a></h1>
      <ul>
        <li><a href="envoi.php"><span><i class="icon icon-projet"><img src="../assets/svg/icon_folder.svg" alt=""/></i></span><span>Envoi</span></a></li>
        <li><a href="reception.php"><span><i class="icon icon-tools"><img src="../assets/svg/icon_tool.svg" alt=""/></i></span> <span>Retrait</span></a></li>
        <li><a href="etat.php"><span><i class="icon icon-message"><img src="../assets/svg/icon_discussion.svg" alt=""/></i></span> <span>Etats Transactions</span></a></li>
        <li><a href="vente.php"><i class="mdi mdi-information-outline"></i> Vente de Crédit</a></li>
      </ul>
    </nav>
  </aside><!-- Site Overlay -->
<div class="site-overlay"></div>

<div id="container">
  <header class="site-header">
    <div class="container flex">
      <div class="left-side flex">
        <a href="javascript:" class="menu-btn"><i class="mdi mdi-menu"></i></a>
        <!--p><img src="../assets/svg/icon_folder.svg" alt=""/></p-->
        <h3><a href="../users"><i class="icon project"></i> AkhiKachMoney</a></h3>
      </div>
    
    <div class="right-side flex">
        <a href="#" id="user"><?php echo $nom; ?><i class="mdi mdi-chevron-down"></i></a>
      </div>
    </div>
    <ul class="user-options">
      <li><p></p></li>
      <li><a href="../logout.php"><i class="mdi mdi-logout"></i> Deconnexion</a></li>
      <li><a href="#"><i class="mdi mdi-logout"></i>Paramètre</a></li>
    </ul>
    </div>
    
  </header>

<?php include("../connectdb.php");




?>
