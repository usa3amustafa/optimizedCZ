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
<style>
  @font-face {
  font-family: suprtall;
  src: url('../fonts/SUPR-Tall.otf');
}

@font-face {
  font-family: suprtall;
  src: url('../fonts/SUPR-Tall-Bold.otf');
  font-weight: bold;
}

@font-face {
  font-family: suprtall;
  src: url('../fonts/SUPR-Tall-Italic.otf');
  font-style: italic;
}

@font-face {
  font-family: suprtall;
  src: url('../fonts/SUPR-Tall-Bold-Italic.otf');
  font-weight: bold;
  font-style: italic;
}

@font-face {
  font-family: suprtall2;
  src: url('../fonts/SUPR-Tall2.otf');
}

@font-face {
  font-family: suprtall2;
  src: url('../fonts/SUPR-Tall-Bold2.otf');
  font-weight: bold;
}

@font-face {
  font-family: suprtall2;
  src: url('../fonts/SUPR-Tall-Italic2.otf');
  font-style: italic;
}

@font-face {
  font-family: suprtall2;
  src: url('../fonts/SUPR-Tall-Bold-Italic2.otf');
  font-weight: bold;
  font-style: italic;
}

@font-face {
  font-family: usiversltsd;
  src: url('../fonts/UniversLTStd-LightCn.otf');
}

@font-face {
  font-family: usiversltsdLight;
  src: url('../fonts/UniversLTStd-LightUltraCn.otf');
}

