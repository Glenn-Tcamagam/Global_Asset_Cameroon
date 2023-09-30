<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SYSDEVAM Professionnel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo sysdevam pro.png" rel="icon">
  <link href="assets/img/logo sysdevam pro.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Modal css -->
<link rel="stylesheet" href="Modal/bootstrap-5.0.2-dist/css/bootstrap.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Day
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@globalassetcameroon.net">contact@globalassetcameroon.net</a>
        <i class="bi bi-phone-fill phone-icon"></i>(+237) 659-364-897
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo">  
        <a href="index.html"
          ><img
            src="assets/img/logo sysdevam pro.png"
            height="100%"
            alt=""
          /> <span id="titreNav"> SYSDEVAM Professionnel</span></a
        ></h1>


      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">


<!-- DEBUT LANGUE PETIT ECRAN -->
<div id="languePetitEcran">


  <div class="dropdown ">
    <button class="btn btn-light btn-sm dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false"
    >
      <img src="assets/img/French.png" alt="French Flag"> 
    </button>
    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
    <li><a class="dropdown-item" > <img src="assets/img/French.png" alt="French Flag"> </a></li>

      <li><a class="dropdown-item"  ><img src="assets/img/English.png" alt="English Flag"> </a></li>
    
    </ul>
  </div>
  </div>



    <!--traduire anglais-->
    <div class="search">
                    <select id="selectLang" class="form-control selectLang" name="">
                        <option value="fr" data-imagesrc="./img/flag/fr.png" <?php if (isset($_SESSION['lang']) && $_SESSION['lang'] == 'en') {
                                                                                    echo 'selected';
                                                                                } ?>>FR</option>
                        <option value="en" data-imagesrc="./img/flag/en.png" <?php if (isset($_SESSION['lang']) && $_SESSION['lang'] == 'en') {
                                                                                    echo 'selected';
                                                                            } ?>>EN</option>
                    </select>
                </div>






<div id="barPetitEcran">
&nbsp;&nbsp;
<div class="vr" style=" width: 4px; color: #FFF;"></div>
&nbsp;
</div>

<!-- FIN LANGUE PETIT ECRAN -->


        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#about">A Propos</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
          <li><a class="nav-link scrollto " href="#reference">Références</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        
      
     <!-- DEBUT LANGUE GRAND ECRAN -->

     <div id="barGrandEcran">
      <div class="vr" style=" width: 4px;  color: #FFF;"></div>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>

      <div id="langueGrandEcran">

<div class="dropdown form-control selectLang" id="selectLang">
  <button class="btn btn-light btn-sm dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
    <img src="assets/img/French.png" alt="French Flag"> FR
  </button>
  <ul class="dropdown-menu" aria-labelledby="languageDropdown">

  <li
  data-imagesrc="./img/flag/fr.png" <?php if (isset($_SESSION['lang']) && $_SESSION['lang'] == 'en') {
                                                                                    echo 'selected';
                                                                                } ?>
  ><a class="dropdown-item" > <img src="assets/img/French.png" alt="French Flag"> FR</a></li>

    <li 
    data-imagesrc="./img/flag/en.png" <?php if (isset($_SESSION['lang']) && $_SESSION['lang'] == 'en') {
                                                                                    echo 'selected';
                                                                            } ?>
    ><a class="dropdown-item" ><img src="assets/img/English.png" alt="English Flag">EN </a></li>
  
  </ul>
</div>
</div>
<!-- FIN LANGUE GRAND ECRAN -->




      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center" data-aos="fade-up" data-aos-delay="500">
      <h1>SYSDEVAM PROFESSIONNEL</h1>
      <h2>Rejoignez-nous pour avoir le plus grand impact dans le monde</h2>
      <a href="#about" class="btn-get-started scrollto">Commencer</a>
    </div>
  </section><!-- End Hero -->

