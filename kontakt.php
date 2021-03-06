<!-- PHP file for contact form -->
<?php include('contact_form.php'); ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Se Möjligheterna 2018</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.css" rel="stylesheet">

  </head>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4" style="border-radius:0;"id="mainNav">
      <div class="container">
        <img src="img/logos/sts.png" class="img-responsive img-centered" alt="" width="80" height="40"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">          
          <ul class="navbar-nav ml-auto bg-overlay">            
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.html">Hem
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="schema.html">Schema</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="arkiv.html">Arkiv</a>
            </li>
            <li class="nav-item px-lg-4 bg-overlay">
              <a class="nav-link text-uppercase text-expanded" href="kontakt.html">Kontakt</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-heading">Se möjligheterna</div>
          <div class="intro-follower">
            <p><strong>Arbetsmarknadsvecka för Civilingenjörsprogrammet System i Teknik och Samhälle<br>Uppsala Universitet</strong><p>
          </div> 
        </div>
      </div>
    </header>

    <div class="container">

      <div class="bg-faded p-4 my-4">
        <h2 class="text-center text-lg text-uppercase my-0">
          Generaler 2018
        </h2>
        <hr class="style">
          <div class="col-lg-12 text-center" style="padding: 40px;">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit totam libero expedita magni est delectus pariatur aut, aperiam eveniet velit cum possimus, autem voluptas. Eum qui ut quasi voluptate blanditiis?</p>
          </div>        <div class="row">
          <div class="col-md-4 col-lg-4">
            <div class="team-member">
              <img class="rounded-circle img-fluid " src="img/team/rickroll2.jpg" alt="" width="300px;" height="300px;" >
              <h4>Kay Garland</h4>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="mailto:sts-sm2@utn.se">
                    <i class="fa fa-envelope"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="team-member">
              <img class="rounded-circle img-fluid " src="img/team/rickroll2.jpg" alt="" width="300px;" height="300px;">
              <h4>Larry Parker</h4>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="mailto:sts-sm2@utn.se">
                    <i class="fa fa-envelope"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="team-member">
              <img class="rounded-circle img-fluid " src="img/team/rickroll2.jpg" alt="" width="300px;" height="300px;">
              <h4>Diana Pertersen</h4>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="mailto:sts-sm2@utn.se">
                    <i class="fa fa-envelope"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
          <div class="col-lg-12 text-center" style="padding: 40px;">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit totam libero expedita magni est delectus pariatur aut, aperiam eveniet velit cum possimus, autem voluptas. Eum qui ut quasi voluptate blanditiis?</p>
          </div>
      </div>

      <div class="bg-faded p-4 my-4">
        <h2 class="text-center text-lg text-uppercase my-0">Kontakt
        </h2>
        <hr class="style">
        <form role="form" method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
          <div class="row">
            <div class="form-group col-lg-4">
              <label for="name" class="text-heading">Namn*</label>
              <input type="text" class="form-control" id="name" name="name" value="<?= $name ?>">
              <span class="text-danger"><?= $errName ?></span>
            </div>
            <div class="form-group col-lg-4">
              <label for="email"class="text-heading">Email Adress*</label>
              <input type="email" class="form-control" id="email" name="email" value="<?= $email ?>">
              <span class="text-danger"><?= $errEmail ?></span>
            </div>
            <div class="form-group col-lg-4">
              <label for="tel" class="text-heading">Telefon</label>
              <input type="tel" class="form-control" id="tel" name="tel" value="<?= $tel ?>">
              <span class="text-danger"><?= $errTel ?></span>
            </div>
            <div class="clearfix"></div>
            <div class="form-group col-lg-12">
              <label for="message" class="text-heading">Meddelande*</label>
              <textarea class="form-control" rows="6" name="message"><?= $message ?></textarea>
            </div>
            <div class="form-group col-lg-12">
              <button type="submit" class="btn btn-secondary">Skicka</button>
            </div>
            <div class="form-group col-lg-12">
              <?php echo $result; ?>
            </div>
          </div>
        </form>
      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->     <!--TODO: Copyright, SM-veckan linkedIn länk längst ner? Vill vi ha det? -->
    <footer class="bg-faded text-center py-5" style="border-radius:0;">
      <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-4" style="padding-top:10px;">
                <a href="http://trillermat.se">
                    <img src="img/logos/lindvalls.jpg" class="img-responsive img-centered" alt="" width="85" height="85">
                </a>
            </div>
            <div class="col-md-2 col-sm-4" style="padding-top:10px;">
                <a href="http://trillermat.se">
                    <img src="img/logos/lindvalls.jpg" class="img-responsive img-centered" alt="" width="85" height="85">
                </a>
            </div>
            <div class="col-md-2 col-sm-4" style="padding-top:10px;">
                <a href="http://trillermat.se">
                    <img src="img/logos/lindvalls.jpg" class="img-responsive img-centered" alt="" width="85" height="85">
                </a>
            </div>
            <div class="col-md-2 col-sm-4" style="padding-top:10px;">
                <a href="http://trillermat.se">
                    <img src="img/logos/lindvalls.jpg" class="img-responsive img-centered" alt="" width="85" height="85">
                </a>
            </div>
            <div class="col-md-2 col-sm-4" style="padding-top:10px;">
                <a href="http://trillermat.se">
                    <img src="img/logos/lindvalls.jpg" class="img-responsive img-centered" alt="" width="85" height="85">
                </a>
            </div>
            <div class="col-md-2 col-sm-4" style="padding-top:10px;">
                <a href="http://trillermat.se">
                    <img src="img/logos/lindvalls.jpg" class="img-responsive img-centered" alt="" width="85" height="85">
                </a>
            </div>
            <div class="col-md-2 col-sm-4" style="padding-top:10px;">
                <a href="http://trillermat.se">
                    <img src="img/logos/lindvalls.jpg" class="img-responsive img-centered" alt="" width="85" height="85">
                </a>
            </div>
            <div class="col-md-2 col-sm-4" style="padding-top:10px;">
                <a href="http://trillermat.se">
                    <img src="img/logos/lindvalls.jpg" class="img-responsive img-centered" alt="" width="85" height="85">
                </a>
            </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Zoom when clicked function for Google Map -->
    <script>
      $('.map-container').click(function () {
        $(this).find('iframe').addClass('clicked')
      }).mouseleave(function () {
        $(this).find('iframe').removeClass('clicked')
      });
    </script>

  </body>

</html>
