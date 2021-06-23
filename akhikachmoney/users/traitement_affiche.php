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
      if(isset($_POST['typePiece'])) $typePiece=$_POST['typePiece'] ;else $typePiece='';
      if(isset($_POST['numpiece'])) $numpiece=$_POST['numpiece'] ;else $numpiece= '';
     if(isset($_POST['code']))  $codeRe=$_POST['code'] ;
      if(isset($_POST['commission'])) $commission=$_POST['commission']; else $commission='';
       if(isset($_POST['total'])) $total=$_POST['total']; else $total='';
      $date=gmdate('Y-m-d H:i:s');
      $user = $_SESSION['user'] ;

       if(isset($_POST['id'])) $id=$_POST['id'] ;else $id='';
     
            $q= $bdd ->prepare('insert into transaction (nom_exp,prenom_exp,phone_exp,nom_benef,prenom_benef,phone_benef,montant,commission,total,code,status,typePiece,numeroPiece,date_transaction,userid) 
            values(:no1,:preno1,:tel1,:no2,:preno2,:tel2,:mont,:comm,:tot,:co,:stat,:tyP,:nuP,:date,:us)');
           
            $x="1";
                $is = $q -> execute (array('no1'=>$nom1,'preno1'=>$prenom1,'tel1'=>$phone1,'no2'=>$nom2,'preno2'=>$prenom2,'tel2'=>$phone2,'mont'=>$montant,'comm'=>$commission,'tot'=>$total,'co'=>$codeRe,'stat'=>$x,'tyP'=>$typePiece,'nuP'=>$numpiece,'date'=>$date,'us'=>$user));
               
                $upd = $bdd->prepare('UPDATE transaction SET status = :pay WHERE id =:ic ');
                 $up=$upd -> execute (array('pay'=>$x,'ic'=> $id )) ;
                 
              if ($is==1) {
              header('Location: etat.php?etat=OK');
            }
          }
          
  ?>
