<?php

$hasErrors = false; // Fehlerstatus
$errorMessages = array();

// leere variablen für form labels
$username = '';
$email = '';
$password = '';
$gender = '';
$country = '';
$agb = '';

// prüfen ob 2 wichtige Werte* existieren

if (isset($_POST['username']) && isset($_POST['password'])) {
  // Form wurde abgeschickt

  // HTML Tags entfernen
  $username = strip_tags($_POST['username']);
  $email = strip_tags($_POST['email']);
  $password = $_POST['password']; // passwort nicht verändern
  $gender = strip_tags($_POST['gender']);
  $country = strip_tags($_POST['country']);
 

  // agb in Ganzzahl umwandeln -> Feld ist entweder 1 oder 0
  $agb = isset($_POST['agb']) ? 1 : 0; 

  // Pflichtfelder* überprüfen

  if (empty($_POST['username'])) {
    $errorMessages['username'][] = 'Bitte Benutzername eingeben.';
    $hasErrors = true;
  }

  // wäre nicht unbedingt nötig -> wegen filter_var
  if (empty($_POST['email'])) {
    $errorMessages['email'] []= 'Bitte E-Mail Adresse angeben.';
    $hasErrors = true;
  }

  if (empty($_POST['password'])) {
    $errorMessages['password'] [] = 'Bitte Passwort eingeben.';
    $hasErrors = true;
  }

  if (empty($_POST['gender'])) {
    $errorMessages['gender'] [] = 'Geschlecht wurde nicht ausgewählt';
    $hasErrors = true;
  }
  if (empty($_POST['country'])) {
    $errorMessages['country'] [] = 'Land wurde nicht ausgewählt';
    $hasErrors = true;
  }
  if (empty($_POST['agb'])) {
    $errorMessages['agb'] [] = 'AGBs wurden nicht akzeptiert';
    $hasErrors = true;
  }

// Formate überprüfen

  // Benutzername

  if (strlen($username) < 4 || strlen($username) > 16) {
   $hasErrors = true;
   $errorMessages['username'][] = "Der Benutzername muss zwischen 4 und 16 Zeichen lang sein.";
  } elseif (strpos($username, ' ') !== false) {
    $errorMessages['username'][] = 'Der Benutzername darf keine Leerzeichen enthalten';
    $hasErrors = true; 
  }

  // E-Mail

 $validEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
 if ($validEmail == false) {
  $errorMessages['email'][] = 'Bitte eine gültige Email Adresse angeben';
  $hasErrors = true;
 }

 // Passwort

 if (strlen($password) < 8) {
  $errorMessages['password'][] = 'Das Passwort muss mindestens 8 Zeichen lang sein';
  $hasErrors = true; 

  //pattern regex match

 } elseif (!preg_match('/[a-z]/', $password)){
  $errorMessages['password'][] = 'Das Passwort muss einen Kleinbuchstaben enthalten';
  $hasErrors = true; 
 

 } elseif (!preg_match('/[A-Z]/', $password)){
  $errorMessages['password'][]= 'Das Passwort muss einen Grossbuchstaben enthalten';
  $hasErrors = true; 


 } elseif (!preg_match('/[0-9]/', $password)){
  $errorMessages[password][] = 'Das Passwort muss eine Zahl enthalten';
  $hasErrors = true; 
 

 } elseif (!preg_match('/[\W]/', $password)){
  $errorMessages[password][] = 'Das Passwort muss ein Sonderzeichen enthalten';
  $hasErrors = true; 


} elseif (strpos($password, ' ') !== false) {
  $errorMessages['password'][] = 'Das Passwort darf keine Leerzeichen enthalten';
  $hasErrors = true; 
}

// Ergebnis ausgeben, wenn keine Validierungsfehler entstanden sind

if($hasErrors == false) {
  // Verarbeitung kann hier beginnen
  echo 'Bereit zum verschicken';
}

}

// Monitor für die POST oder GET Daten:

echo '<pre class="pre-margin"> POST: ';
print_r($_POST);
print_r($errorMessages);
echo '</pre>';

?>

<!-- HTML -->




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  
  <link href="../css/main.css" rel="stylesheet">
  <link href="../css/typography.css" rel="stylesheet">
  <link href="../css/queries.css" rel="stylesheet">
  <title>Registration</title>  
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

<section class="registration-section">

<h1 class="site-title">Registration</h1>
<form class="registration-form" action="register.php" method="POST"> 

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
    <label for="email" class="col-sm-2 col-form-label">E-Mail*</label>
    <div class="col-sm-10">
      <input type="email" class="form-control form-control-lg" id="email" name="email">
    </div>
  </div>

  <div class="row mb-3">
    <label for="password" class="col-sm-2 col-form-label">Passwort*</label>
    <div class="col-sm-10">
      <input type="password" class="form-control form-control-lg" id="password" name="password">
    </div>
  </div>

  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Geschlecht*</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" input type="radio" name="gender" id="male" value="male">
        <label class="form-check-label" for="gridRadios1">
          Männlich
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="female">
        <label class="form-check-label" for="gridRadios2">
          Weiblich
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="gridRadios3" value="neutral" checked>
        <label class="form-check-label" for="gridRadios3">
        Divers
        </label>
      </div>
    </div>

    <div class="mb-3">
  <label for="country" class="form-label form-control-lg">Wähle dein Land*</label>
  <select class="form-select" id="country" name="country">
    <option value="">Bitte wählen...</option>
    <option value="de">Deutschland</option>
    <option value="at">Österreich</option>
    <option value="ch">Schweiz</option>
    <option value="fr">Lichtenstein</option>
  </select>
</div>


  </fieldset>
  <div class="row mb-3">
    <div class="col-sm-10 offset-sm-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="agb">
        <label class="form-check-label" for="gridCheck1">
          Ich akzeptiere die AGB's*.
        </label>
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Anmelden</button>
</form>


</section>


</main>
  
</body>
</html>