<br><br><br>
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <span>A Propos </span>
          <h2>A Propos </h2>
          <p class="sousTitre">A Propos de SYSDEVAM Professionnel</p>
        </div>
<br><br>
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="assets/img/about/20.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">

          


          <section id="features" class="features">
            <div class="container" >





          <!-- Feature Tabs -->
          <div class="row feture-tabs" data-aos="fade-up">

            <div class="col-lg-6" data-aos="fade-right">
              <img src="assets/img/73.jpg" class="img-fluid" alt="" />
            </div>
            <div class="col-lg-6" data-aos="fade-left">
              <h3>
                POURQUOI CHOISIR SYSDEVAM PROFESSIONNEL ?
              </h3>

              <!-- Tabs -->
              <ul class="nav nav-pills mb-3">
                <li>
                  <a class="nav-link active" data-bs-toggle="pill" href="#tab1"
                    >Système De Gestion Fiable Et Sécurisé</a
                  >
                </li>
                <li>
                  <a class="nav-link" data-bs-toggle="pill" href="#tab2"
                    >Sécurité</a
                  >
                </li>
                <li>
                  <a class="nav-link" data-bs-toggle="pill" href="#tab3"
                    >À L'abri Des Sanctions</a
                  >
                </li>
              </ul>
              <!-- End Tabs -->

              <!-- Tab Content -->
              <div class="tab-content">
                <div class="tab-pane fade show active" id="tab1">
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ullam quibusdam id, adipisci unde dolores, ratione ut numquam tempora perferendis veniam dignissimos ab obcaecati corporis tenetur modi labore, necessitatibus vero..
                  </p>
                  <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-check2"></i>
                    <h4>
                      Repudiandae rerum velit modi et officia quasi facilis
                    </h4>
                  </div>
                  <p>
                    Laborum omnis voluptates voluptas qui sit aliquam
                    blanditiis. Sapiente minima commodi dolorum non eveniet
                    magni quaerat nemo et.
                  </p>
                  <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-check2"></i>
                    <h4>Incidunt non veritatis illum ea ut nisi</h4>
                  </div>
                  <p>
                    Non quod totam minus repellendus autem sint velit. Rerum
                    debitis facere soluta tenetur. Iure molestiae assumenda sunt
                    qui inventore eligendi voluptates nisi at. Dolorem quo
                    tempora. Quia et perferendis.
                  </p>
                </div>
                <!-- End Tab 1 Content -->

                <div class="tab-pane fade show" id="tab2">
                  <p>
                    glennnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn.
                    Eos doloribus expedita. Sapiente atque consequatur minima
                    nihil quae aspernatur quo suscipit voluptatem.
                  </p>
                  <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-check2"></i>
                    <h4>
                      Repudiandae rerum velit modi et officia quasi facilis
                    </h4>
                  </div>
                  <p>
                    Laborum omnis voluptates voluptas qui sit aliquam
                    blanditiis. Sapiente minima commodi dolorum non eveniet
                    magni quaerat nemo et.
                  </p>
                  <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-check2"></i>
                    <h4>Incidunt non veritatis illum ea ut nisi</h4>
                  </div>
                  <p>
                    Non quod totam minus repellendus autem sint velit. Rerum
                    debitis facere soluta tenetur. Iure molestiae assumenda sunt
                    qui inventore eligendi voluptates nisi at. Dolorem quo
                    tempora. Quia et perferendis.
                  </p>
                </div>
                <!-- End Tab 2 Content -->

                <div class="tab-pane fade show" id="tab3">
                  <p>
                    Consequuntur inventore voluptates consequatur aut vel et.
                    Eos doloribus expedita. Sapiente atque consequatur minima
                    nihil quae aspernatur quo suscipit voluptatem.
                  </p>
                  <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-check2"></i>
                    <h4>
                      Repudiandae rerum velit modi et officia quasi facilis
                    </h4>
                  </div>
                  <p>
                    Laborum omnis voluptates voluptas qui sit aliquam
                    blanditiis. Sapiente minima commodi dolorum non eveniet
                    magni quaerat nemo et.
                  </p>
                  <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-check2"></i>
                    <h4>Incidunt non veritatis illum ea ut nisi</h4>
                  </div>
                  <p>
                    Non quod totam minus repellendus autem sint velit. Rerum
                    debitis facere soluta tenetur. Iure molestiae assumenda sunt
                    qui inventore eligendi voluptates nisi at. Dolorem quo
                    tempora. Quia et perferendis.
                  </p>
                </div>
                <!-- End Tab 3 Content -->
              </div>
            </div>

            
          </div>
          <!-- End Feature Tabs -->








        </div>
      </section>





        </div>

      </div>
    </section><!-- End Why Us Section -->



