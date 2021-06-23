<!-- Copyright (c) <2016>, <Kachallah Abagana Mahamat et Akhibou Sokhona>
All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE. -->
<?php  include_once('header.php'); ?>

<section class="main-content">
    <div class="container flex">
      <div class="user-profil">
        <div class="professional-info">
          <?php if (isset($message)) {
          echo " <strong>".$message." </strong>";
         } ?>
          <h4>Inscription</h4>
          <form action="traitement_ajout.php" method="POST">
          <input type="text" name="login" placeholder="Login" required />
          <input type="password" name="password" placeholder="Password" required />
          
          <input type="password" name="password2" placeholder="Password confirm" required />
	        <input type="text" name="nom" placeholder="Nom" required />
          <input type="text" name="prenom" placeholder="Prénom" required />
          <input type="text" name="telephone" placeholder="Téléphone" required/>
          <input type="text" name="cni" placeholder="Numero CNI ou Passport" required />
          <input type="email" name="email" placeholder="Email" required />
	       <button href="#" name="connexion" value="connexion" class="btn--success btn--large btn-profil">Valider</button>
        </form>
        </div>
    </div>
     </div>
  </section>

  <?php  require('../footer.php'); ?>
