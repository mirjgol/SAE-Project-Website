<?php
session_start();
require '../includes/db.php';

$errorMessages = array();
$username = '';
$password = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Felder prüfen
    if (empty($username)) {
        $errorMessages['username'][] = 'Bitte Benutzernamen eingeben.';
    }

    if (empty($password)) {
        $errorMessages['password'][] = 'Bitte Passwort eingeben.';
    }

    if (empty($errorMessages)) {
        // Benutzer aus DB holen
        $stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Passwort prüfen
            if (password_verify($password, $user['password'])) {
                // Login erfolgreich
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];

                // Weiterleitung
                header("Location: dashboard.php");
                exit;
            } else {
                $errorMessages['password'][] = 'Falsches Passwort.';
            }
        } else {
            $errorMessages['username'][] = 'Benutzername nicht gefunden.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  
  <link href="../css/main.css" rel="stylesheet">
  <link href="../css/typography.css" rel="stylesheet">
  <link href="../css/queries.css" rel="stylesheet">
  <title>Login</title>  
  <script src="../javascript/animations.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
  <script src="../javascript/hamburger-menu.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" defer integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

  <link rel="icon" type="image/x-icon" href="../images/logo.svg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&display=swap" rel="stylesheet">

  
</head>

<body>
  <!-- *** HEADER *** -->
<?php include('../partials/header.php'); ?>	
<main>

<section class="login-section">

<h1 class="site-title">Login</h1>

<form class="login-form" action="login.php" method="POST"> 

  <div class="row mb-3">
    <label for="username" class="col-sm-2 col-form-label" name="username">Benutzername*
    </label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-lg <?php echo isset($errorMessages['username']) ? 'is-invalid' : ''; ?>" id="username" name="username" value="<?php echo htmlspecialchars($username);?>">

      <?php if (!empty($errorMessages['username'])) {
        foreach ($errorMessages['username'] as $error_msg){
          echo '<div class="text-danger mt-1">' . $error_msg . '</div>';
        }
   
      }
      ?>
    </div>
  </div>


  <div class="row mb-3">
    <label for="password" class="col-sm-2 col-form-label">Passwort*</label>
    <div class="col-sm-10">
      <input type="password" class="form-control form-control-lg" id="password" name="password">
    </div>
  </div>






  <button type="submit" class="btn btn-primary">Einloggen</button>
</form>


</section>


</main>
  
</body>
</html>