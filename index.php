<?php
 session_start();
 require_once "controllers/controllers.php";
?>
<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/styles.css">
  <title>WasabiDev BR</title>
  <meta name="description" content="Diseño de sitios web atractivos, profesionales y completamente responsive.">
  <meta name="keywords" content="diseño web, diseño de sitios web, diseño de paginas web">
  <meta name="author" content="wasabidev">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

  <!-- Stylesheet -->
  <link rel="icon" href="img/2625logo_WASABI_br.ico" />
  <link rel="stylesheet" type="text/css"  href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
  <script type="text/javascript" src="js/modernizr.custom.js"></script>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  <div id="preloader">
    <div id="status"> <img src="img/preloader.gif" height="64" width="64" alt=""> </div>
  </div>
  <!-- Navigation -->
  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
        <a class="navbar-brand page-scroll" href="#page-top"> <img src="img/logo_WASABI_br-02.png"></img></a> 
      </div>
      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
          <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
          <li class="hidden"> <a href="#page-top"></a> </li>
          <li> <a class="page-scroll" href="#about">Quem somos</a> </li>
          <li> <a class="page-scroll" href="#services">Nossos Serviços</a> </li>
          <li> <a class="page-scroll" href="#works">Portfolio</a> </li>
          <!--<li> <a class="page-scroll" href="#team">Team</a> </li> 
          <li> <a class="page-scroll" href="#testimonials">Testimonials</a> </li> -->
          <li> <a class="page-scroll" href="#contact">Contato</a> </li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container --> 
  </nav>
  <!-- Header -->
  <div id="intro">
    <div class="intro-body">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <img src="img/logo_WASABI_br-02.png"/>
            <br><br>
            <h2><span class="brand-heading">WasabiDev</span></h2>
            <br>
            <p class="intro-text">Juntos,<br>para chegar ao que você sonha...</p>
            <!--<a href="#about" class="btn btn-default page-scroll">Learn More</a>-->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About Section -->
  <div id="about">
    <div class="container">
      <div class="section-title text-center center">
        <h2>Quem somos?</h2>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-4"><img src="img/about.jpg" class="img-responsive"></div>
        <div class="col-md-4">
          <div class="about-text">
            <h4>O que fazemos</h4>
            <p>Simplificando, amamos projetar sites de qualidade.</p>
            <p>Como isso é um pouco amplo, convidamos você a se fazer essas perguntas...</p>
            <ul>
              <li>Precisa renovar sua imagem na Internet?</li>
                <li>Voçê está pensando em seu primeiro site para divulgar seu negócio ou serviço?</li>
              <li>Quer vender pela Internet e precisa de uma loja online para oferecer seus produtos?</li>
            </ul>
            <p>Então nós podemos te ajudar!</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="about-text">
            <h4>Como fazemos</h4>
            <p>Voçê nos envia seus dados. Iremos nos comunicar com você o mais rápido possível para saber mais sobre o que você precisa.</p>
            <p>Se você está na região de Camaçari, Bahia, Brasil, podemos visitá-lo gratuitamente.</p>
            <p>Ajudamos voçê a realizar o site com que sonha.</p>
            <p>Usamos as tecnologias mais recentes para impulsionar o seu site, colocando-o nos primeiros lugares nas pesquisas do Google.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Services Section -->
  <div id="services" class="text-center">
    <div class="container">
      <div class="section-title center">
        <h2>Nossos serviços...</h2>
        <hr>
      </div>
      <div class="space"></div>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="service"> <i class="fa fa-desktop"></i>
            <h3>Desenho web</h3>
            <p>Sites totalmente adaptáveis ​​a qualquer dispositivo (PC, tablet ou telefone). Bootstrap, Materialize, ou HTML, CSS y JavaSript.</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="service"> <i class="fa fa-cogs"></i>
            <h3>Desenvolvimento web</h3>
            <p>Damos ao seu site as funcionalidades necessárias para atingir os seus objetivos. Plataforma de pagamento, formas de contato atraentes e eficientes, etc.</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="service"> <i class="fa fa-money"></i>
            <h3>Lojas Virtuais?</h3>
            <p>Criamos seu negócio virtual com Prestashop, Opencart, Magento, WooCommerce, etc.</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="service"><i class="fa fa-html5"></i>
            <h3>HTML5</h3>
            <p>Usamos as versões mais recentes das ferramentas com que trabalhamos.</p>
          </div>
        </div>
      </div>
      <div class="space"></div>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="service"><i class="fa fa-wordpress"></i>
            <h3>WordPress</h3>
            <p>Selecionamos os melhores modelos, sejam pagos ou gratuitos, para conseguir um site de qualidade.</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="service"><i class="fa fa-bullhorn"></i>
            <h3>Marketing</h3>
            <p>Criamos e configuramos suas contas Google Analytics e Google Adwords, planejamos e monitoramos suas campanhas publicitárias na web.</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="service"><i class="fa fa-rocket"></i>
            <h3>Branding</h3>
            <p>Desenhamos e desenvolvemos a sua marca. Nós o divulgamos e buscamos que o consumidor pense na sua marca na hora de buscar o seu produto ou serviço.</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="service"><i class="fa fa-leaf"></i>
            <h3>Desenho gráfico</h3>
            <p>Usamos as tecnologias mais recentes para processamento de imagem. Damos a melhor forma ao seu logotipo.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio Section -->
  <div id="works">
    <div class="container"> <!-- Container -->
      <div class="section-title text-center center">
        <h2>Nosso Portfólio</h2>
        <hr>
        <div class="clearfix"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
      </div>
      <div class="categories">
        <ul class="cat">
          <li>
            <ol class="type">
              <li><a href="#" data-filter="*" class="active">All</a></li>
              <li><a href="#" data-filter=".lorem">Web Design</a></li>
              <li><a href="#" data-filter=".consectetur">Web Development</a></li>
              <li><a href="#" data-filter=".dapibus">Branding</a></li>
            </ol>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="row">
        <div class="portfolio-items">
          <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 lorem">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/01.jpg" title="Project description" rel="prettyPhoto">
                <div class="hover-text">
                  <h4>Project Title</h4>
                  <p>Web Design</p>
                </div>
                <img src="img/portfolio/01.jpg" class="img-responsive" alt="Project Title"> </a> </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 consectetur">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/02.jpg" title="Project description" rel="prettyPhoto">
                <div class="hover-text">
                  <h4>Project Title</h4>
                  <p>Web Development</p>
                </div>
                <img src="img/portfolio/02.jpg" class="img-responsive" alt="Project Title"> </a> </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 lorem">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/03.jpg" title="Project description" rel="prettyPhoto">
                <div class="hover-text">
                  <h4>Project Title</h4>
                  <p>Web Design</p>
                </div>
                <img src="img/portfolio/03.jpg" class="img-responsive" alt="Project Title"> </a> </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 lorem">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/04.jpg" title="Project description" rel="prettyPhoto">
                <div class="hover-text">
                  <h4>Project Title</h4>
                  <p>Web Design</p>
                </div>
                <img src="img/portfolio/04.jpg" class="img-responsive" alt="Project Title"> </a> </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 consectetur">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/05.jpg" title="Project description" rel="prettyPhoto">
                <div class="hover-text">
                  <h4>Project Title</h4>
                  <p>Web Development</p>
                </div>
                <img src="img/portfolio/05.jpg" class="img-responsive" alt="Project Title"> </a> </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 dapibus">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/06.jpg" title="Project description" rel="prettyPhoto">
                <div class="hover-text">
                  <h4>Project Title</h4>
                  <p>Branding</p>
                </div>
                <img src="img/portfolio/06.jpg" class="img-responsive" alt="Project Title"> </a> </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 dapibus consectetur">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/07.jpg" title="Project description" rel="prettyPhoto">
                <div class="hover-text">
                  <h4>Project Title</h4>
                  <p>Web Development, Branding</p>
                </div>
                <img src="img/portfolio/07.jpg" class="img-responsive" alt="Project Title"> </a> </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 lorem">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/08.jpg" title="Project description" rel="prettyPhoto">
                <div class="hover-text">
                  <h4>Project Title</h4>
                  <p>Web Design</p>
                </div>
                <img src="img/portfolio/08.jpg" class="img-responsive" alt="Project Title"> </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Team Section -->
  <!-- <div id="team" class="text-center">
    <div class="container">
      <div class="section-title center">
        <h2>Meet the team</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
      </div>
      <div id="row">
        <div class="col-xs-6 col-md-3 col-sm-6">
          <div class="thumbnail"> <img src="img/team/01.jpg" alt="..." class="img-thumbnail team-img">
            <div class="caption">
              <h3>John Doe</h3>
              <p>Founder / CEO</p>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-md-3 col-sm-6">
          <div class="thumbnail"> <img src="img/team/02.jpg" alt="..." class="img-thumbnail team-img">
            <div class="caption">
              <h3>Mike Doe</h3>
              <p>Web Designer</p>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-md-3 col-sm-6">
          <div class="thumbnail"> <img src="img/team/03.jpg" alt="..." class="img-thumbnail team-img">
            <div class="caption">
              <h3>Jane Doe</h3>
              <p>Creative Director</p>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-md-3 col-sm-6">
          <div class="thumbnail"> <img src="img/team/04.jpg" alt="..." class="img-thumbnail team-img">
            <div class="caption">
              <h3>Larry Show</h3>
              <p>Project Manager</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- Testimonials Section -->
  <!--<div id="testimonials" class="text-center">
    <div class="container">
      <div class="section-title center">
        <h2>What our clients say</h2>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="row testimonials">
            <div class="col-sm-4">
              <blockquote><i class="fa fa-quote-left"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitduis sed dapibus leo nec ornare.</p>
                <div class="clients-name">
                  <p><strong>John Doe</strong><br>
                    <em>CEO, Company Inc.</em></p>
                </div>
              </blockquote>
            </div>
            <div class="col-sm-4">
              <blockquote><i class="fa fa-quote-left"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitduis sed dapibus leo nec ornare.</p>
                <div class="clients-name">
                  <p><strong>Jane Doe</strong><br>
                    <em>CEO, Company Inc.</em></p>
                </div>
              </blockquote>
            </div>
            <div class="col-sm-4">
              <blockquote><i class="fa fa-quote-left"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitduis sed dapibus leo nec ornare.</p>
                <div class="clients-name">
                  <p><strong>Chris Smith</strong><br>
                    <em>CEO, Company Inc.</em></p>
                </div>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- Contact Section -->
  <div id="contact" class="text-center">
    <div class="container">
      <div class="section-title center">
        <h2>Contato</h2>
        <hr>
        <p>Amamos comunicação! Envie-nos a sua pergunta ou a sua opinião. Responderemos o mais breve possível e sem compromisso!</p>
      </div>
      <div class="col-md-8 col-md-offset-2">
        <div class="col-md-4">
          <div class="contact-item"> <i class="fa fa-map-marker fa-2x"></i>
            <p>Camaçari. Bahia.<br>
              Brasil</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-item"> <i class="fa fa-envelope-o fa-2x"></i>
            <p>wasabidevelopment@gmail.com</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-item"> <i class="fa fa-phone fa-2x"></i>
            <p> +55 71 98414 6054 </p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-8 col-md-offset-2">
        <h3>Envie-nos a sua consulta</h3>
        <?php
         Mailer::SendM();
         if (isset($_SESSION["MSGFM"])) {
            echo $_SESSION["MSGFM"];
         }
        unset($_SESSION["MSGFM"]);
        ?>
        <form method="post" name="sentMessage" id="contactForm" novalidate>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
              <input type="text" name="name" class="form-control" required placeholder="Ingrese su nombre" value="<?php if(isset($_SESSION["NAME"])){echo $_SESSION["NAME"];} ?>">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
              <input type="email" name="mail" class="form-control" required placeholder="Ingrese su email" value="<?php if(isset($_SESSION["EMAIL"])){echo $_SESSION["EMAIL"];} ?>">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
          <textarea name="message" class="form-control" required placeholder="Ingrese su mensaje"><?php if(isset($_SESSION["MESSAGE"])){echo $_SESSION["MESSAGE"];} ?></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-default">Enviar</button>
                <input type="hidden" name="faction">
        </form>
        <?php
          unset($_SESSION["NAME"]);
          unset($_SESSION["EMAIL"]);
          unset($_SESSION["MESSAGE"]);
        ?>
        <div class="social">
          <h3>Siga-nos em...</h3>
          <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="#"><i class="fa fa-github"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    
  </div>
    <!-- Footer -->
  <div id="footer">
    <div class="container">
      <p>Copyright &copy; WasabiDev designe. Sobre uma ideia de <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
    </div>
  </div>

  
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
  <!-- Include all compiled plugins (below), or include individual files as needed --> 
  <script type="text/javascript" src="js/bootstrap.js"></script> 
  <script type="text/javascript" src="js/SmoothScroll.js"></script> 
  <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
  <script type="text/javascript" src="js/jquery.isotope.js"></script> 
  <script type="text/javascript" src="js/jquery.parallax.js"></script> 

  <!-- Javascripts --> 
  <script type="text/javascript" src="js/main.js"></script>

</body>

</html>