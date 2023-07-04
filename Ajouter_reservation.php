<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	
	
	
<style>
  #formulaire {
	display: none;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	padding: 20px;
	background-color: rgba(0,0,0,0.5);
	border: 1px solid #ccc;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
	border-radius: 15px;
	z-index: 9999;
	box-shadow: 0 0 2px 2px gold;
	margin:300px;
   }
 
   #formulaire label {
	display: block;
	margin-bottom: 10px;
	color:white;
   }
 
   #formulaire input[type="tel"],
   #formulaire input[type="date"],
   #formulaire input[type="time"], 
   #formulaire input[type="number"], 
   textarea{
	width: 100%;
	padding: 10px;
	border: 1px solid #ccc;
	border-radius: 5px;
	font-size: 16px;
	margin-bottom: 20px;
	background-color: rgba(0,0,0,0.5);
	color: white;
   }
 
   #formulaire input[type="submit"] {
	background-color: #4CAF50;
	color: #fff;
	padding: 10px 20px;
	border: none;
	border-radius: 5px;
	font-size: 16px;
	cursor: pointer;
   }
   


#formulair {
	display: none;
	position:absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	padding: 20px;
	background-color: rgba(0,0,0,0.5);
	border: 1px solid #ccc;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
	border-radius: 15px;
	z-index: 9999;
	box-shadow: 0 0 2px 2px gold;
	height:700px;
	bottom:0;
	margin-bottom:500px;
	
	}
 
   #formulair label {
	display: block;
	margin-bottom: 10px;
	color:white;
   }
 
   #formulair input[type="tel"],
   #formulair input[type="time"],
   #formulair input[type="date"], 
   #formulair input[type="number"], 
   #formulair input[type="text"], 
   textarea{
	width: 380px;
	padding: 10px;
	border: 1px solid #ccc;
	border-radius: 5px;
	font-size: 16px;
	margin-bottom: 20px;
	background-color: rgba(0,0,0,0.5);
	color: white;
   }
   
   textarea{
   height:69px;
   }
 
   #formulair input[type="submit"] {
	background-color: #4CAF50;
	color: #fff;
	padding: 10px 20px;
	border: none;
	border-radius: 5px;
	font-size: 16px;
	cursor: pointer;
   }


 #formulaire2 {
	display: none;
	position:absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	padding: 20px;
	background-color: rgba(0,0,0,0.5);
	border: 1px solid #ccc;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
	border-radius: 15px;
	z-index: 9999;
	box-shadow: 0 0 2px 2px gold;
	height:650px;
	bottom:0;
	margin-bottom:500px;
	margin:300px;
	
	}
 
   #formulaire2 label {
	display: block;
	margin-bottom: 10px;
	color:white;
   }
 
   #formulaire2 input[type="text"],
   #formulaire2 input[type="tel"],
   #formulaire2 input[type="email"], 
   #formulaire2 input[type="number"], 
   textarea{
	width: 380px;
	padding: 10px;
	border: 1px solid #ccc;
	border-radius: 5px;
	font-size: 16px;
	margin-bottom: 20px;
	background-color: rgba(0,0,0,0.5);
	color: white;
   }
 
   #formulaire2 input[type="submit"] {
	background-color: #4CAF50;
	color: #fff;
	padding: 10px 20px;
	border: none;
	border-radius: 5px;
	font-size: 16px;
	cursor: pointer;
   }
 
#menu {
	display: none;
	position:absolute;
	top: 230px;
	left: 80%;
	transform: translate(-50%, -50%);
	padding: 10px;
	background-color: rgba(0,0,0,0.5);
	border: 1px solid #ccc;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
	border-radius: 15px;
	z-index: 9999;
	box-shadow: 0 0 2px 2px gold;
	height:250px;
	
	margin-bottom:50px;
	color: #fff;
	width:200px;
	
} 

#menu ul{
	 list-style-type:none;
	 margin:0;
	 padding:0;
 }
	

#menu li{
margin-bottom:10px;
 }	
 
 #menu li{
