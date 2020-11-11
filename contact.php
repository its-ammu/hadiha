<?php
echo "<pre>";
    print_r($_POST);
echo "</pre>";

    if(isset($_POST['email']) && $_POST['email'] != ''){
        
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL){

            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $msgSub = $_POST['subject'];
            $msg = $_POST['message'];

            $to = "amuthavarsnirajkumar@gmail.com";
            $body = "";

            $body .= "From: ".$userName. "\r\n";
            $body .= "Email: ".$userEmail. "\r\n";
            $body .= "Message: ".$msg. "\r\n";


            mail($to,$msgSub,$body);

        })
        
        

    }

    


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haldiha</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top ">
        <div class="container">
        <a class="navbar-brand" href="#"><img width="125px" src="assets/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav  ml-auto" id="nav">
            <li class="nav-item ">
              <a class="nav-link"  href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="about.html">about</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="service.html">services</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="contact.html">contact</a>
              </li>
            
          </ul>
        </div>
        </div>
      </nav>
      <div class="container">
          <div class="head">Contact Us</div>
          <div class="line"></div> 
          
<section class="mb-4">

    <!--Section heading-->
    <br>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5 content contact ">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="contact.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="">Your name</label>
                            <input type="text" id="name" name="name" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="email" class="">Your email</label>
                            <input type="text" id="email" name="email" class="form-control">
                           
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
<br>
                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="subject" class="">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                           
                        </div>
                    </div>
                </div>
                <!--Grid row-->
<br>
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message">Your message</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            
                        </div>

                    </div>
                </div>
                <!--Grid row-->
<br>
            

            <div class="text-center text-md-left">
                <center><button type="submit" class="btn btn-primary">Send</button> </center>           </div>
            <div class="status"></div>
        </div>
        </form>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><img src="assets/locate.png" alt="">
                    <p class="content">Lorem, ipsum., CA 94126, Lorem</p>
                </li>

                <li><img src="assets/phone.png" alt="">
                    <p class="content">+91 9876543210</p>
                </li>

                <li><img src="assets/gmail.svg" width="50px" alt="">
                    <p class="content">loremipsum@gmail.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->
      </div>
      <div class="container-fluid" >
        <div class="container" style="padding: 20px;">
            <div class="row">
                <div class="col-sm">
                    <img src="assets/logo.png" class="footer-logo" alt="logo" width="200px"  >
                </div>
                <div class="col-sm">
                    <h4 ">Address</h4>
                    <p class="footer-p">Lorem nubusipsum.,<br>lorem,<br>ipsum-11.</p>
                </div>
                <div class="col-sm">
                    <h4 >Contact Us</h4>
                    <p class="footer-p">+91 9368196538<br>0452-2964810<br>loremipsum@gmail.com</p>
                
                </div>
            </div>
            <div class="row icons">
              <div class="col-sm"><img src="assets/facebook.svg" width="30px" alt=""></div>
              <div class="col-sm"><img src="assets/instagram.svg" width="30px" alt=""></div>
              <div class="col-sm"><img src="assets/twitter.svg" width="30px" alt=""></div>
              <div class="col-sm"><img src="assets/whatsapp.svg" width="30px" alt=""></div>


            </div>
      </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script>
    
</script>
</body>
</html>