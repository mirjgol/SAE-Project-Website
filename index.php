<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/typography.css" rel="stylesheet">
  <link href="css/queries.css" rel="stylesheet">
  <title>Nähatelier Fokus Fina</title>  
  <script src="javascript/animations.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
  <script src="javascript/hamburger-menu.js" defer></script>

  <script src="javascript/slider.js" defer></script>
  <script src="javascript/form-validation.js" defer></script>
  

  
  <link rel="icon" type="image/x-icon" href="images/logo.svg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&display=swap" rel="stylesheet">
  
</head>


<body>

<!-- *** HEADER *** -->
<?php include('partials/header.php'); ?>	

  <main>

    <section class="hero-section">

    
        <div class="hero-text-container">


          <h1 class="hero-title-mobile"><span class="welcome-span-mobile"><span>Willkommen</span>im Nähatelier</span><span class="fokus-fina-span-mobile"><span>Fokus</span>Fina</span></h1>

        <h1 class="hero-title-desktop"><span class="welcome-span-desktop">Willkommen im Nähatelier</span><span class="fokus-fina-span-desktop">Fokus Fina</span></h1>


        <h2 class="hero-intro-mobile-version"><span>"Verwirkliche dein </span><span>ganz persönliches</span> <span>Wunschoutfit</span> <span>- massgeschneidert</span> <span>und einzigartig.“</span></h2>  
        
        
        <h2 class="hero-intro-desktop-version"><span>"Verwirkliche dein ganz persönliches Wunschoutfit -</span><span> massgeschneidert und einzigartig.“</span></h2><button class="hero-angebot-button">Angebot</button>
      
      </div>

  

       
      </div>



    </section>


  </main>

  <section class="img-slider-section">   <div class="title">
          <h2 class="slides-title">title</h2>

        </div>
    <div class="img-slider-container">
    

        <picture class="slide">
            <source srcset="./images/slider-dress-blue-back.webp" type="image/webp">
            <img class="slider-img" src="./images/slider-dress-blue-back.JPG" alt="Neckholder - Kleid">
        </picture>

        <picture class="slide">
            <source srcset="./images/slider-dress-blue-front.webp" type="image/webp">
            <img class="slider-img" src="./images/slider-dress-blue-front.JPG" alt="Neckholder - Kleid">
        </picture>

        <picture class="slide">
            <source srcset="./images/slider-dress-blue-side.webp" type="image/webp">
            <img class="slider-img" src="./images/slider-dress-blue-side.JPG" alt="Neckholder - Kleid">
        </picture>

        <picture class="slide">
            <source srcset="./images/slider-dress-grey-front.webp" type="image/webp">
            <img class="slider-img" src="./images/slider-dress-grey-front.JPG" alt="Zipperkleid">
        </picture>

        <picture class="slide">
            <source srcset="./images/slider-dress-grey-back.webp" type="image/webp">
            <img class="slider-img" src="./images/slider-dress-grey-back.JPG" alt="Zipperkleid">
        </picture>

        <picture class="slide">
            <source srcset="./images/slider-dress-grey-hood.webp" type="image/webp">
            <img class="slider-img" src="./images/slider-dress-grey-hood.JPG" alt="Zipperkleid">
        </picture>

        <picture class="slide">
            <source srcset="./images/slider-dress-white-full.webp" type="image/webp">
            <img class="slider-img" src="./images/slider-dress-white-full.JPG" alt="Neckholder - Kleid mit Knöpfen">
        </picture>

        <picture class="slide">
            <source srcset="./images/slider-dress-white-side.webp" type="image/webp">
            <img class="slider-img" src="./images/slider-dress-white-side.JPG" alt="Neckholder - Kleid mit Knöpfen">
        </picture>

        <picture class="slide">
            <source srcset="./images/slider-dress-white-top.webp" type="image/webp">
            <img class="slider-img" src="./images/slider-dress-white-top.JPG" alt="Neckholder - Kleid mit Knöpfen">
        </picture>


        <picture class="slide">
            <source srcset="./images/slider-hat-side.webp" type="image/webp">
            <img class="slider-img" src="./images/slider-hat-side.JPG" alt="Musketier Hut Pfaufeder">
        </picture>

       </div>
          <div class="slider-buttons">
            <span class="left">&lt;</span>
            <span class="play-pause">II</span>
            <span class="right">&gt;</span>
        </div>
    </div>  
 

 
