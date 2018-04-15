
<!DOCTYPE html>
<html>
<head>
	<title>ACCUEIL</title>
</head>
<body>

 <?php 
      include 'partials/_header.php';
      ?>


<div class="container text-content">

	  
	<div class="row">
		<div style="margin: 150px 50px;" class="col-md-5 col-xs-12 text-side">
		<p text-align:justify;>
			<h2 style="margin-top: 70px;">Presentation</h2>
			MEDIA TECHNOLOGIE SERVICE, société à responsabilité limitée est active depuis 3ans.
Implantée à DAKAR Centre ville immeuble Ndiouga kébé, elle est spécialisée dans le secteur d'activité de la programmation informatique. Son effectif est compris entre 20 et 26
salariés.
Sur l'année 2016 elle réalise un chiffre d'affaires de 200 700,00 €.
Le total du bilan a augmenté de 7,54 % entre 2015et 2016.



		</p>
	</div>

		<div >
			 <div id="login" class="panel panel-primary container" style="margin: 150px 20px;">
  <div class="panel-heading"><h3 class="panel-title"><strong> Identification</strong></h3></div>
  <div class="panel-body">
    <form id="frm-login" class="form-horizontal", action="video.php" class="col-md-7 col-xs-12 form-side" style="margin: 90px 50px;">
      <fieldset>
        <!-- Text input-->
        <div class="form-group">
          <label class="control-label" for="nomUtilisateur"><span class="glyphicon glyphicon-user"></span> Nom d'utilisateur</label>  
          <a class="pull-right" href="javascript:ctrl.chargerVue('compte');">Créer un compte</a>
          <div>
            <input id="nomUtilisateur" name="nomUtilisateur" type="text" placeholder="Entrez votre nom d'utilisateur" class="form-control input-md" required="">
          </div>
        </div>

        <!-- Password input-->
        <div class="form-group">
          <label class="control-label" for="mdp"><span class="glyphicon glyphicon-lock"></span> Mot de passe</label>
          <a class="pull-right">Mot de passe oublié</a>
          <div>
            <input id="mdp" name="mdp" type="password" placeholder="Entrez votre mot de passe" class="form-control input-md" required="">
          </div>
        </div>
        <!-- Button -->
        <div class="form-group">
          <label class="control-label" for="btnSigner"></label>
          <div>
              <button id="btnSigner" type="submit" name="btnSigner" class="btn btn-primary">Se connecter</button>
          </div>  

        </div>
      </fieldset>
    </form>

  </div>
</div>
		</div>
</div>
	
</div>

 <?php 
      include 'partials/_footer.php';
      ?>

</body>
</html>
