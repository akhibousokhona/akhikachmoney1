<!-- Copyright (c) <2016>, <Kachallah Abagana Mahamat et Akhibou Sokhona>
All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE. -->
<html class="no-js" lang=""> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
  </head>
</html>

<?php 


 require('header.php'); ?>

<?php if(isset($error)){
          echo $error;
        }?>
  <section class="main-content">
    <div class="container flex">
      <div class="user-profil">
        <div class="professional-info">
          <form action = "traitementvente.php" method = "GET">
          <h4>Vente de Crédit </h4>
          <input type="text" placeholder="Numero Expéditeur" name = "numexp" required />
          <input type="text" placeholder="Montant" name = "montant" required />
          <input type="text" placeholder="Numero Destinataire" name = "numbenef" required />
           <input type="text" placeholder="password" name = "password" required />
  
          <button href="#" class="btn--success btn--large btn-profil" name="envoyer" value="Envoyer">Envoyer
          </button>
        
      </form>
        
		    
         
        </div>
    </div>
    </div>
  
  
       
  <?php  require('../footer.php'); ?>