</section>

  <section class="form-container">


    <form class="contact-form">


      <div class="title-box">
        <h2 class="form-title">Kontaktiere mich</h2>
        <picture class="contact-form-img-box-mobile"
          ><source src="images/slider-dress-grey-hood.webp" type="image/webp" />

          <img
            class="contact-form-img-mobile"
            loading="lazy"
            src="images/slider-dress-grey-hood.JPG"
            alt="Graues Kleid mit Kapuze"
          />
        </picture>

        <picture class="contact-form-img-box-desktop"
          ><source src="images/slider-dress-grey-hood-desktop.webp" type="image/webp" />

          <img
            class="contact-form-img-desktop"
            loading="lazy"
            src="images/slider-dress-grey-hood-desktop.JPG"
            alt="Graues Kleid mit Kapuze"
          />
        </picture>
      </div>

    <div class="box-form-elements">
<div class="anrede-box">

    <label class="form-label" for="anrede">Anrede</label>

    <select id="anrede" name="anrede" class="focusout">

      <option class="form-option" value="choose" class="form-input focusout">Anrede wählen</option>
      <option class="form-option" value="male">Herr</option>
      <option class="form-option"value="female">Frau</option>
      <option class="form-option" value="neutral">Neutrale Anrede</option>

    </select>

</div>


     <div class="first-name-box">
      <label class="form-label" for="firstName">Vorname </label>
      <input class="form-input first-name focusout focusin" type="text" name="firstName" id="firstName"  />
    </div> 

    <div class="last-name-box">
      <label class="form-label" for="last-name">Nachname</label>
      <input class="form-input focusout"  type="text" name="last-name" id="lastName" />
    </div>

    <div class="street-box">

      <div class="street-name-box"> <label class="form-label" for="street-name">Strasse</label>
      <input class="form-input form-input-street focusout" type="text" name="street-name" id="streetName" /></div>

      <div class="street-number-box">
      <label class="form-label" for="housenumber">Nr.</label>
      <input class="form-input form-input-street-number focusout" type="text" name="house-number" id="houseNumber" />
      </div>
  
    </div>


    <div class="plz-box">
      <label class="form-label" for="postleitzahl">Postleitzahl</label>
      <input class="form-input focusout" type="text" name="postleitzahl" id="plz" />
    </div>
      
    <div class="ort-box">     
      <label class="form-label" for="location">Ort</label>
      <input class="form-input focusout" type="text" name="location" id="location" />
    </div>
 
    <div class="email-box">  
      <label class="form-label" for="email">E-Mail Adresse</label>
      <input class="form-input focusout" type="email" name="email" id="email" />
    </div>
    
<div class="nachricht-box">
      <label class="form-label" for="message" type="text">Deine Nachricht</label>
      <textarea
        class="form-input focusout"
        placeholder="Beschreibe hier dein Anliegen. (mind. 30 Zeichen) "
        name="message"
        id="message"
        cols="30"
        rows="10">
    </textarea>
</div>

     <div class="form-button-box"> <button class="button-form button" type="button" id="button-form">Absenden</button></div>

</div>

    </form>


  </section>

  <footer class="footer">
    <p>...wird gerade noch gestylt...</p>
    <div class="footer-box">
      <div class="footer-links-box">
        <a class="footer-link" href=""
          ><small>Impressum</small></a
        >
        <a class="footer-link" href=""
          ><small>AGB</small></a
        >
        <a class="footer-link" href=""
          ><small>Datenschutz</small></a
        >
      </div>
      <a aria-label="Instagram-Link" class="footer-icon"><i class="fa-brands fa-instagram"></i></a>
    </div>
   <small class="copyright-box">&copy 2025 Mirjam Goldiger</small>
  </footer>
</body>
</html>



<!-- TERMINAL TO GITHUB SHORT:

git add .
git commit -m "Neue Änderungen"
git push origin main


-->