<br><br>


<!-- ======= Review Section ======= -->
<div class="reviews-area" data-aos="fade-up">
  <div class="row g-0">
    <div class="col-lg-6">
      <img src="assets/img/8.jpg" alt="" class="img-fluid">
    </div>
    <div class="col-lg-6 work-right-text d-flex align-items-center">
      <div class="px-5 py-5 py-lg-0">
        <h2>Travailler avec nous</h2> <br>
        <h5>Dématérialisation, comptabilité et conservation des valeurs mobilières.</h5>
        
      <a href="#contact" >
      <button type="button" class="btn btn-lg btn-outline-light">Nous Contacter</button>
    </a>
      </div>
    </div>
  </div>
</div><!-- End Review Section -->

<br><br>


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <span>Services</span>
          <h2>Services</h2>
          <p class="sousTitre">Notre accompagnement en six points</p>
        </div>

        <div class="row">
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon">
                <i class="bx bx-file"></i></div>
              <h4><a href="">Fourniture logiciel</a></h4>
              <p>Logiciel disponible en bon état fonctionnel et donc les livrables satisfont largement les attentes de tous les organes de tutelles: COSUMAF, Dépositaire central et CAC.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Formation et transfert de compétences intégrales</a></h4>
              <p>Les fondamentaux de la fonction de teneur de compte-conservateur; la comptabilité titres et droits connexes; le traitement informatique des transactions sur titres via SYSDEVAM</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Veille réglémentaire</a></h4>
              <p>Information sur la promulgation d'une nouvelle loi, instruction aux règlements succeptibles d'influencer directement ou indirectement l'activité du teneur de compte-conservateur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Assistance, maintenance et mise à jour du système</a></h4>
              <p>Capacité d'intervention à distance pour tous problèmes et mise à jour du système</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="600">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Gestion des feedbacks</a></h4>
              <p>Pour une communication plus apaisée avec la clientèle, les problèmes sont traités à la racine évitant toute dégradation de la situation</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Sécurité des données</a></h4>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo atque minima illum similique a, ducimus hic itaque sit quibusdam accusamus consequatur, explicabo alias fuga voluptatibus reprehenderit autem deleniti iste odio!</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


    <br><br>
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta" data-aos="fade-up">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h1 id="demo">DÉMO</h1> <style>#demo{color: #FFF;}</style>
          <p class="sousTitre">DEMANDE D'UNE DÉMO DE LA VERSION APPLICATIVE DE SYSDEVAM PROFESSIONNEL.</p>
          <!-- Button trigger modal -->
          <a class="cta-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Cliquez ici</a>
        </div>

      </div>
    </section><!-- End Cta Section -->



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Demande d'une démo de la version applicative de SYSDEVAM Professionnel</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">



        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nom Complet" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Adresse mail" required>
            </div>
          </div>
          
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="nameEntreprise" id="nameEntreprise" placeholder="Nom de l'Entreprise" required>
          </div><br>
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="number" name="capital" class="form-control" id="capital" placeholder="Capital de l'Entreprise" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="localisation" id="localisation" placeholder="Localisation" required>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="texte" name="fonction" class="form-control" id="fonction" placeholder="Fonction dans l'Entreprise" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="number" class="form-control" name="phone" id="phone" placeholder="Téléphone" required>
            </div>
          </div><br><br><br>
          <div class="d-grid gap-2 col-6 mx-auto"><button class="btn btn-primary" type="submit">Envoyer Votre Demande</button></div>

        </form>
        

        
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
        
      </div> -->
    </div>
  </div>
