<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
  <title>Event Single - Tryambak Foundation</title>
  <meta name="author" content="Tryambak Foundation">
  <meta name="description" content="">
  <meta name="keywords" content="">

  <link rel="shortcut icon" type="image/x-icon" href="favicon.png">

  <link href="css/animate.min.css" rel="stylesheet">

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="css/icofont.min.css" rel="stylesheet">

  <link href="css/owl.carousel.min.css" rel="stylesheet">

  <link href="css/select2.min.css" rel="stylesheet">

  <link href="css/magnific-popup.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="css/home-main.css">
</head>
<body>

  <?php include('header.php'); ?>


  <section class="breadcrumbs-page-wrap">
    <div class="bg-fixed pos-rel breadcrumbs-page">
      <div class="container">
        <h1>Event Title</h1>
        <nav aria-label="breadcrumb" class="breadcrumb-wrap">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo $site['base_url']; ?>">Home</a></li> <li class="breadcrumb-item"><a href="events.php">Events</a></li>
            <li class="breadcrumb-item active" aria-current="page">Events Single</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>


  <main id="body-content">

    <section class="wide-tb-100">
      <div class="container">
        <h1 class="heading-main">
          <small>Event Details</small>
          Tryambak Event - Run For The Humanity This Time
        </h1>
        <div class="events-single-img">
          <img src="images/event_single_large.jpg" alt="">
        </div>
      </div>
      <div class="event-single-wrap">
        <div class="container pos-rel">
          <div class="row">
            <div class="col-lg-3 order-lg-last">
              <div class="event-single-listing pattern-green">
                <h3>Event Info</h3>
                <ul class="list-unstyled">
                  <li>
                    <div><i data-feather="calendar"></i> </div>
                    <div>17 Jun, 2023</div>
                  </li>
                  <li>
                    <div><i data-feather="clock"></i> </div>
                    <div>10:00 AM - 1:00 PM</div>
                  </li>
                  <li>
                    <div><i data-feather="map-pin"></i> </div>
                    <div>Rishikesh, Uttarakhand </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-7 offset-lg-1">
              <div class="event-single-info">
                <p>This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequa, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue.</p>
                <p>Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temr incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="wide-tb-50 bg-scroll bg-img-6 pos-rel callout-style-1">
      <div class="bg-overlay blue opacity-80"></div>
      <div class="container">
       <div class="row align-items-center">
        <div class="col-lg-7">
          <h1 class="heading-main light-mode">
            <small>Let Us Come Together</small>
            To Make A Difference by Empowering Villages
          </h1>
        </div>
        <div class="col-sm-12 text-md-right">
          <a href="donate.php" class="btn btn-default">Donate Now</a> &nbsp; <a href="join.php" class="btn btn-default">Join Us</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include('footer.php') ?>