margin-bottom:0px;
 }	
 
	 #menu a{
	 text-decoration:none;
	color: #fff;
	display:block;
	padding:9px;
	padding-left:19px;
	padding-right:19px;
 }
 
 #menu a.active{
	 text-decoration:none;
	color: #fff;
	background:#4CAF50;;
	padding:10px ;
	padding-left:19px;
	padding-right:19px;
 }
 
 #menu a:hover{
	 
	color: #fff;
	background:#ffbe33;

 }


  
  </style>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</head>
<body class="sub_page">
<script>
		function afficherFormulaire() {
		 document.getElementById("formulaire").style.display = "block";
		}
		
		function fermerClose() {
	   document.getElementById("formulaire").style.display="none";
		}
	   </script>
	   <script>
		function afficheerFormulaire() {
		 document.getElementById("formulair").style.display = "block";
		}
		
		function fermeerClose() {
	   document.getElementById("formulair").style.display="none";
		}
	   </script>
	   <script>
		function afficherFormulaire2() {
		 document.getElementById("formulaire2").style.display = "block";
		}
		
		function fermerClose2() {
	   document.getElementById("formulaire2").style.display="none";
		}
		
	   </script>
	   
	   <script>
	   function showMenu() {
	   document.getElementById("menu").style.display="block";
	   }
	   
	   function hideMenu() {
	   document.getElementById("menu").style.display="none";
	   }
	   
	   
	   </script>

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Cameroun Food
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Accueil</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">Menu <span class="sr-only">(current)</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="indexx.php" style =" white-space:nowrap; " >A propos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"  onclick="afficherFormulaire()" style =" white-space:nowrap; ">reservation de Table</a>
              </li>
            </ul>
			<div id="formulaire">
		<form method="POST" action="ajouter_reservation.php">
          
       <label for="telephone">Téléphone :</label>
  <input type="tel" name="telephone" required><br>

        <label for="date_reservation">Date de la réservation :</label>
        <input type="date" name="date_reservation" required><br>

        <label for="heure_reservation">Heure de la réservation :</label>
        <input type="time" name="heure_reservation" required ><br>

        <label for="nombre_personnes">Nombre de personnes :</label>
        <input type="number" name="nombre_personnes" required><br>

        <label for="commentaire">Commentaire (facultatif) :</label>
        <textarea name="commentaire" rows="4" cols="50"></textarea><br>

        <input type="submit" name="submit" value="Ajouter la réservation">
		<input type="submit" onclick="fermerClose()" value="fermer">
    </form>
	   </div>
	   
			
			
            <div class="user_option">
              <a href="#" class="user_link" onclick="afficherFormulaire2()">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              <a class="cart_link" href="#">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                  
                </svg>
              </a>
              <a href="#" class="order_online" onclick="showMenu()">Traduction</a>
			  
            </div>
          </div>
        </nav>
      </div>
    </header>
	<div id="menu" style="display:none;" >
	                                               <ul style="list-style-type:none";>
	                                                 <li><a href="#" class="active">francais</a></li>
													 <li><a href="menu.html">Anglais</a></li>
													 <li><a href="jus.html">Espagnol</a></li>
													 <li><a href="#" onclick="hideMenu()">Allemang</a></li>
													 </ul>
			 </div>
	 <div id="formulaire2">
		   <form method="POST" action="ajouter_client.php">
    
  <label for="nom">Nom :</label>
  <input type="text" name="nom" required><br>

  <label for="email">Email :</label>
  <input type="email" name="email" required><br>

  <label for="telephone">Téléphone :</label>
  <input type="tel" name="telephone" required><br>

  <label for="adresse">Adresse :</label>
  <input type="text" name="adresse" required><br>

  <label for="code_postal">Code postal :</label>
  <input type="text" name="code_postal" required><br>

  

  <input type="submit" name="submit" value="Ajouter le client">
  		<input type="submit" onclick="fermerClose2()" value="fermer">
 </form>
		 </div> 
    <!-- end header section -->
  </div>

  <!-- food section -->

  <section class="food_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Notre Menu
        </h2>
      </div>

      <ul class="filters_menu">
        <a href="#"><li class="active" data-filter="*">plat géréraux</li></a>
        <a href="jus.php"><li data-filter=".pizza">jus traditionnel</li></a>
        <a href="gateau.php"><li data-filter=".pasta">gateau traditionnel</li></a>
      </ul>

      <div class="filters-content">
        <div class="row grid">
          <div class="col-sm-6 col-lg-4 all pizza">
            <div class="box"  onclick="afficheerFormulaire()">
              <div>
                <div class="img-box">
                  <img src="images/Screenshot_20230606-155629-541.png" alt="" width="400px" height="400px">
                </div>
                <div class="detail-box">
                  <h5>
                    Delicieux Eru
                  </h5>
                  <p>
                    Le ERU un veritable plat d'unité, mélange d'épinards,d'okok, des legume, de peau de viande et huile de palme
                  </p>
                  <div class="options">
                    <h6>
                      6000cfa
                    </h6>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
		  <div id="formulair">
				<form method="POST" action="ajouter_commande.php">
        
		<label for="telephone">Téléphone :</label>
  <input type="tel" name="telephone" ><br>

        <label for="date_commande">Date de la commande :</label>
        <input type="date" name="date_commande" required><br>

        <label for="heure_commande">Heure de la commande :</label>
        <input type="time" name="heure_commande" required><br>

        <label for="montant_total">Nombre de plat :</label>
        <input type="number" step="1" name="nombre_plat" required><br>
		
		<label for="montant_total">Nom du plat :</label>
        <input type="text"  name="Nom_plat" required><br>


        <label for="commentaire">Commentaire (facultatif) :</label>
        <textarea name="commentaire" rows="4" cols="50"></textarea><br>

        <input type="submit" name="submit" value="Ajouter la commande">
		<input type="submit" onclick="fermeerClose()" value="fermer">
		
    </form>
	   </div>
		  
		  
		  
		  
		  
		  
		  
		  
		  
          <div class="col-sm-6 col-lg-4 all burger">
            <div class="box" onclick="afficheerFormulaire()">
              <div>
                <div class="img-box">
                  <img src="images/Screenshot_20230606-155558-796.png" alt="" width="400px" height="400px">
                </div>
                <div class="detail-box">
                  <h5>
                    TARO, SAUCE JAUNE
                  </h5>
                  <p>
                    Issu de l'ouest cameroun chez les bamiléké ce plat est a base de taro pilé, d'une sauce faite d'huile de palme de viande et champignions
                  </p>
                  <div class="options">
                    <h6>
                      7000fca
                    </h6>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all pizza">
            <div class="box" onclick="afficheerFormulaire()">
              <div>
                <div class="img-box">
                  <img src="images/Screenshot_20230606-164246-874.png" alt="" width="400px" height="400px">
                </div>
                <div class="detail-box">
                  <h5>
                    OKOK
                  </h5>
                  <p>
                    Plat traditionel du sud (sucré) est a base de feuille d'okok, d'arrachide, huile de palme et de sucre.
                  </p>
                  <div class="options">
                    <h6>
                      6000cfa
                    </h6>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all pasta">
            <div class="box" onclick="afficheerFormulaire()">
              <div>
                <div class="img-box">
                  <img src="images/Screenshot_20230606-155922-885.png" alt=""width="400px" height="400px">
                </div>
                <div class="detail-box">
                  <h5>
                    GATEAU DE PISTACHE
                  </h5>
                  <p>
                    Un met traditionnel camerounais un melange de pistache et viande de jus de noix de palme se mande avec des miondo ou plantain
                  </p>
                  <div class="options">
                    <h6>
                      5000cfa
                    </h6>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all fries">
            <div class="box" onclick="afficheerFormulaire()">
              <div>
                <div class="img-box">
                  <img src="images/Screenshot_20230608-144125-769.png" alt="" width="400px" height="400px">
                </div>
                <div class="detail-box">
                  <h5>
                    SANGA
                  </h5>
                  <p>
                    Un plat apprécié dans le sud et le centre du cameroun, fait a base de ma&iuml;s, de legume,d'arrachide, d'huile de palme et de sucre
                  </p>
                  <div class="options">
                    <h6>
                      7000cfa
                    </h6>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all pizza">
            <div class="box" onclick="afficheerFormulaire()">
              <div>
                <div class="img-box">
                  <img src="images/Screenshot_20230606-163330-495.png" alt="" width="400px" height="400px">
                </div>
                <div class="detail-box">
                  <h5>
                    POISON BRAISE
                  </h5>
                  <p>
					Celui-ci assaisonés par les epices du pays cuit sur un baebecue se mange avec des miondo ou frites de plantain
                  </p>
                  <div class="options">
                    <h6>
                      10&nbsp000cfa.
                    </h6>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all burger">
            <div class="box" onclick="afficheerFormulaire()">
              <div>
                <div class="img-box">
                  <img src="images/Screenshot_20230606-163414-477.png" alt="" width="400px" height="400px">
                </div>
                <div class="detail-box">
                  <h5>
                    NJAMA NJAMA
                  </h5>
                  <p>
                    Plat du Nord-ouest,il s'agit des légumes, feuilles de njama njama avec du poulet qui se mange avec du couscous
                  </p>
                  <div class="options">
                    <h6>
                      10000cfa
                    </h6>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all burger">
            <div class="box" onclick="afficheerFormulaire()">
              <div>
                <div class="img-box">
                  <img src="images/Screenshot_20230606-155810-215.png" alt="" width="400px" height="400px">
                </div>
                <div class="detail-box">
                  <h5>
                    KONDRE
                  </h5>
                  <p>
                    Plat originaire de l'ouest fait a base de viande de porc, chevre, ou b&oelig;uf, de l'huile, epices et pot&eacute;e de plantain
                  </p>
                  <div class="options">
                    <h6>
                      8000cfa
                    </h6>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all pasta">
            <div class="box" onclick="afficheerFormulaire()">
              <div>
                <div class="img-box">
                  <img src="images/photo_1642232885.jpg" alt="" width="800px" height="800px">
                </div>
                <div class="detail-box">
                  <h5>
                    NDOLE
                  </h5>
                  <p>
					Pr&eacute;parer a base des l&eacute;gumes mix&eacute;e dans l'arachide, a la, crevettes ou poissons accompagn&eacute; de miondo
                  </p>
                  <div class="options">
                    <h6>
                      7000cfa
                    </h6>
                   
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
  </section>

  <!-- end food section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contacter nous
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  appelez +237&nbsp;659686322
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Feane
            </a>
            <p>
              Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
            </p>
            
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            heures d'ouverture
          </h4>
          <p>
            tous les jours
          </p>
          <p>
            10.00 Am -10.00 Pm
          </p>
        </div>
      </div>
      
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->