</div>








    <!-- ======= FAQ Section ======= -->
    <section id="faq" >
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <span>FAQ</span>
          <h2>FAQ</h2>
          <p class="sousTitre">Ici, il est question de repondre à un certain nombre de question que s'interroge nos clients a propos de <br> Sysdevam professionnel</p>
        </div>

        <section  class="faq" data-aos="fade-up">
          <div class="container" >
        
            <!-- <br><br>
           <h4 class="text-center" style="color: white;">Ici, il est question de repondre à un certain nombre de question que s'interroge nos clients a propos de <br> Sysdevam professionnel</h4> -->
           <br><br>
            <div class="faq-list">
              <ul>
                <li >
                  <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Est-ce que GLOBAL ASSET CAMEROON LTD fournit des services de bourse ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                    <p>
                      L’article 16-1 du décret N°3763 du 17 Novembre 2014 fixant les conditions de dématérialisation des valeurs mobilières au Cameroun prévoit que la société émettrice peut assurer elle-même la gestion  des valeurs mobilières qu’elle a émises ou confier cette gestion à un teneur de compte conservateur. L’alinéa 3 poursuit en ces termes : lorsque la société émettrice choisit d’assumer elle-même la gestion de ses titres, elle est subrogée aux droits et obligations du teneur de comptes conservateur. L’article 40 de la note d’instruction de la COSUMAF relative au cahier de charge de la fonction de teneur de compte conservateur prévoir que la société émettrice, dans le cadre de l’exercice de ses fonctions de teneur de compte conservateur peut se faire assister par un conseil de son choix pour l’accomplissement de tout ou partie de ses taches. NOUS NOUS PROPOSONS POUR ETRE LE CONSEIL DE VOTRE CHOIX POUR L’ACCOMPLISSEMENT DE TOUTE VOTRE TACHE, de manière à satisfaire les attentes de toutes les parties prenantes (CAC, CAA, BEAC/CRCT)..
                    </p>
                  </div>
                </li>
        
                <li >
                  <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Est-ce un produit 100% camerounais ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                    <p>
                      Le SYSDEVAM est dans les 70-80% Camerounais. En effet, nous avons travaillé avec les ingénieurs de Sage SAARI pour la conception du noyau de notre système. Une fois constitué, nous avons continué jusqu’aujourd’hui avec des ingénieurs camerounais. Nous pouvons vous garantir que l’équipe actuelle est ENTIEREMENT constitué de camerounais, prêts à mettre leur génie au profit de la finance de marchés.
                    </p>
                  </div>
                </li>
        
                <li >
                  <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Est-ce un produit 100% camerounais ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                    <p>
                      Le SYSDEVAM est dans les 70-80% Camerounais. En effet, nous avons travaillé avec les ingénieurs de Sage SAARI pour la conception du noyau de notre système. Une fois constitué, nous avons continué jusqu’aujourd’hui avec des ingénieurs camerounais. Nous pouvons vous garantir que l’équipe actuelle est ENTIEREMENT constitué de camerounais, prêts à mettre leur génie au profit de la finance de marchés.
                    </p>
                  </div>
                </li>
        
                <li >
                  <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Est-ce un produit 100% camerounais ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                    <p>
                      Le SYSDEVAM est dans les 70-80% Camerounais. En effet, nous avons travaillé avec les ingénieurs de Sage SAARI pour la conception du noyau de notre système. Une fois constitué, nous avons continué jusqu’aujourd’hui avec des ingénieurs camerounais. Nous pouvons vous garantir que l’équipe actuelle est ENTIEREMENT constitué de camerounais, prêts à mettre leur génie au profit de la finance de marchés.
                    </p>
                  </div>
                </li>
        
                <li >
                  <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Est-ce un produit 100% camerounais ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                    <p>
                      Le SYSDEVAM est dans les 70-80% Camerounais. En effet, nous avons travaillé avec les ingénieurs de Sage SAARI pour la conception du noyau de notre système. Une fois constitué, nous avons continué jusqu’aujourd’hui avec des ingénieurs camerounais. Nous pouvons vous garantir que l’équipe actuelle est ENTIEREMENT constitué de camerounais, prêts à mettre leur génie au profit de la finance de marchés..
                    </p>
                  </div>
                </li><br><br>
        
        
              </ul>
            </div>
          </div>
         <div class="text-center">
        
             <!-- <a class="sus-btn" href="#">Cliquer pour Voir plus</a> -->
             <a href="faq.html">
             <button type="button" class="btn btn-outline-light btn-lg">Cliquez pour voir plus</button>
            </a>
        </div>
        <br><br>
          </div>
          
        
        </div>
        </div>
        </section>
      </div>
    </section>
