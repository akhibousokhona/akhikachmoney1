<!-- Copyright (c) <2016>, <Kachallah Abagana Mahamat et Akhibou Sokhona>
All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE. -->
<?php
session_start();

include("../connectdb.php");
	if($_POST["envoyer"]=="Envoyer"){
			if(isset($_POST['nom1'])) $nom1=$_POST['nom1'] ;else $nom1='';
			if(isset($_POST['prenom1'])) $prenom1=$_POST['prenom1'] ;else $prenom1='';
			if(isset($_POST['phone1'])) $phone1=$_POST['phone1'] ;else $phone1='';

			if(isset($_POST['nom2'])) $nom2=$_POST['nom2'] ;else $nom2='';
			if(isset($_POST['prenom2'])) $prenom2=$_POST['prenom2'] ;else $prenom2='';
			if(isset($_POST['phone2'])) $phone2=$_POST['phone2'] ;else $phone2='';

			if(isset($_POST['montant'])) $montant=$_POST['montant'] ;else $montant='';
			if(isset($_POST['commission'])) $commission=$_POST['commission'] ;else $commission='';
			$total=$montant+$commission;
			//if(isset($_POST['total'])) $total=$_POST['total'] ;else '';
			//if(isset($_POST['codes']) && $_POST['codes']==$_SESSION['code']) {
			//if(isset($_POST['codes'])) $codes=$_POST['codes']; else $codes='';
			$user = $_SESSION['user'] ;
			
			$co=rand(100000,999999);
			$date=gmdate('Y-m-d H:i:s');
			try {
					$repr=$bdd -> prepare('select * from transaction WHERE code=:co');
					$repr -> execute (array('co' =>$co));
					$b=$repr -> fetch();
					if($b[0]>0){
						$error= "code exitant";
						include('envoi.php');
					}
					else{
						$q= $bdd ->prepare('insert into transaction (nom_exp,prenom_exp,phone_exp,nom_benef,prenom_benef,phone_benef,montant,commission,total,code,status,date_transaction,userid) 
						values(:no1,:preno1,:tel1,:no2,:preno2,:tel2,:mont,:com,:tot,:co,:stat,:date,:us)');
       					$is = $q -> execute (array('no1'=>$nom1,'preno1'=>$prenom1,'tel1'=>$phone1,'no2'=>$nom2,'preno2'=>$prenom2,'tel2'=>$phone2,'mont'=>$montant,'com'=>$commission,'tot'=>$total,'co'=>$co,'stat'=>"0",'date'=>$date,'us'=>$user));
   						if ($is==1) {
							header('Location: etat.php?etat=OK');

						}
					}
	
	
					} 
					catch (Exception $e) {
							echo $e->getMessage(); 

					}

			
			
			
 	}  
    
    
/*  elseif ($_POST["visualiser"]=="Pré-visualiser") {
  	
      if(isset($_POST['nom1'])) $nom1=$_POST['nom1'] ;else $nom1='';
      if(isset($_POST['prenom1'])) $prenom1=$_POST['prenom1'] ;else $prenom1='';
      if(isset($_POST['phone1'])) $phone1=$_POST['phone1'] ;else $phone1='';

      if(isset($_POST['nom2'])) $nom2=$_POST['nom2'] ;else $nom2='';
      if(isset($_POST['prenom2'])) $prenom2=$_POST['prenom2'] ;else $prenom2='';
      if(isset($_POST['phone2'])) $phone2=$_POST['phone2'] ;else $phone2='';

      if(isset($_POST['montant'])) $montant=$_POST['montant'] ;else $montant='';
      if(isset($_POST['commission'])) $commission=$_POST['commission'] ;else $commission='';
      if(isset($_POST['total'])) $total=$_POST['total'] ;else $total='';

      $a= "Expéditeur".'<br/>'.$nom1.'<br/>' .$prenom1.'<br/>'. $phone1.'<br/>'.$nom2.'<br/>'.$prenom2.'<br/>'.$phone2.'<br/>'.$montant.'<br/>'.$commission.'<br/>'.$total ;die;
      //$q= $bdd ->prepare('insert into users (login,password,nom,prenom,telephone,cni,email) values(:log,:pass,:no,:preno,:tel,:cn,:em)');
       // $q -> execute (array('log'=>$login,'pass'=>$password,'no'=>$nom,'preno'=>$prenom,'tel'=>$telephone,'cn'=>$cni,'em'=>$email));
    }  */
?>  