<?php
// Paramètres de connexion à la base de données
$serveur = "localhost";
$nom_bdd = "restaurant";
$utilisateur = "root";
$mot_de_passe = "";

// Connexion à la base de données
$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $nom_bdd);

// Vérification des erreurs de connexion
if ($connexion->connect_error) {
    die("La connexion à la base de données a échoué : " . $connexion->connect_error);
}

// Récupération des données du formulaire
$telephone = $_POST["telephone"];
$date_reservation = $_POST["date_reservation"];
$heure_reservation = $_POST["heure_reservation"];
$nombre_personnes = $_POST["nombre_personnes"];
$commentaire = $_POST["commentaire"];

// Insertion d'une nouvelle réservation dans la table "reservations"
$sql = "INSERT INTO reservations (telephone, date_reservation, heure_reservation, nombre_personnes, commentaire) VALUES ('$telephone', '$date_reservation', '$heure_reservation', '$nombre_personnes', '$commentaire')";

// Exécution de la requête SQL
if ($connexion->query($sql) === TRUE) {
    echo "<script> alert ('La réservation a été ajoutée avec succès.');</script>";
} else {
    echo "Une erreur est survenue lors de l'ajout de la réservation : " . $connexion->error;
}

// Fermeture de la connexion à la base de données
$connexion->close();
?>
</body>
</html>