<!-- Copyright (c) <2016>, <Kachallah Abagana Mahamat et Akhibou Sokhona>
All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE. -->
<?php  require('header.php'); ?>
<?php
			include("../connectdb.php");
			$req =$bdd -> query('SELECT * FROM users');
			//$req =$bdd -> prepare('SELECT * FROM users where id >1');
			//$req->execute(array($_GET['id'],$_GET['login'],$_GET['password'],$_GET['nom'],$_GET['prenom'],$_GET['telephone'],$_GET['cni'],$_GET['email']));
		
        $gid=$_GET['id'];
        $rr=$bdd -> query("DELETE  FROM users WHERE id='$gid'");
        

           			
?>  
<!--table border=1 width="50%"-->

	<div class="content" id="tools">
          <table class="table table-interieur">
            <thead>
				<tr>
					<th>Id</th>
					<th>Login</th>
					
					<th>Nom</th>
					<th>Prenom</th>
					<th>Telephone</th>
					<th>CNI</th>
					<th>Email</th>
					<th>Actions</th>
				</tr>
				</thead>
           		 <tbody>
					<?php
						while ($donnee = $req -> fetch()) {

							?>
						<tr>
							<td><?php echo $donnee['id']; ?></td>
							<td><?php echo $donnee['login']; ?></td>
							
							<td><?php echo $donnee['nom']; ?></td>
							<td><?php echo $donnee['prenom']; ?></td>
							<td><?php echo $donnee['telephone']; ?></td>
							<td><?php echo $donnee['cni']; ?></td>
							<td><?php echo $donnee['email']; ?></td>
							<!--td>  <button  data-dropdown="drop1" aria-controls="drop1" aria-expanded="false" class="btn ripple btn&#45;&#45;success dropdown">Actions</button>
        					<ul id="drop1" data-dropdown-content class="f-dropdown" aria-hidden="true">
          						<li><a href="#">Modifier</a></li>
         						 <li><a href="#">Supprimer</a></li>  

       						 </ul></td-->
       						  <td class="table-interieur__statut">
               					 <ul class="inline-list">
	                  				 <li class="relative"><a href="javascript:" class="table-interieur__statut__more-options"><i
	                   				 class="mdi mdi-dots-horizontal"></i></a>
                   				 <ul class="card__more-options__list">
				                      <li><a href="modification.php?id=<?php echo $donnee['id'];?>" class="rename-project">Renommer</a></li>				     
								       <li><a href="liste.php?id=<?php echo $donnee['id'];?>" class="delete-project"> Supprimer</a></li>
				                    </ul>
				                  </li>
				                </ul>
				              </td>

						</tr>
					<?php } ?>
				</table>
				<?php $req->closeCursor();?>
				</div>


<?php  require('../footer.php'); ?>
