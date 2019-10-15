<!DOCTYPE HTML>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <style><?php include 'style.css'; ?> </style>

    <title>Nessy Burgers</title>
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <img class="rounded navbar-brand" src="img/logo.jpg" alt="Nessy Logo" height="55" width="100"/>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto text-white">
          <li class="nav-item active">
            <a class="nav-link" href="#">Media <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Nessy Fan Club</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Buy Nessy Stuff</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Community</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Gift Cards</a>
          </li>
        </ul>
        <button class="btn btn-light my-2 my-sm-0" type="button"><i class="fas fa-phone"></i> (760)712-1497</button>
      </div>
    </nav>

    <div class="jumbotron">
      <h1 class="display-4">Nessy Burgers</h1>
      <hr class="my-4">
      <p>Serving great burgers since 1989</p>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
        Learn More
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalScrollableTitle">About</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h5 class="text-center">The Nessy Burger Story</h5>
              <p>
                Since its opening in 1989, Sandra Webster, the owner of Nessy Burgers, has had her beef supplied by a local supermarket in Fallbrook. The beef patties used in her perfect Cheeseburgers are made from a special blend of premium chuck and sirloin beef. Only Sandra and her butchers know this special formulation. Ground fresh every morning, the beef is assembled in ten pound batches and special seasonings are added. This too is Sandra's secret. The Nessy team is frequently asked by its customers, "Is this beef patty a recipe?" Well, it most certainly is! In addition to the beef being ground ultra-fresh early each morning, every ½ pound burger patty is hand-made and individually weighed! Nessy's beef possesses no fillers or preservatives and the beef is never frozen. The only additive is Sandra's secret blend of herbs and spices. She knew that the highest quality beef patty was essential for the perfect hamburger.
                <br>
                <br>
                Sandra did not stop with the perfect burger patty... After much experimentation, Sandra developed the most excellent of sauces that is spread deliciously over the burgers. Then, Sandra began her search for the finest sesame seed bun; she found it and her bread man calls on the restaurant every day. Next, she turned her attention to the toppings: The burgers are topped with slices from perfectly-ripe juicy jumbo tomatoes, crisp sweet onions (grilled upon request) and only the finest leaves from hand broken Iceberg lettuce. For the final touch, every Nessy Burger comes with premium quality American cheese, and the best sliced jalapeno peppers are offered on the side. Umm Good!!
                <br>
                <br>
                The bottom line, a Nessy Burger is a quality burger; that's why burger lovers come from all over Southern California to eat at Nessy Burgers. Some of our customers actually tell us that they have consistently patronized the restaurant since its opening in 1989.
              </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class='container-fluid' id='page-mid'>
        <!-- Image -->
        <div class='container'>
          <center>
            <img src="img/storefront.jpg" class="img-fluid" id='storefront'alt="Storefront">
          </center>
        </div>

        <!-- Hours & About Sections -->
        <div class='container'>
          <div class='row'>
            <!--Hours Section-->
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="hours">
                    <h3>Hours</h3>
                    <hr>
                    <?php
                      $url = 'json/hours.json';
                      $data = file_get_contents($url);
                      $characters = json_decode($data);
                    ?>
                    <?php foreach ($characters as $character) : ?>
                    <div class="float-left"><?php echo $character->day; ?></div>
                    <div class="float-right"><?php echo $character->hours; ?></div><br>
                    <?php endforeach; ?>
              </div>

            <!--Menu Section-->
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="menu">
              <h3>Menu</h3>
              <hr>
              <?php
                $url = 'json/menu.json';
                $data = file_get_contents($url);
                $characters = json_decode($data);
              ?>
              <?php foreach ($characters as $character) : ?>
              <div class="float-left"><?php echo $character->item; ?></div>
              <div class="float-right"><?php echo $character->cost; ?></div><br>
              <?php endforeach; ?>
            <br></div>
          </div>
        </div>

        <!-- Testimonials & Directions Sections -->
        <div class='container'>
          <div class='row'>
            <!--Testimonials Section-->
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="testimonials">
              <h3>Testimonials</h3>
              <hr>
              <span class="yelp-review" data-review-id="UIfVD3kqVdil26leo2MICQ" data-hostname="www.yelp.com">Read <a href="https://www.yelp.com/user_details?userid=SCotUxZa5nuTkl3RYi3Y6A" rel="nofollow noopener">Danielle E.</a>'s <a href="https://www.yelp.com/biz/nessy-burgers-fallbrook-3?hrid=UIfVD3kqVdil26leo2MICQ" rel="nofollow noopener">review</a> of <a href="https://www.yelp.com/biz/nRTglEyZdfyursQIV598oQ" rel="nofollow noopener">Nessy Burgers</a> on <a href="https://www.yelp.com" rel="nofollow noopener">Yelp</a><script async="async" src="https://www.yelp.com/embed/widgets.js" type="text/javascript"></script></span>
              <span class="yelp-review" data-review-id="TxxOUEh6_gV8MQzTet9ahQ" data-hostname="www.yelp.com">Read <a href="https://www.yelp.com/user_details?userid=yBR0OecM7EHB_VLzMK_fjw" rel="nofollow noopener">Rafael G.</a>'s <a href="https://www.yelp.com/biz/nessy-burgers-fallbrook-3?hrid=TxxOUEh6_gV8MQzTet9ahQ" rel="nofollow noopener">review</a> of <a href="https://www.yelp.com/biz/nRTglEyZdfyursQIV598oQ" rel="nofollow noopener">Nessy Burgers</a> on <a href="https://www.yelp.com" rel="nofollow noopener">Yelp</a><script async="async" src="https://www.yelp.com/embed/widgets.js" type="text/javascript"></script></span>
            </div>

            <!--Directions Section-->
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="directions">
              <h3>Directions</h3>
              <hr>
              <div id='map'>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3333.4599769801284!2d-117.16386388476374!3d33.332930862738785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80db878ffc5fd5ed%3A0x8b6834ab1be2a0e9!2sNessy+Burgers!5e0!3m2!1sen!2sus!4v1551765990698" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <!-- Footer -->
  <footer class="page-footer text-center bg-light">
    <!-- Footer Elements -->
      <div class="container">

      <!-- Grid row-->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-12 py-5">
          <div class="mb-5 flex-center">

            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
          </div>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/"> NessyBurger.com</a>
    </div>
    <!-- Copyright -->
    <!-- Footer Elements -->
  </footer>

</html>
