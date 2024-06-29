<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
  <title>Donate - Tryambak Foundation</title>
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
    <div class="bg-fixed pos-rel breadcrumbs-page" style="background:url('images/home-banner-one.jpg')">
      <div class="container">
        <h1>Donation</h1>
        <nav aria-label="breadcrumb" class="breadcrumb-wrap">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo $site['base_url']; ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Donation</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>


  <main id="body-content">

    <section class="wide-tb-100">
      <div class="container">
        <div>
          <h1 class="heading-main">
            <small>Donation</small>
            Join the Tryambak Foundation: Empower Villages, Enrich Minds, and Sustain Nature—Together, We Forge a Radiant Future.
          </h1>
          <p>Be a Catalyst for Change with Tryambak Foundation: Your Donation Empowers Villages, Enriches Minds, and Sustains Nature—Together, We Illuminate the Path to a Radiant and Prosperous Future.</p>
        </div>
        <div class="row">
          <div class="col-lg-7">
            <div class="donation-wrap">
              <h3 class="h3-sm fw-5 txt-blue mb-3">Select Your Donation Amount</h3>
              <div class="row">
               <div class="col-md-8">
                  <div class="mt-3">
                    <input type="number" class="form-control" id="custom" placeholder="Amount (Indian Rupee)">
                  </div>
                </div>
              </div>
              <hr>
              <h3 class="h3-sm fw-5 txt-blue mb-3">Personal Details</h3>
              <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="name" placeholder="Full Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="email" class="form-control" id="email" placeholder="Your Email">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="phone" placeholder="Phone">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="country" placeholder="Country">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <input type="text" class="form-control" id="address" placeholder="Address">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Message (If Any)"></textarea>
                </div>
              </div>
            </div>
            
              <div class="col-md-12 mt-3">
                <button class="btn btn-default"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg> Submit Request</button>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="mt-4">
              <h3 class="h3-sm fw-5 txt-blue mb-3">Account Details:</h3>
              <p><strong>Account Name:</strong> Tryambak Foundation
              <br><strong>Account Number:</strong> 10156202664
              <br><strong>IFSC Code:</strong> IDFB0021231
              <br><strong>Bank Address:</strong> Branch Address, No 59/3, Ground & 2nd Floor, Rajpur Road, Dehradun - 248001</p>
              <hr>
              <h3 class="h3-sm fw-5 txt-blue mb-3">For Quick Payment:</h3>
              <p>Scan the code below:</p>
              <div class="img">
                <img src="images/qr-code-payment.jpg">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  </main>

  <?php include('footer.php') ?>