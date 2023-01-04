<?php

$messageSent = false;

if (isset($_POST['email']) && $_POST['email'] != '') {

if (filter_var($_POST['email'] , FILTER_VALIDATE_EMAIL)) {
 // submit the form
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $description = $_POST['description'];

  $to = 'cezararvelo@gmail.com';
  $body = '';

  $body .= 'From: '.$firstname. ' ' .$lastname. "\r\n";
  $body .= 'Email: '.$email. "\r\n";
  $body .= 'Phone #: '.$phone. "\r\n";
  $body .= 'Subject: '.$subject. "\r\n";
  $body .= 'Message: '.$description. "\r\n";


  mail($to , $subject , $body);

  $messageSent = true;
}

}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>C'Z Arvelo | Contact</title>

    <link rel="icon" type="image/x-icon" href="../img/favicon.webp" />

  

    <!-- css -->

    <!-- fonts -->
    <link rel="stylesheet" href="../css/fonts.css" />

    <!-- utilities -->
    <link rel="stylesheet" href="../css/utilities.css" />

    <!-- homepage css -->
    <link rel="stylesheet" href="../css/contact.css" />

    <!-- thank you -->
    <link rel="stylesheet" href="./css/thankyou.css" />

    <!-- javascript -->

    <!-- navbar.js -->
    <script src="../js/navbar.js" defer></script>

    <!-- preloader.js -->
    <script src="../js/preloader.js" defer></script>

    <!-- sliders js -->
    <script src="../js/sliders.js" defer></script>
  </head>
  <body>
    <!-- nav -->
    <nav>
      <div class="container nav">
        <a href="./">
          <img src="./img/nav/logo-img.webp" alt="" class="logo" width="30" />
        </a>

        <ul class="nav-links">
          <li><a href="./#work" class="nav-link">work</a></li>
          <li><a href="./about.html" class="nav-link">about</a></li>
          <li><a href="./contact.php" class="nav-link">contact</a></li>
          <li>
            <a href="./shop.html" target="_blank" class="nav-link">shop</a>
          </li>

          <div class="social-links">
            <a
              href="https://www.instagram.com/cezararvelo"
              target="_blank"
              class="social-link"
              ><img src="./img/nav/instagram-icon.webp" alt="" width="15"
            /></a>
            <a
              href="https://www.linkedin.com/in/cezar-arvelo-839b9960?original_referer=https%3A%2F%2Fwww.google.com%2F"
              class="social-link"
              target="_blank"
              ><img src="./img/nav/linkedin-icon.webp" alt="" width="15"
            /></a>
          </div>
          <i class="fa-solid fa-xmark close-icon"></i>
        </ul>

        <i class="fa-solid fa-bars hamburger"></i>
      </div>
    </nav>

    <?php
      if($messageSent):
    ?>
    <!-- thank you message -->
    <section>
      <div class="container thankyou-section">
        <h2 class="thankyou-title thank-you-title pb3 slide-in">
          Thanks for reaching out, be in touch soon!
        </h2>

        <a href="./" class="go-back-link slide-in">Go Back</a>
      </div>
    </section>

    <?php
      else:
    ?>
    <!-- contact -->
    <section>
      <div class="container contact">
        <div class="contact-title-container">
          <h2 class="contact-title slide-in">let's work</h2>
          <h3 class="contact-subtitle slide-in">MAKE AN IMPACT TODAY</h3>
        </div>

        <form method="POST" action="./contact.php" id="form">
          <div class="contact-form slide-in">
            <p class="form-el">
              <label for="first-name">Name</label>
              <input
                type="text"
                class="first-name"
                id="first-name"
                placeholder="first name"
                name="firstname"
                required
              />
            </p>
            <p class="form-el last-name-el">
              <input
                type="text"
                class="last-name"
                id="last-name"
                placeholder="last name"
                name="lastname"
                required
              />
            </p>
            <p class="form-el">
              <label for="email-address">email address</label>
              <input
                type="text"
                class="email"
                id="email"
                name="email"
                required
              />
            </p>
            <p class="form-el">
              <label for="phone">phone</label>
              <input
                type="number"
                class="phone"
                id="phone"
                name="phone"
                required
              />
            </p>
            <p class="form-el subject-el">
              <label for="subject">subject</label>
              <input
                type="text"
                class="subject"
                id="subject"
                required
                name="subject"
              />
            </p>

            <p class="form-el desc-el">
              <label for="description">description</label>
              <textarea
                name="description"
                id="description"
                class="description"
                cols="100%"
                required
              ></textarea>
            </p>

            <p class="form-el submit-el">
              <button type="submit" class="submit-btn">submit</button>
            </p>
          </div>
        </form>
      </div>
    </section>

    <?php
      endif;
    ?>

    <!-- footer -->
    <footer>
      <div class="footer container">
        <a href="./" class="footer-home-link">
          <img src="./img/Footer_Logo.webp" class="footer-logo" alt="" />
        </a>

        <p class="footer-text">
          C'Z Arvelo LLC <span class="vertical-bar"></span> 2022
        </p>
        <div class="social-links-footer">
          <a
            class="social-link-footer"
            href="https://www.instagram.com/cezararvelo"
            target="_blank"
            ><img src="./img/nav/instagram-icon.webp" alt=""
          /></a>
          <a
            class="social-link-footer"
            href="https://www.linkedin.com/in/cezar-arvelo-839b9960?original_referer=https%3A%2F%2Fwww.google.com%2F"
            target="_blank"
            ><img src="./img/nav/linkedin-icon.webp" alt=""
          /></a>
        </div>
      </div>
    </footer>

    <!-- preloader -->
    <div id="preloader">
      <p class="preloader-text">loading...</p>
    </div>
  </body>
</html>
