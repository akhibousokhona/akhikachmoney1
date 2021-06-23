<!-- Copyright (c) <2016>, <Kachallah Abagana Mahamat et Akhibou Sokhona>
All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE. -->
<?php
include("../connectdb.php");
	if($_POST["connexion"]=="connexion"){
			if(isset($_POST['login'])) $login=$_POST['login'] ;else $login='';
			if(isset($_POST['password'])) $password=md5($_POST['password']) ;else $password='';
			if(isset($_POST['password2']))	$password2=md5($_POST['password2']);else $password2='';
			if ($password!=$password2) {
			$message=" Mot de passe incorrect";
			include_once('ajout.php');
			exit();
			}
			if(isset($_POST['nom'])) $nom=$_POST['nom'] ;else $nom='';
			if(isset($_POST['prenom'])) $prenom=$_POST['prenom'] ;else $prenom='';
			if(isset($_POST['telephone'])) $telephone=$_POST['telephone'] ;else $telephone='';
			if(isset($_POST['cni'])) $cni=$_POST['cni'] ;else $cni='';
			if(isset($_POST['email'])) $email=$_POST['email'] ;else $email='';
			$q= $bdd ->prepare('insert into users (login,password,nom,prenom,telephone,cni,email) values(:log,:pass,:no,:preno,:tel,:cn,:em)');
     	    $is= $q -> execute (array('log'=>$login,'pass'=>$password,'no'=>$nom,'preno'=>$prenom,'tel'=>$telephone,'cn'=>$cni,'em'=>$email));
    
    		if ($is==1) {
				header('Location: index.php');
			}
			}
?>  
