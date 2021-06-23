<?php

	if($_GET["envoyer"]=="Envoyer"){
			if(isset($_GET['numexp'])) $numexp=$_GET['numexp'] ;else $numexp='';
			if(isset($_GET['montant'])) $montant=$_GET['montant'] ;else $montant='';
			if(isset($_GET['numbenef'])) $numbenef=$_GET['numbenef'] ;else $numbenef='';
			if(isset($_GET['password'])) $password=$_GET['password'] ;else $password='';

			//var_dump($_GET);die();
			$url = 'http://localhost:5000/akhikach_vente/'.$numexp.'/'.$montant.'/'.$numbenef.'/'.$password.'/';
			$recup=file_get_contents($url);
			echo utf8_decode($recup);
	}

?>
