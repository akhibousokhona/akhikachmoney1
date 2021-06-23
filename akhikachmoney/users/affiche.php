<!-- Copyright (c) <2016>, <Kachallah Abagana Mahamat et Akhibou Sokhona>
All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE. -->
<?php  

require('header.php'); 

?>

  <section class="main-content">
    <div class="container flex">
      <div class="user-profil">
        <div class="professional-info">
          <form action = "traitement_affiche.php" method = "POST">
          <h4>Expediteur</h4>
           <input type="hidden"  name = "id" value=<?php echo $dj['id']; ?> />
           <input type="hidden"  name = "code" value=<?php echo $dj['code']; ?> />

          <input type="text" readonly="true" name = "nom1" value=<?php echo $dj['nom_exp']; ?> />
          <input type="text" readonly="true" name = "prenom1" value=<?php echo $dj['prenom_exp']; ?> />
          <input type="text" readonly="true" name = "phone1" value=<?php echo $dj['phone_exp']; ?> />
    
          <h4>Beneficiaire</h4>
          <input type="text" readonly="true" name = "nom2" value=<?php echo $dj['nom_benef']; ?>  />
          <input type="text" readonly="true" name = "prenom2" value=<?php echo $dj['prenom_benef']; ?>  />
          <input type="text" readonly="true" name = "phone2" value=<?php echo $dj['phone_benef']; ?>  />
           <h4>Transaction</h4>
          <input  type="text" readonly="true" name = "montant" value=<?php echo $dj['montant']; ?>  />

          <input  type="text" readonly="true" name = "commission" value=<?php echo $dj['commission']; ?> />
          <input type="text" readonly="true" name = "total" value=<?php echo $dj['total']; ?> />
       
            <select class="form-control" name = "typePiece" >
              <option value=""></option>
             <option value="CNI">CNI</option>
             <option value="passport">Passport</option>
          </select>
         
          <input type="text" placeholder="Numéro Piece" name = "numpiece" required  />
         
		      <button href="#" class="btn--success btn--large btn-profil" name="envoyer" value="Envoyer">Valider</button>
          </form>
        </div>
    </div>
    </div>

  </section>

  <?php  require('../footer.php'); ?>


