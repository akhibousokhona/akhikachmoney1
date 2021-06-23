<!-- Copyright (c) <2016>, <Kachallah Abagana Mahamat et Akhibou Sokhona>
All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE. -->
<?php 


 require('header.php'); ?>

<?php if(isset($error)){
          echo $error;
        }?>
  <section class="main-content">
    <div class="container flex">
      <div class="user-profil">
        <div class="professional-info">
          <form action = "traitement_envoi.php" method = "POST">
          <h4>Expéditeur</h4>
          <input type="text" placeholder="Nom" name = "nom1" required />
          <input type="text" placeholder="Prénom" name = "prenom1" required />
          <input type="text" placeholder="Téléphone" name = "phone1" required />
    
          <h4>Bénéficiaire</h4>
          <input type="text" placeholder="Nom" name = "nom2" required />
          <input type="text" placeholder="Prénom" name = "prenom2" required />
          <input type="text" placeholder="Téléphone" name = "phone2" required />
           <h4>Transaction</h4>
          <input  type="text" placeholder="Montant" name = "montant" required />
          <input type="text" placeholder="Commission" name = "commission" required />
          <!--input type="text" placeholder="Total" name = "total" required  /-->
		      <!--h4 >Code d'envoi : <img src="captcha.php" alt="CAPTCHA" /> </h4-->
          
          <!--button href="#" class="btn--success btn--large btn-profil" name="visualiser" value="Pré-visualiser" data-reveal-id="file-tool">Pré-visualiser</button-->
		      <button href="#" class="btn--success btn--large btn-profil" name="envoyer" value="Envoyer">Envoyer</button>
          </form>
        </div>
    </div>
    </div>
  
   <div id="file-tool" class="reveal-modal file-upload" data-reveal aria-labelledby="firstModalTitle"
       aria-hidden="true"
       role="dialog">
    <div class="reveal-modal__title">
      <h4>Envoie</h4>
    </div>
    <div class="reveal-modal__body reveal__share">
      <form action="" class="">
        
        <div class="paste-area">
          <p> <?php if(isset($a)){
          echo $a;
        }
          ?><a href="#">Vue Doc Koonda Box / Acces Disque Dur Ordinateur</a></p>
         
        </div>

        <p class="form__actions">
          <span class="buttons">
            <button class="ripple btn--cancel">Annuler</button>
            <button class="ripple btn--success">Valider</button>
          </span>
        </p>
      </form>
    </div>
    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
  </div>
  </section>

  <?php  require('../footer.php'); ?>

