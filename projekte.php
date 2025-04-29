<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/main.css" rel="stylesheet" />
    <link href="css/typography.css" rel="stylesheet" />
    <link href="css/queries.css" rel="stylesheet" />
    <title>Projekte</title>
    <script src="javascript/projekte.js" defer></script>
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

    <section class="project-section">
      <h1 class="site-title">Projekte</h1>
      <div class="inspiration-cards-container"></div>
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