<!-- End Frequently Asked Questions Section -->





<!-- 
<div class="item">
  <img src="assets/img/clients/atlantique.png" alt="" class="company">
</div> -->




    <!-- ======= Reference Section ======= -->
    <section id="reference" class="portfolio" data-aos="fade-up">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <span>Réferences</span>
          <h2>Réferences</h2>
          <p class="sousTitre">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>


<div id="imagesReference" class="d-flex justify-content-center align-items-center">
        <div class="content d-flex align-items-center justify-content-center">
          <div class="container rounded">
             
            <div class="rollers position-relative overflow-hidden">
              <div class="start-roller"></div>
              <div class="wrapper">
                  <div class="items-container roll-LL">
                      <div class="item">
                          <img src="https://www.freepnglogos.com/uploads/original-microsoft-logo-28.png" alt="" class="company">
                      </div>
                      <div class="item">
                          <img src="https://www.freepnglogos.com/uploads/facebook-logo-15.jpg" alt="" class="company">
                      </div>
                      <div class="item">
                          <img src="https://www.freepnglogos.com/uploads/google-logo-new-history-png-9.png" alt="" class="company">
                      </div>
                      <div class="item">
                          <img src="https://www.freepnglogos.com/uploads/netflix-logo-0.png" alt="" class="company">
                      </div>
                      <div class="item">
                          <img src="https://www.freepnglogos.com/uploads/logo-tokopedia-png/tokopedia-apa-itu-startup-pengertian-cara-memulai-dan-1.png" alt="" class="company">
                      </div>
                      <div class="item">
                          <img src="https://www.freepnglogos.com/uploads/amazon-png-logo-vector/woodland-gardening-amazon-png-logo-vector-8.png" alt="" class="company">
                      </div>
                  </div>
                  <div class="items-container roll-RL">
                      <div class="item">
                          <img src="https://www.freepnglogos.com/uploads/original-microsoft-logo-28.png" alt="" class="company">
                      </div>
                      <div class="item">
                          <img src="https://www.freepnglogos.com/uploads/facebook-logo-15.jpg" alt="" class="company">
                      </div>
                      <div class="item">
                          <img src="https://www.freepnglogos.com/uploads/google-logo-new-history-png-9.png" alt="" class="company">
                      </div>
                      <div class="item">
                          <img src="https://www.freepnglogos.com/uploads/netflix-logo-0.png" alt="" class="company">
                      </div>
                      <div class="item">
                          <img src="https://www.freepnglogos.com/uploads/logo-tokopedia-png/tokopedia-apa-itu-startup-pengertian-cara-memulai-dan-1.png" alt="" class="company">
                      </div>
                      <div class="item">
                          <img src="https://www.freepnglogos.com/uploads/amazon-png-logo-vector/woodland-gardening-amazon-png-logo-vector-8.png" alt="" class="company">
                      </div>
                  </div>
              </div>
              <div class="wrapper">
                  <div class="items-container reverse-roll-LL">
                      <div class="item">
                          <img src="https://www.freepnglogos.com/uploads/at-t-logo/brand-new-emblem-at-t-png-logo-6.png" alt="" class="company">
                      </div>
                      <div class="item">
                          <img src="https://www.freepnglogos.com/uploads/sprint-png-logo/brand-sprint-png-logo-11.png" alt="" class="company">
                      </div>
                      <div class="item">
                          <img src="https://www.freepnglogos.com/uploads/linkedin-logo-transparent-png-16.png" alt="" class="company">
                      </div>
                      <div class="item">
                          <img src="https://www.freepnglogos.com/uploads/nokia-brand-logos-12.png" alt="" class="company">
                      </div>
                      <div class="item">
                          <img src="https://www.freepnglogos.com/uploads/flipkart-logo-png/flipkart-logo-transparent-vector-3.png" alt="" class="company">
                      </div>
                      <div class="item">
                          <img src="https://www.freepnglogos.com/uploads/cisco-png-logo/world-cisco-png-logo-12.png" alt="" class="company">
                      </div>
                  </div>
                  <div class="items-container reverse-roll-RL">
                      <div class="item">
                          <img src="https://www.freepnglogos.com/uploads/at-t-logo/brand-new-emblem-at-t-png-logo-6.png" alt="" class="company">
                      </div>
                      <div class="item">
                          <img src="https://www.freepnglogos.com/uploads/sprint-png-logo/brand-sprint-png-logo-11.png" alt="" class="company">
                      </div>
                      <div class="item">
                          <img src="https://www.freepnglogos.com/uploads/linkedin-logo-transparent-png-16.png" alt="" class="company">
                      </div>
                      <div class="item">
                          <img src="https://www.freepnglogos.com/uploads/nokia-brand-logos-12.png" alt="" class="company">
                      </div>
                      <div class="item">
                          <img src="https://www.freepnglogos.com/uploads/flipkart-logo-png/flipkart-logo-transparent-vector-3.png" alt="" class="company">
                      </div>
                      <div class="item">
                          <img src="https://www.freepnglogos.com/uploads/cisco-png-logo/world-cisco-png-logo-12.png" alt="" class="company">
                      </div>
                  </div>
              </div>
              <div class="end-roller"></div>
          </div>
      </div>

    </div>



      </div>
    </section><!-- End Reference Section -->












    



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container ">

        <div class="section-title" data-aos="fade-up">
          <span>Contact</span>
          <h2>Contact</h2>
          <p class="sousTitre">Veillez nous contacter pour plus d'information à propos de SYSDEVAM Professionnel</p>
        </div>

       <br>

        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 shadow p-3 mb-5 " >
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="bi bi-phone"></i>
                <br> <br>
                <p>
                  Call:  (+237) 659-364-897<br>
                  <span>Lundi-Vendredi (8H00-17H30)</span>
                </p>
              </div>
            </div>
          </div>
          <!-- &nbsp; -->
          <!-- Start contact icon column -->
          <div class="col-md-4 shadow p-3 mb-5 ">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="bi bi-envelope"></i>
                <br> <br>
                <p>
                  Email:  contact@globalassetcameroon.net<br>
                  <span>Web: SYSDEVAMProfessionnel.net</span>
                </p>
              </div>
            </div>
          </div>
          <!-- &nbsp; -->
          <!-- Start contact icon column -->
          <div class="col-md-4 shadow p-3 mb-5 ">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="bi bi-geo-alt"></i>
                <br> <br>
                <p>
                  Location: GLOBAL ASSET CAMEROON, 6ème étage, appartemment 604 DHL-SUNU Assurances Immeuble de Bali, situé a 30m de Somatel.<br>
                  <!-- <span>Douala - Cameroun</span> -->
                </p>
              </div>
            </div>
          </div>
        </div>