:root {
  /* fonts */
  --suprtall: 'suprtall';
  --usiversltsd: 'usiversltsd';
  --usiversltsdLight: 'usiversltsdLight';

  /* colors */
  --white-clr: #fff;
  --black-clr: #000;
  --grey-clr: #333;
  --dark-grey-clr: #222;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* utilities */

html {
  scroll-behavior: smooth;
  overflow-x: hidden;
}

body {
  background-color: var(--black-clr);
  color: var(--white-clr);
}

img {
  max-width: 100%;
}

ul {
  list-style-type: none;
}

section {
  padding-top: 4rem;
}

.section-title {
  font-size: 4rem;
  font-family: var(--suprtall);
}

.container {
  width: 95%;
  max-width: 1280px;
  margin: 0 auto;
}

.hamburger,
.close-icon {
  display: none;
  font-size: 1.5rem;
  color: #fff;

  cursor: pointer;
}

.slide-in {
  opacity: 0;
  transform: translateY(5px);
  transition: opacity 0.75s ease-in-out, transform 0.75s ease-in-out;
}

.slide-in.appear {
  opacity: 1;
  transform: translateY(0px);
}

.p3 {
  padding: 3rem 0;
}

.pt0 {
  padding-top: 0;
}

/* nav */

nav {
  background: #000;

  position: fixed;
  width: 100%;
  left: 0;
  top: 0;
  opacity: 0;

  transition: opacity 1s ease-in-out;
  transition-delay: 0.75s;
}

.slidedown {
  opacity: 1;
  z-index: 10;
}

.nav {
  display: flex;
  justify-content: space-between;
  align-items: center;

  padding: 0.5rem 0;
}

.logo {
  transition: transform 0.1s ease-in-out;
}

.logo:hover {
  transform: scale(0.95);
}

.nav-links {
  display: flex;
  align-items: center;
  gap: 1rem;
}

.nav-link {
  display: inline-block;
  font-size: 1.25rem;
  letter-spacing: 1px;
  font-weight: 600;
  font-family: var(--usiversltsdLight);
  color: var(--white-clr);
  text-transform: uppercase;
  text-decoration: none;

  transition: transform 0.15s ease-in-out;
}

.nav-link:hover {
  transform: translateY(-2px);
}

.nav-links > li {
  border-left: 3px solid var(--white-clr);
  padding-left: 1rem;
}
.nav-links > li:first-child {
  border-left: none;
  padding-left: 0;
}

.social-links {
  display: flex;
  align-items: center;
  gap: 0.75rem;
  margin-top: 0.25rem;
}

.social-link {
  display: inline-block;

  transition: transform 0.15s ease-in-out;
}

.social-link:hover {
  transform: translateY(-2px);
}

/* scroll down image */
.scroll-down-img {
  position: absolute;
  left: 0;
  bottom: 1%;
  transform: translateY(-20px);
  opacity: 0;
}

.fade-in-down-animation {
  animation: fade-in-down 2.5s ease-in-out infinite;
  animation-delay: 3.5s;
}

@keyframes fade-in-down {
  0% {
    opacity: 0;
    transform: translateY(-20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

/* desc read more */
.desc-text {
  font-family: var(--usiversltsd);
  font-size: 1.25rem;
  line-height: 1.6;
}

.desc-text-mobile {
  display: none;
}

.read-more {
  color: var(--white-clr);
  font-weight: 500;
  cursor: pointer;
  display: none;
}

/* work header */
.work-header-bg {
  min-height: 75vh;

  padding-top: 0;
}

.work-header {
  position: relative;
  min-height: 75vh;

  width: 90%;
  margin: 0 auto;
}

/* footer */
footer {
  margin-top: 4rem;
}

.footer {
  display: flex;
  justify-content: space-between;
  align-items: center;

  padding: 2rem;
}

.footer-logo {
  max-width: 80px;
}

.footer-text {
  font-family: var(--usiversltsd);
  font-size: 1rem;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-weight: lighter;

  display: flex;
  align-items: center;
  gap: 1rem;
}

.vertical-bar {
  display: inline-block;

  height: 18px;
  width: 1px;
  background-color: var(--white-clr);
}

.social-links-footer {
  display: flex;
  align-items: center;
  gap: 1rem;
}

.social-link-footer {
  transition: transform 0.15s ease-in-out;
}

.social-link-footer:hover {
  transform: translateY(-2px);
}

.social-link-footer > img {
  max-width: 20px;
}

/* work project */

#next-project-mobile {
  display: none;
}

.work-pre-hover-img {
  opacity: 1;
  transition: opacity 0.1s ease-in;
}

.work-hover-img {
  position: absolute;
  top: 0;
  left: 0;

  opacity: 0;

  transition: opacity 0.1s ease-in;
}

.work-project:hover .work-pre-hover-img {
  opacity: 0;
}

.work-project:hover .work-hover-img {
  opacity: 1;
  cursor: pointer;
}

/* preloader */
#preloader {
  background: #000;
  height: 100vh;
  width: 100vw;
  max-width: 100%;

  z-index: 20;
  position: fixed;
  top: 0;
  left: 0;

  display: flex;
  justify-content: center;
  align-items: center;
}

#preloader-home {
  background: #000;
  height: 100vh;
  width: 100%;

  z-index: 20;
  position: fixed;
  top: 0;
  left: 0;

  display: none;
}

.preloader-text {
  font-family: var(--suprtall);
  font-size: 4rem;
}

.preloader-video {
  display: flex;
  justify-content: center;
  align-items: center;
}

.preloader-video > video {
  max-width: 30rem;
  width: 80%;
}

.flex-center {
  display: flex;
  justify-content: center;
  align-items: center;
}

/* next section */
.next-section {
  width: 100%;
  max-width: 700px;
  position: relative;

  transition: transform 0.15s ease-in-out, filter 0.15s ease-in-out;
}

.next-section:hover {
  transform: translateY(-10px);
  filter: brightness(120%);
}

.next-section-link {
  color: var(--white-clr);
  text-decoration: none;
}

.next-section-title {
  font-family: var(--suprtall);
  font-size: 8rem;

  position: absolute;
  top: 2.5rem;
  left: 2rem;
}

.next-section-subtitle {
  font-family: var(--usiversltsdLight);
  font-size: 3rem;
  font-weight: lighter;
  text-transform: uppercase;
  letter-spacing: 1px;

  position: absolute;
  top: 9rem;
  left: 2rem;
}

.next-section-title::before {
  font-family: var(--usiversltsdLight);
  font-size: 2rem;
  letter-spacing: 3px;
  position: absolute;
  top: -1.75rem;
  left: -0.75rem;
}

/* 1024px */
@media (max-width: 1024px) {
  .desc-text {
    display: none;
  }

  .desc-text-mobile {
    display: block;
    font-family: var(--usiversltsd);
    font-size: 1.25rem;
    line-height: 1.6;
    margin-bottom: 1rem;
  }

  .read-more-text {
    line-height: 1.6;
    display: none;
    transition: transform 0.7s ease-out, opacity 0.7s ease-out;
  }

  .read-more {
    display: inline-block;
  }

  .read-more-text {
    display: none;
    overflow: hidden;
  }

  .show-read-more {
    display: inline;
    height: auto;
  }
}

/* 800px */
@media (max-width: 800px) {
  .work-header-bg {
    padding-top: 0;
  }

  .work-header {
    position: relative;
    min-height: 65vh;

    width: 90%;
    margin: 0 auto;
  }

  #next-project-desktop {
    display: none;
  }

  #next-project-mobile {
    display: block;

    max-width: 500px;
    width: 80%;
    margin: 0 auto;
  }

  .hamburger,
  .close-icon {
    display: block;
  }

  .nav-links {
    opacity: 0;
    transform: translateX(1000px);
    position: fixed;
    right: 0;
    top: 0;

    height: 100vh;
    width: 95%;
    max-width: 500px;
    background: var(--black-clr);
    flex-direction: column;
    justify-content: center;

    transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
  }

  .show-nav-links {
    transform: translateX(0px);
    opacity: 1;
  }

  .nav-link {
    font-size: 2.5rem;
  }

  .social-link > img {
    width: 20px;
  }

  .nav-links > li {
    border-left: none;
    padding-left: 0;
  }

  .close-icon {
    position: absolute;
    top: 5%;
    right: 5%;
  }
}

@media (max-width: 640px) {
  .footer {
    flex-direction: column;
    gap: 2rem;
  }

  .next-section-title {
    font-size: 4rem;
    top: 1.75rem;
  }

  .next-section-title::before {
    font-size: 1.75rem;
    left: -1.25rem;
    top: -1.75rem;
  }

  .next-section-subtitle {
    font-size: 2rem;
    top: 5.25rem;
  }
}
@media (max-width: 400px) {
  .next-section-title {
    font-size: 3.75rem;
  }

  .next-section-subtitle {
    font-size: 1.75rem;
    top: 5rem;
  }
}

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
