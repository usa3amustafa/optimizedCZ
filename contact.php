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
<!-- utilities -->
    <link rel="stylesheet" href="./css/utilities.css" />

<style>
  

.contact {
  padding-top: 4rem;
}

.contact-title-container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.contact-title {
  font-family: var(--suprtall);
  font-size: 6.25rem;
}

.contact-subtitle {
  font-family: var(--usiversltsdLight);
  font-size: 2rem;
  letter-spacing: 2px;
  font-weight: 400;
  text-transform: uppercase;
}

.contact-form {
  width: 100%;
  max-width: 1000px;
  margin: 0 auto;
  padding: 4rem 0;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  column-gap: 1rem;
  row-gap: 1rem;
}

.last-name-el {
  align-self: flex-end;
}

.subject-el,
.desc-el {
  grid-column: 1/-1;
}

label {
  display: block;
  font-family: var(--usiversltsdLight);
  font-size: 1.5rem;
  letter-spacing: 3px;
  text-transform: uppercase;
  margin-bottom: 0.25rem;
}

input {
  width: 100%;
  border: 1px solid var(--dark-grey-clr);
  background-color: var(--black-clr);
  padding: 1rem;
  display: inline-block;
  font-family: var(--usiversltsdLight);
  text-transform: uppercase;
  font-size: 1.25rem;
  letter-spacing: 2px;
  outline: none;
  color: var(--white-clr);
  transition: border 0.15s ease-in-out;
}

input:focus-visible {
  outline: none;
  border: 1px solid var(--grey-clr);
}

::placeholder {
  color: var(--dark-grey-clr);
  opacity: 1;
}

.first-name,
.last-name {
  padding-top: 1.75rem;
}

textarea {
  background-color: var(--dark-grey-clr);
  color: var(--white-clr);
  border: 1px solid var(--dark-grey-clr);
  font-family: var(--usiversltsd);
  line-height: 1.6;
  font-size: 1.25rem;
  padding: 1rem;
  resize: none;
  width: 100%;
  height: 200px;
  transition: border 0.15s ease-in-out;
}

textarea:focus-visible {
  outline: none;
  border: 1px solid var(--grey-clr);
}

.submit-el {
  grid-column: 1/-1;
  display: flex;
  justify-content: center;
  align-items: center;
}

.submit-btn {
  cursor: pointer;
  display: block;
  padding: 1rem 2rem;
  font-family: var(--suprtall);
  font-size: 2.5rem;
  text-decoration: none;
  color: var(--white-clr);
  background-color: var(--grey-clr);
  border-radius: 2px;

  transition: background-color 0.15s ease-in-out;
}

.submit-btn:hover {
  background-color: var(--dark-grey-clr);
}

@media (max-width: 800px) {
  .contact-form {
    grid-template-columns: 1fr;
  }
}

.thankyou-section {
  min-height: 65vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.thankyou-title {
  font-family: var(--usiversltsd);
  font-size: 2rem;
  letter-spacing: 1px;
  text-align: center;
  padding-bottom: 2rem;
}

.go-back-link {
  text-decoration: underline;
  font-size: 6rem;
  font-family: var(--suprtall);
  color: var(--white-clr);
}



</style>

    <!-- fonts -->
    <!-- <link rel="stylesheet" href="../css/fonts.css" /> -->

    <!-- utilities -->
    <!-- <link rel="stylesheet" href="../css/utilities.css" /> -->

    <!-- contact css -->
    <!-- <link rel="stylesheet" href="../css/contact.css" /> -->

    <!-- thank you -->
    <!-- <link rel="stylesheet" href="./css/thankyou.css" /> -->

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
    <!-- nav -->
    <nav>
      <div class="container nav">
        <a href="./">
          <img loading="lazy"src="./img/nav/logo-img.webp" alt="" class="logo" width="30" />
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
              ><img loading="lazy"src="./img/nav/instagram-icon.webp" alt="" width="15"
            /></a>
            <a
              href="https://www.linkedin.com/in/cezar-arvelo-839b9960?original_referer=https%3A%2F%2Fwww.google.com%2F"
              class="social-link"
              target="_blank"
              ><img loading="lazy"src="./img/nav/linkedin-icon.webp" alt="" width="15"
            /></a>
          </div>
          <div class="close-icon">
            <img
              src="./img/close.webp"
              alt=""
              class="close-icon-img"
              width="24"
            />
          </div>
        </ul>

        <div class="hamburger">
          <img loading="lazy"src="./img/more.webp" alt="" class="close-icon-img" width="24" />
        </div>
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
          <img loading="lazy"src="./img/Footer_Logo.webp" class="footer-logo" alt="" />
        </a>

        <p class="footer-text">
          C'Z Arvelo LLC <span class="vertical-bar"></span> 2022
        </p>
        <div class="social-links-footer">
          <a
            class="social-link-footer"
            href="https://www.instagram.com/cezararvelo"
            target="_blank"
            ><img loading="lazy"src="./img/nav/instagram-icon.webp" alt=""
          /></a>
          <a
            class="social-link-footer"
            href="https://www.linkedin.com/in/cezar-arvelo-839b9960?original_referer=https%3A%2F%2Fwww.google.com%2F"
            target="_blank"
            ><img loading="lazy"src="./img/nav/linkedin-icon.webp" alt=""
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