<br>
        <!-- <div class="row" data-aos="fade-up"> -->

          <!-- <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div> -->

          <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
            <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form"> -->
              <form action="php/formContact.php" method="post" role="form" class="php-email-form" >
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Entrez votre nom" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="phone" class="form-control" name="phone" id="phone" placeholder="Entrez votre numéro de téléphone" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Entrez votre votre adresse mail" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="nameEntreprise" id="nameEntreprise" placeholder="Entrez le nom de votre Entreprise" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        <!-- </div> -->

      </div>
    </section><!-- End Contact Section -->



  </main><!-- End #main -->




  <!-- <form method="post" action="envoyer.php">
    <input type="text" name="nom" placeholder="Nom">
    <input type="email" name="email" placeholder="E-mail">
    <textarea name="message" placeholder="Message"></textarea>
    <button type="submit">Envoyer</button>
</form> -->





  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
  
          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <!-- <h3>Day</h3> -->
              <a href="index.html"
              ><img
                src="assets/img/logo sysdevam pro.png"
                height="100%"
                width="50%"
                alt=""
              /> <br> <Span id="colorsydevam">SYSDEVAM professionnel</Span> </a
            >
            <style>
              #colorsydevam{
                color: #FFF;
              }
            </style>
              <!-- <p>
                GLOBAL ASSET CAMEROON, 6ème étage, appartemment 604 DHL-SUNU Assurances Immeuble de Bali, situé a 30m de Somatel.<br><br>
                <strong>Phone:</strong>  (+237) 659-364-897<br>
                <strong>Email:</strong>  contact@globalassetcameroon.net<br>
              </p> -->
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                
           
              </div>
            </div>
          </div>
  
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Liens utiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">A propos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#faq">FAQ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#nosreferences">Nos références</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#reference">Référence</a></li>
            </ul>
          </div>
  
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Nos Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#service1">Conceptualisation de l'expertise à délivrer au client</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#service2">Fourniture logiciel</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#service3">Formation et transfert de compétences intégrales</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#service4">Veille réglémentaire</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#service5">Assistance, maintenance et mise à jour du système</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#service6">Gestion des feedbacks</a></li>
            </ul>
          </div>
  
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <!-- <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form> -->
            <h4>Nous Contacter</h4>
            <p id="whitecolor">
              <strong>Adresse:</strong> GLOBAL ASSET CAMEROON, 6ème étage, appartemment 604 DHL-SUNU Assurances Immeuble de Bali, situé a 30m de Somatel.<br><br>
              <strong>Phone:</strong>  (+237) 659-364-897<br><br>
              <strong>Email:</strong>  contact@globalassetcameroon.net<br><br>
            </p>
  <style> 
  #whitecolor{
    color: #FFF;
  }
  </style>
          </div>
  
        </div>
      </div>
    </div>
  
    <div class="container">
      <div class="copyright">
        &copy; 2021, All rights reserved a property of Global Asset Cameroon.
        <!-- <strong><span>Day</span></strong>. All Rights Reserved -->
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
        <a href="https://globalassetcameroon.net">Global Asset Cameroon.</a>
      </div>
    </div>
  </footer><!-- End Footer -->
<!-- 
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div> -->

  
  <div id="preloader"></div>
  <a
    href="#"
    class="back-to-top d-flex align-items-center justify-content-center"
    ><i class="bi bi-arrow-up-short"></i
  ></a>

  <script >var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')
    
    myModal.addEventListener('shown.bs.modal', function () {
      myInput.focus()
    })</script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Modal js-->
<script src="Modal/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- jQuery traduire en anglais -->
<script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
 <script src="js/lang.js"></script>

</body>

</html>