<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/contactus.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
</head>
<body>
<?php include("html/header.html");?>
<main>
  <div class="center">
    <div class="title"><b>Contact us</b></div>
    <h2><a href="index.php">HOME </a>> CONTACT US</h2>
  </div>
  <section class="section">  
    <div class="cont-info">
        <div class="info1">
            <h3>Contact Info</h3>
        </div>
        <div class="row">
          <div class="basic-info">
              <div class="basic-box col-4">
                  <i class="bi bi-geo-alt-fill h2"></i>
                  <h4>Hanoi Head office</h4>
                  <p>5th floor, No 16 Thi Sach Street, Pham Dinh Ho ward, Hai Ba Trung Dist, Hanoi City</p>
              </div>
              <div class="basic-box col-4">
                  <i class="bi bi-headset h2"></i>
                  <h4>Call Us Support 24/7</h4>
                  <p>+84 984 749 958</p>
                  <p>+84 243 933 5728</p>
              </div>
              <div class="basic-box col-4">
                  <i class="bi bi-envelope-at h2"></i>
                  <h4>Our Email Cruises</h4>
                  <p>info@monchericruises.com</p>
                  <p>sale@bigbaygroup.com</p>
              </div>
          </div>
        </div>
    </div>
    <div class="get-in-touch text-center" >
        <h2><b>Get In Touch</b></h2>
        <div class="row">
            <form>
                <div class="form row">
                  <div class="col-6">
                    
                    <input type="text" class="form-control" id="validationDefault01" placeholder="Please enter your full name" required>
                  </div>
                  <div class="col-6">
                    
                    <input type="email" class="form-control" id="validationDefault01" placeholder="Please enter your email address" required>
                  </div>
                </div>
                <div class="form row">
                  <div>
                    
                    <input type="number" class="form-control" id="validationDefault05" placeholder="Please enter your phone number" required>
                  </div>
                </div>
                <div class="form row">
                  <div class="">
                    
                    <textarea type="text" class="form-control mess" id="validationDefault05" placeholder="Please enter message here"></textarea>
                  </div>
                </div>
                
                <button class="btn" id="showPopupButton" type="button">SEND MESSAGE NOW</button>
                <div class="popup" id="popupMessage">Message received!</div>
              </form>
              
            </div>
    </div>
  </section>
  <div class="google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14897.715076569648!2d105.8548402!3d21.0155232!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9bc2c5b839a45331!2sMon%20Ch%C3%A9ri%20Cruises%20Head%20Office!5e0!3m2!1svi!2s!4v1674035182386!5m2!1svi!2s" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</main>
<?php include("html/footer.html");?>
<script type="text/javascript">
  const showPopupButton = document.getElementById('showPopupButton');
  const popupMessage = document.getElementById('popupMessage');

  // Add a click event listener to the button
  showPopupButton.addEventListener('click', () => {
    // Show the pop-up
    popupMessage.style.display = 'block';

    // Hide the pop-up after a few seconds (optional)
    setTimeout(() => {
        popupMessage.style.display = 'none';
    }, 3000); // Display for 2 seconds (adjust as needed)
});
</script>
</body>
</html>