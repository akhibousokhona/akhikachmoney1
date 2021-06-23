<?php  include_once('header.php'); ?>
<?php
include("../connectdb.php");
      try
      {
        $er=array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $bdd = new PDO('mysql:host=localhost;dbname=AkhiKachMoney', 'root', 'passer',$er);
          $dr=$_GET['id'];
          $r =$bdd -> query("SELECT * FROM users WHERE id='$dr'");
          $row= $r -> fetch();
             if(isset($_POST['connexion'])){
              $login=$_POST['login'] ;
              $nom=$_POST['nom'] ;
              $prenom=$_POST['prenom'] ;
              $telephone=$_POST['telephone'] ;
              $cni=$_POST['cni'] ;
              $email=$_POST['email'] ;
              $update= $bdd -> query("UPDATE users SET login='$login',nom='$nom',prenom='$prenom',telephone='$telephone' ,cni='$cni',email='$email' WHERE id ='$dr' ");

          }
      }

        
      catch (Exception $e)
      {
        die('Erreur : ' . $e->getMessage());
      }
?>
<section class="main-content">
    <div class="container flex">
      <div class="user-profil">
        <div class="professional-info">
          <h4>Inscription</h4>
          <form action="" method="POST">
          <input type="text" name="login" placeholder="Login" required value="<?php echo $row['login'];?>" />
          <input  type="hidden" name="password" placeholder="Password" required />
          
          <input  type="hidden" name="password2" placeholder="Password confirm" required />
	        <input type="text" name="nom" placeholder="Nom" required  value="<?php echo $row['nom'];?>" //>
          <input type="text" name="prenom" placeholder="Prénom" required  value="<?php echo $row['prenom'];?>" //>
          <input type="text" name="telephone" placeholder="Téléphone" required value="<?php echo $row['telephone'];?>" />
          <input type="text" name="cni" placeholder="Numero CNI ou Passport" required value="<?php echo $row['cni'];?>" />
          <input type="email" name="email" placeholder="Email" required value="<?php echo $row['email'];?>" />
	       <button type="submit" name="connexion" value="connexion" class="btn--success btn--large btn-profil">Valider</button>
        </form>
        </div>
    </div>
     </div>
  </section>
