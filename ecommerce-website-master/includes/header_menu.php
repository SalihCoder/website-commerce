<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  
</body>
</html>

<!--Navigation bar start-->
<nav class="navbar fixed-top navbar-expand-sm navbar-dark" style="background-color:#000000">
            <div class="container">
                    <a href="index.php" class="navbar-brand" style="font-family: 'Delius Swash Caps'">AS SaliH ProD </i></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="nav navbar-nav">
                       <li class="nav-item dropdown">
                           <a href="" class="nav-link dropdown-toggle" id="navbar-drop" data-toggle="dropdown">
                               Produits
                            </a>
                               <div class="dropdown-menu">
                                   <a href="products.php#Flocages" class="dropdown-item">Flocages</a>
                                   <a href="products.php#SACHETS" class="dropdown-item">SACHETS</a>
                                   <a href="products.php#TEESHIRT" class="dropdown-item">TEE - SHIRT</a>
                                   <a href="products.php#TABLEAUMURAL" class="dropdown-item">TABLEAU MURAL</a>
                               </div>
                           
                       </li>
                       <li class="nav-item"><a href="index.php" class="nav-link">Offres</a></li>
                       <li class="nav-item"><a href="about.php" class="nav-link">À Propos </a></li>
                       <?php
                       if (isset($_SESSION['email'])) {
                        ?>
                       <li class="nav-item"><a href="cart.php" class="nav-link">  <i class="fa fa-shopping-cart" style="font-size:20px"></i> Panier </a></li>
                       <?php
                          } 
                    ?>
                    </ul>
                    
                    <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <ul class="nav navbar-nav ml-auto">
                       <li class="nav-item"><a href="logout_script.php" class="nav-link"><i class="fa fa-sign-out"></i>Se déconnecter</a></li>
                       <li class="nav-item"><a  class="nav-link " data-placement="bottom" data-toggle="popover" data-trigger="hover" data-content="<?php echo $_SESSION['email'] ?>"><i class="fa fa-user-circle "></i></a></li>
                    </ul>
                    <?php
                } else {
                    ?>
                    <ul class="nav navbar-nav ml-auto">
                       <li class="nav-item "><a href="#signup" class="nav-link"data-toggle="modal" ><i class="fa fa-user"></i> S'Identifier</a></li>
                       <li class="nav-item "><a href="#login" class="nav-link" data-toggle="modal"><i class="fa fa-sign-in"></i> Connexion</a></li>
                    </ul>
                    <?php 
                }
                    ?>
                    </div>
                </div>
            </div>
        </nav>
    <!--navigation bar end-->
    <!--Login trigger Modal-->
    <div class="modal fade" id="login" >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content"style="background-color:rgba(255,255,255,0.95)">

            <div class="modal-header">
              <h5 class="modal-title">Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <form action="login_script.php" method="post">
                 <div class="form-group">
                     <label for="email">Adresse Email :</label>
                     <input type="email" class="form-control"  name="lemail" placeholder="Entrer Email" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd"  name="lpassword" placeholder="Mot De Passe" required>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input">
                    <label for="checkbox" class="form-check-label">Se Souvenir De Moi</label>
                </div>
                <button type="submit" class="btn btn-secondary btn-block" name="Submit">Connexion</button>
              </form>
              <a href="http://">Mot de Passe Oublié?</a>
            </div>
            <div class="modal-footer">
              <p class="mr-auto">Nouveau Utilisateur? <a href="#signup" data-toggle="modal" data-dismiss="modal" >S'Identifier</a></p>
              <button type="button" class="btn btn-secondary" data-dismiss="modal" >Quitter</button>
            </div>
          </div>
        </div>
      </div>
    <!--Login trigger Model ends-->
    <!--Signup model start-->
    <div class="modal fade" id="signup">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content" style="background-color:rgba(255,255,255,0.95)">

            <div class="modal-header">
              <h5 class="modal-title">S'Identifier</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <form action="signup_script.php" method="post">
                <div class="form-group">
                     <label for="email">Addresse Email :</label>
                     <input type="email" class="form-control"  name="eMail" placeholder="Entrer Email" required>
                     <?php if(isset($_GET['error'])){ echo "<span class='text-danger'>".$_GET['error']."</span>" ;}  ?>
                </div>
                <div class="form-group">
                    <label for="pwd">Mot de Passe :</label>
                    <input type="password" class="form-control" id="pwd" name="password" placeholder="Mot de Passe" required>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="validation1">Prénom</label>
                        <input type="text" class="form-control" id="validation1" name="firstName" placeholder="Prénom" required>
                    </div>
                    <div class="form-group col-md -6">
                        <label for="validation2">Nom</label>
                        <input type="text" class="form-control" id="validation2" name="lastName" placeholder="Nom">
                    </div>
                </div>
                
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" required>
                    <label for="checkbox" class="form-check-label">D'accords des termes et Conditions </label>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="Submit">S'Identifier</button>
              </form>
            </div>
            <div class="modal-footer">
              <p class="mr-auto">Déjà Inscrit?<a href="#login"  data-toggle="modal" data-dismiss="modal">Connexion</a></p>
              <button type="button" class="btn btn-secondary" data-dismiss="modal" >Quitter</button>
            </div>
          </div>
        </div>
      </div>
      <!--Signup trigger model ends-->