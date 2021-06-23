<!-- Copyright (c) <2016>, <Kachallah Abagana Mahamat et Akhibou Sokhona>
All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE. -->
<?php
//session_start();
 //$i=$dj['id']; 
 

include("../connectdb.php");
	if($_POST["envoyer"]=="envoyer"){
		if(isset($_POST['code'])) $codeRetrait=$_POST['code'] ;else $codeRetrait='';

$_session['code'] = $codeRetrait;
			try {


					$selc=$bdd -> prepare('select * from transaction WHERE code=:co');
					$selc -> execute (array ('co' =>$codeRetrait));
					$dj=$selc -> fetch();
					//$dj['id'] ;
				
					if($dj[0]>0 && $dj['status']=="0"){
							//$_session['id'] = $dj['id'];
							include('affiche.php');	
							exit();
					}
					elseif($dj[0]>0 && $dj['status']=="1"){
							$nodeb = "Code déjà utilisé";
							include('reception.php');
					}

			 			 //Sinon, on affiche les donnes a partir de la base de donnee
			           /* $dnn = $bdd -> prepare('SELECT nom_exp,prenom_exp,phone_exp,nom_benef,prenom_benef,phone_benef,montant,typePiece,numeroPiece from transaction where co ="' .$codeRetrait.'"');
			            $dnn -> execute (array('co' =>$codeRetrait));
			            $retr=$dnn -> fetch();*/
								
					
					else{
							$errd= "code non valide";
							include('reception.php');
							exit();
					}
				
			} catch (Exception $e) {
				$e->getMessage();
				
			}
		
					
	}
  ?>


					