<!-- Copyright (c) <2016>, <Kachallah Abagana Mahamat et Akhibou Sokhona>
All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE. -->
<?php
session_start();

include("connectdb.php");
	if($_POST["connexion"]=="connexion"){
			$rep=$bdd -> prepare('select * from users where login=:user AND password=:pass' );
					$rep -> execute (array ('user' =>$_POST['login'],'pass' =>md5($_POST['password'] )));
					$a=$rep -> fetch();

					if($a[0]>0 AND $_POST['login']=="admin"){
						header('location:private/ajout.php?id='.$a["id"]);
						//header('location:information.php?id=11');
						$_SESSION['name'] = $a[3];
					}
					elseif ($a[0]>0 AND $_POST['login']!="admin") {
						$_SESSION['user'] = $a[0];
						$_SESSION['nom'] = $a[3];
						header('location:users/index.php?id='.$a["id"]);

					}
					else {
					$info= "login ou mot de passe incorrecte";	
					include("index.php");
					
					} 
			}
?>            
