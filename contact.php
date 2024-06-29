<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
  <title>Contact Us - Tryambak Foundation</title>
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
    <div class="bg-fixed pos-rel breadcrumbs-page" style="background:url('images/events-banner.jpg')">
      <div class="container">
        <h1>Contact Us</h1>
        <nav aria-label="breadcrumb" class="breadcrumb-wrap">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo $site['base_url']; ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>


  <main id="body-content">

    <section class="wide-tb-100 pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8 col-md-12">
            <h1 class="heading-main">
              <small>Get In Touch</small>
              Contact With Us
            </h1>
            <p>Want to know more about Tryambak? Feel free to get in touch with us on the contact details mentioned below or submit the form. We will be happy to assist you.</p>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-7 col-md-12 order-lg-last">
            <div class="contact-wrap">
             <div class="contact-icon-xl">
              <i class="charity-love_hearts"></i>
            </div>
            <div id="sucessmessage"> </div>
            <form action="#" method="post" id="contact_form" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6 mb-0">
                  <div class="form-group">
                    <input type="text" name="name" id="name" class="form-control" placeholder="First Name">
                  </div>
                </div>
                <div class="col-md-6 mb-0">
                  <div class="form-group">
                    <input type="text" name="email" id="email" class="form-control" placeholder="Your Email">
                  </div>
                </div>
                <div class="col-md-6 mb-0">
                  <div class="form-group">
                    <input type="number" name="phone" id="phone" class="form-control" placeholder="Phone">
                  </div>
                </div>
                <div class="col-md-6 mb-0">
                  <div class="form-group">
                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
                  </div>
                </div>
                <div class="col-md-12 mb-0">
                  <div class="form-group">
                    <textarea name="comment" id="comment" class="form-control" rows="6" placeholder="Message"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary text-nowrap">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-5 col-md-12">

          <div class="icon-box-4 bg-orange mb-4">
            <i data-feather="map-pin"></i>
            <h3>Our Address</h3>
            <div>Dehradun, Uttarakhand (INDIA)</div>
          </div>


          <div class="icon-box-4 bg-green mb-4">
            <i data-feather="phone"></i>
            <h3>Phone Number</h3>
            <div>+91 9528 102 568</div>
          </div>


          <div class="icon-box-4 bg-gray mb-4">
            <i data-feather="mail"></i>
            <h3>Email Address</h3>
            <div><a href="mailto:info@tryambakfoundation.org">info@tryambakfoundation.org</span></a></div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <section class="wide-tb-100 pb-0">
    <div class="map-frame">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110204.72538042432!2d78.01713465!3d30.32542845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390929c356c888af%3A0x4c3562c032518799!2sDehradun%2C%20Uttarakhand!5e0!3m2!1sen!2sin!4v1684912721912!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="container">
      <div class="row">

        <div class="col-sm-12">
          <div class="callout-style-side-img d-lg-flex align-items-center top-broken-grid">
            <div class="img-callout">
              <img src="images/come-together.jpg" alt="">
            </div>
            <div class="text-callout">
              <div class="d-md-flex align-items-center">
                <div class="heading">
                  <h2>Embark on Tryambak Foundation's Empowering Journey in Uttarakhand's Rural Villages, and Together, Let's Ignite Lasting Change.</h2>
                </div>
                <div class="icon">
                  <a href="donate.php" class="btn btn-default">Donate Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

</main>

<?php include('footer.php') ?>