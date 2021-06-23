<!-- Copyright (c) <2016>, <Kachallah Abagana Mahamat et Akhibou Sokhona>
All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE. -->
<?php

			require('header.php'); 

			include("../connectdb.php");
			$user = $_SESSION['user'] ;
			$req =$bdd  -> query('SELECT * FROM transaction where userid='.$user);

			if (isset($_GET['etat']) && $_GET['etat']=='OK') {
				echo "Opération reussie";
			}
?>  
		
		<div class="content" id="tools">
          <table border=1 width="50%">


            <thead >
				<tr >
					<th>NomExp</th>
					<th>PreExp</th>
		
					<th>NomBen</th>
					<th>PreBen</th>
				
					<th>montant</th>
					<th>Comm</th>
					
					<th>Code</th>
					<th>status</th>
									
					<th>dateTrans</th>
				</tr>
				</thead>
           		 <tbody>
					<?php
						while ($cor = $req -> fetch()) {

							?>
						<tr>
							<td><?php echo $cor['nom_exp']; ?></td>
							
							<td><?php echo $cor['prenom_exp']; ?></td>
				
							<td><?php echo $cor['nom_benef']; ?></td>
							<td><?php echo $cor['prenom_benef']; ?></td>
						

							<td><?php echo $cor['montant']; ?></td>
							<td><?php echo $cor['commission']; ?></td>
							
							<td><?php echo $cor['code']; ?></td>
							<td><?php echo $cor['status']; ?></td>

							<td><?php echo $cor['date_transaction']; ?></td>

						</tr>
					<?php } ?>
				</table>
				<?php $req->closeCursor();?>
				</div>
					
<?php  require('../footer.php'); ?>
