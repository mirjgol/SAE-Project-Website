<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/main.css" rel="stylesheet" />
    <link href="css/typography.css" rel="stylesheet" />
    <link href="css/queries.css" rel="stylesheet" />
    <title>Galerie</title>
    <script src="javascript/animations.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
    <script src="javascript/hamburger-menu.js" defer></script>

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

    <section class="galerie-section">
      <h1 class="site-title">Galerie</h1>
      <div class="galerie-grid">
        <picture class="galerie-img-box"
          ><source srcset="images/kleidblau1.webp" type="image/webp" />

          <img
            class="galerie-img"
            loading="lazy"
            src="images/KleidBlau1.JPG"
            alt="Blaues Kleid"
          />
        </picture>
        <picture class="galerie-img-box"
          ><source srcset="images/KleidBlau2.webp" type="image/webp" />

          <img
            class="galerie-img"
            loading="lazy"
            src="images/KleidBlau2.JPG"
            alt="Blaues Kleid"
          />
        </picture>
        <picture class="galerie-img-box"
          ><source srcset="images/kleidblau3.webp" type="image/webp" />

          <img
            class="galerie-img"
            loading="lazy"
            src="images/kleidblau3.jpg"
            alt="Blaues Kleid"
          />
        </picture>
        <picture class="galerie-img-box"
          ><source srcset="images/kleidgrau1.webp" type="image/webp" />

          <img
            class="galerie-img"
            loading="lazy"
            src="images/kleidgrau1.jpg"
            alt="Graues Kleid"
          />
        </picture>
        <picture class="galerie-img-box"
          ><source srcset="images/kleidgrau2.webp" type="image/webp" />

          <img
            class="galerie-img"
            loading="lazy"
            src="images/kleidgrau2.jpg"
            alt="Graues Kleid"
          />
        </picture>
        <picture class="galerie-img-box"
          ><source srcset="images/kleidgrau3.webp" type="image/webp" />

          <img
            class="galerie-img"
            loading="lazy"
            src="images/kleidgrau3.jpg"
            alt="Graues Kleid"
          />
        </picture>
        <picture class="galerie-img-box"
          ><source srcset="images/kleidgrau4.webp" type="image/webp" />

          <img
            class="galerie-img"
            loading="lazy"
            src="images/kleidgrau4.jpg"
            alt="Graues Kleid"
          />
        </picture>
        <picture class="galerie-img-box"
          ><source srcset="images/kleidgrau5.webp" type="image/webp" />

          <img
            class="galerie-img"
            loading="lazy"
            src="images/kleidgrau5.jpg"
            alt="Graues Kleid"
          />
        </picture>
        <picture class="galerie-img-box"
          ><source srcset="images/kleidweiss1.webp" type="image/webp" />

          <img
            class="galerie-img"
            loading="lazy"
            src="images/kleidweiss1.jpg"
            alt="Weisses Kleid"
          />
        </picture>
        <picture class="galerie-img-box"
          ><source srcset="images/kleidweiss2.webp" type="image/webp" />

          <img
            class="galerie-img"
            loading="lazy"
            src="images/kleidweiss2.jpg"
            alt="Weisses Kleid"
          />
        </picture>
        <picture class="galerie-img-box"
          ><source srcset="images/kleidweiss3.webp" type="image/webp" />

          <img
            class="galerie-img"
            loading="lazy"
            src="images/kleidweiss3.jpg"
            alt="Weisses Kleid"
          />
        </picture>
        <picture class="galerie-img-box"
          ><source srcset="images/kleidweiss4.webp" type="image/webp" />

          <img
            class="galerie-img"
            loading="lazy"
            src="images/kleidweiss4.jpg"
            alt="Weisses Kleid"
          />
        </picture>
        <picture class="galerie-img-box"
          ><source srcset="images/kleidweiss5.webp" type="image/webp" />

          <img
            class="galerie-img"
            loading="lazy"
            src="images/kleidweiss5.jpg"
            alt="Weisses Kleid"
          />
        </picture>
        <picture class="galerie-img-box"
          ><source srcset="images/kleidgruen1.webp" type="image/webp" />

          <img
            class="galerie-img"
            loading="lazy"
            src="images/kleidgruen1.jpg"
            alt="Grünes Mittelalterkleid"
          />
        </picture>
        <picture class="galerie-img-box"
          ><source srcset="images/kleidgruen2.webp" type="image/webp" />

          <img
            class="galerie-img"
            loading="lazy"
            src="images/KleidGruen2.JPG"
            alt="Grünes Mittelalterkleid"
          />
        </picture>
        <picture class="galerie-img-box"
          ><source srcset="images/hut1.webp" type="image/webp" />

          <img
            class="galerie-img"
            loading="lazy"
            src="images/Hut1.JPG"
            alt="Hut mit Federn"
          />
        </picture>
        <picture class="galerie-img-box"
          ><source srcset="images/hut2.webp" type="image/webp" />

          <img
            class="galerie-img"
            loading="lazy"
            src="images/hut2.jpg"
            alt="Hut mit Federn"
          />
        </picture>
        <picture class="galerie-img-box"
          ><source srcset="images/hut3.webp" type="image/webp" />

          <img
            class="galerie-img"
            loading="lazy"
            src="images/hut3.jpg"
            alt="Hut mit Federn"
          />
        </picture>
        <picture class="galerie-img-box"
          ><source srcset="images/eowyn-front.webp" type="image/webp" />

          <img
            class="galerie-img-hoch"
            loading="lazy"
            src="images/eowyn-front.jpg"
            alt="Kleid von Éowyn"
          />
        </picture>
        <picture class="galerie-img-box"
          ><source srcset="images/eowyn-back.webp" type="image/webp" />

          <img
            class="galerie-img-hoch"
            loading="lazy"
            src="images/eowyn-back.jpg"
            alt="Kleid von Éowyn"
          />
        </picture>
        <picture class="galerie-img-box"
          ><source srcset="images/eowyn-zoom.webp" type="image/webp" />

          <img
            class="galerie-img-hoch"
            loading="lazy"
            src="images/eowyn-zoom.jpg"
            alt="Kleid von Éowyn"
          />
        </picture>
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
