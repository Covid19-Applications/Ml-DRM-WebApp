<?php include('security.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>

<style type="text/css">
  
  #hero {
  width: 100%;
  height: 100vh;
  margin-top: 70px;
  background-image: url(img/meghalaya/home.jpg);
  background-position: center;
  background-size: cover;
}

</style>

  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/ouical_generator.css">

    <!-- Theme Style -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Medical Reminders System</h1>
          
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="img/med/remind.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
  


    <div  class="jumbotron">
      <h2 style="text-align: center;">SET REMINDERS</h2>
<br><br>
      <form id="calendar-generator">
        <div class="form-group">
        <label for="event-title" style="text-align: left;">Title:</label>
        <input type="text" class="form-control" name="event-title" placeholder="Enter title" required id="event-title">
</div>
        <div class="form-group">
        <label for="start-time" style="text-align: left;">Start Time:</label>
        <input type="datetime-local" class="form-control" name="start-time"  required id="start-time">
      </div>
          <div class="form-group">
        <label for="end-time">End Time:</label>
        <input type="datetime-local" class="form-control" name="end-time" required id="end-time">
      </div>
        <div class="form-group">
        <label for="event-address" style="text-align: left;">Name of Medication:</label>
        <input type="text" name="event-address" class="form-control" placeholder="Enter Medication"required id="event-address">
      </div>
        <div class="form-group">
        <label for="event-description"></label>
        <textarea name="textarea" rows="10" cols="50" class="form-control" placeholder="Enter the Dosage of Medication" required id="event-description"></textarea>
      </div>
        <div class="form-group">
        <label for="event-id" style="text-align: left;">Assign custom ID:</label>
        <input class="form-control" type="text" name="event-id" id="event-id">
      </div>
        <div class="form-group">
        <label for="event-class" style="text-align: left;">Assign custom category:</label>
        <input class="form-control" type="text" name="event-class" id="event-class">
    </div>
        <input type="submit"  value="GENERATE REMINDER" />
          <h2 style="text-align: center;">CUSTOMIZE & SAVE REMINDERS:</h2>
          <p style="text-align: center;">Click on "View Using" to select calender type & Set Alarm</p>
      </form>

  
    <div class="container">
          <div id="live-example"></div>
          <div id="html-result"></div>
    </div>
    </div>
    
    <script src="js/ouical_generator.js"></script>
    <script src="js/ouical.js"></script>
    <script src="js/ouical.min.js"></script>

 
<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>