<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/main.css" rel="stylesheet" />
    <link href="css/typography.css" rel="stylesheet" />
    <link href="css/queries.css" rel="stylesheet" />
    <title>Kontakt</title>
    <script src="javascript/animations.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
    <script src="javascript/hamburger-menu.js" defer></script>

    <script src="javascript/form-validation.js" defer></script>

    <link rel="icon" type="image/x-icon" href="images/logo.svg" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <!-- *** HEADER *** -->

    <?php include('partials/header.php'); ?>	

    <section class="kontakt-section">
      <h1 class="site-title">Kontakt</h1>
      <div class="kontakt-box">
        <h2>So kannst du mich kontaktieren:</h2>
        <h3>Kontaktformular</h3>
        <p class="fliesstext">
          Sende mir eine Anfrage über das Kontaktformular.
        </p>
        <h3>Anruf</h3>
        <p class="fliesstext">Rufe mich an unter der folgenden Nummer:</p>
        <p class="fliesstext">Telefonnummer</p>
        <h3>Atelier</h3>
        <address class="contact-address-box">
          <span class="fliesstext">Fokus Fina Nähatelier</span
          ><span class="fliesstext">Speicherstrasse 60</span
          ><span class="fliesstext">9000 St.Gallen</span>
        </address>
      </div>

      <div class="form-container">
        <form class="contact-form">
          <div class="title-box">
            <h2 class="form-title">Kontaktiere mich</h2>
            <picture class="contact-form-img-box-mobile"
              ><source
                src="images/slider-dress-grey-hood.webp"
                type="image/webp"
              />

              <img
                class="contact-form-img-mobile"
                loading="lazy"
                src="images/slider-dress-grey-hood.JPG"
                alt="Graues Kleid mit Kapuze"
              />
            </picture>

            <picture class="contact-form-img-box-desktop"
              ><source
                src="images/slider-dress-grey-hood-desktop.JPG"
                type="image/webp"
              />

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
                <option value="choose" class="form-input focusout">
                  Anrede wählen
                </option>
                <option value="male">Herr</option>
                <option value="female">Frau</option>
                <option value="neutral">Neutrale Anrede</option>
              </select>
            </div>

            <div class="first-name-box">
              <label class="form-label" for="firstName">Vorname </label>
              <input
                class="form-input first-name focusout focusin"
                type="text"
                name="firstName"
                id="firstName"
              />
            </div>

            <div class="last-name-box">
              <label class="form-label" for="last-name">Nachname</label>
              <input
                class="form-input focusout"
                type="text"
                name="last-name"
                id="lastName"
              />
            </div>

            <div class="street-box">
              <div class="street-name-box">
                <label class="form-label" for="street-name">Strasse</label>
                <input
                  class="form-input form-input-street focusout"
                  type="text"
                  name="street-name"
                  id="streetName"
                />
              </div>

              <div class="street-number-box">
                <label class="form-label" for="housenumber">Nr.</label>
                <input
                  class="form-input form-input-street-number focusout"
                  type="text"
                  name="house-number"
                  id="houseNumber"
                />
              </div>
            </div>

            <div class="plz-box">
              <label class="form-label" for="postleitzahl">Postleitzahl</label>
              <input
                class="form-input focusout"
                type="text"
                name="postleitzahl"
                id="plz"
              />
            </div>

            <div class="ort-box">
              <label class="form-label" for="location">Ort</label>
              <input
                class="form-input focusout"
                type="text"
                name="location"
                id="location"
              />
            </div>

            <div class="email-box">
              <label class="form-label" for="email">E-Mail Adresse</label>
              <input
                class="form-input focusout"
                type="email"
                name="email"
                id="email"
              />
            </div>

            <div class="nachricht-box">
              <label class="form-label" for="message" type="text"
                >Deine Nachricht</label
              >
              <textarea
                class="form-input focusout"
                placeholder="Beschreibe hier dein Anliegen. "
                name="message"
                id="message"
                cols="30"
                rows="10"
              >
              </textarea>
            </div>

            <div class="form-button-box">
              <button class="button-form button" type="button" id="button-form">
                Absenden
              </button>
            </div>
          </div>
        </form>
      </div>
    </section>
    <footer class="footer">
      <p>...wird gerade noch gestylt...</p>
      <div class="footer-box">
        <div class="footer-links-box">
          <a class="footer-link" href=""><small>Impressum</small></a>
          <a class="footer-link" href=""><small>AGB</small></a>
          <a class="footer-link" href=""><small>Datenschutz</small></a>
        </div>
        <a aria-label="Instagram-Link" class="footer-icon"
          ><i class="fa-brands fa-instagram"></i
        ></a>
      </div>
      <small class="copyright-box">&copy 2025 Mirjam Goldiger</small>
    </footer>
  </body>
</html>
