<section class="wide-tb-100 team-bg mb-spacer-md">
    <div class="container">
      <div class="row justify-content-between align-items-end">
        <div class="col-lg-4 col-md-6">
          <h1 class="heading-main">
            <small>People</small>
            Who Supported Us
          </h1>
        </div>
      </div>
      <div class="row">
        <?php for ($i=1; $i < 5; $i++) { ?>
          <div class="col-12 col-lg-3 col-sm-6">
            <div class="team-section-wrap mb-0">
              <div class="text-center">
                <img src="images/client<?php echo $i; ?>.png" alt class="rounded-circle">
              </div>
              <!-- <h4>Member Name</h4>
              <h5>Volunteer</h5> -->
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>