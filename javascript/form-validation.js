// ************** FORM VALIDATION ***************** //

// Objekt: {welches die Regeln (als Map) für jedes einzelne Feld enthält} *ternary-Operator Schreibweise anstatt if/else (da in einem Objekt) wenn die Statements nicht zutreffen dann key value ist ""

const validationRules = {
  //ANREDE
  anrede: (value) => value === "choose" ? "Bitte Anrede auswählen." : "",

  //VORNAME
  firstName: (value) => !value ? "Vorname eingeben" : /\d/.test(value) ? "Zahlen sind nicht erlaubt" : "",

  //NACHNAME
  lastName: (value) => !value ? "Nachname eingeben" : /\d/.test(value) ? "Zahlen sind nicht erlaubt" : "",

  //STRASSE
  streetName: (value) => !value ? "Strassenname eingeben" : value.length <= 3 ? "muss mindestens 3 Zeichen enthalten" : "",

  //HAUSNUMMER
  houseNumber: (value) => !value ? "Hausnummber eingeben" : "",

  //PLZ
  plz: (value) => !value ? "Postleitzahl eingeben" : !/^\d{4}$/.test(value) ? "Postleitzahl nicht gültig" : "",
 
 //ORT
  location: (value) => !value ? "Wohnort eingeben" : value.length <2 ? "Wohnort ist zu kurz": "",

 //EMAIL
  email: (value) => !value ? "E-mail Adresse eingeben" : !/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(value) ? "Ungültige E-Mail Adresse" : "",

 //MESSAGE
  message: (value) => !value ? "darf nicht leer sein" : value.length < 30 ? "Nachricht mindestens 30 Zeichen" : "",
   
};

// add eventListener on "focusout" für alle input felder
document.querySelectorAll(".focusout").forEach((inputField) => {
  inputField.addEventListener("focusout", validateInputFields);
});

// add eventListener to "Absenden" button 

document.querySelector("#button-form").addEventListener("click", validateForm);



// *** Funktion, welche alle input Fields einzeln validiert (bei focusout)

function validateInputFields (event) {

  const targetedInputField = event.target; // targets das Feld welches focusout auslöst
  const fieldId = targetedInputField.id; // id des targeted fields
 

  const validate = validationRules[fieldId];
  if (validate) {
    const errorMessage = validate(targetedInputField.value);

    if (errorMessage) {
      displayFieldError(targetedInputField, errorMessage);

    } else 
  {
    clearFieldError(targetedInputField);}
  }
}
  



// Funktion zum Anzeigen eines Fehlers der gleich nach dem aktiven input Element aufgetaucht ist ist

function displayFieldError(inputField, errorMessage) {

  // wenn schon eine Fehlermeldung vorhanden ist, löscht es diese
  clearFieldError(inputField);

  // ebenfalls wird eine neue Fehlermeldung erstellt, wenn das Feld wieder verlassen wird (erneutes focusout)
  const errorSpan = document.createElement("span");
  errorSpan.classList.add("error-message");
  errorSpan.textContent = errorMessage;
  inputField.after(errorSpan);
}

// Funktion zum Entfernen eines vorhandenen Fehlers
function clearFieldError(inputField) {
  const errorSpan = inputField.nextElementSibling;
  if (errorSpan && errorSpan.classList.contains("error-message")) {
    errorSpan.remove();
  }
}








// *** Funktion, welche das Formular validiert, wenn "Absenden" geklickt wird
function validateForm(event) {
  event.preventDefault(); // damit Seite nicht neu geladen wird

  // empty data Objekt für die Formulardaten (store)

  let data = {};

  // empty data Objekt für die Fehlermeldungen (store)
  let validationErrors = {};


  // removes previously displayed error messages
clearErrors();


// gets the values from the input fields and assigns them to "data"

  data.anrede = document.querySelector("#anrede").value;
  data.firstName = document.querySelector("#firstName").value;
  data.lastName = document.querySelector("#lastName").value;
  data.streetName = document.querySelector("#streetName").value;
  data.houseNumber = document.querySelector("#houseNumber").value;
  data.plz = document.querySelector("#plz").value;
  data.location = document.querySelector("#location").value;
  data.email = document.querySelector("#email").value;
  data.message = document.querySelector("#message").value;

// debugging : logs the object (data and errors)

console.log("data object", data);
console.log("validation errors object", validationErrors);



  

  // validate ANREDE
  if (data.anrede === ("choose")) {
    validationErrors.anrede = "Bitte Anrede auswählen.";
  }

  // validate VORNAME
  if (!data.firstName) {
    validationErrors.firstName = "Vorname eingeben";
  } 

  else if (/\d/.test(data.firstName)) // "\d" Regex für Zahlen
    {
    validationErrors.firstName = "Zahlen sind nicht erlaubt";
  }


  // validate NACHNAME
  if (!data.lastName) {
    validationErrors.lastName = "Nachname eingeben";
  } 
  else if (/\d/.test(data.lastName)) // "\d" Regex für Zahlen
    {
    validationErrors.lastName = "Zahlen nicht erlaubt";
  }

  // validate STRASSE
  if (!data.streetName) {
    validationErrors.streetName = "Strassenname eingeben";
  } else if (data.streetName.length <= 3) {
    validationErrors.streetName = "muss mindestens 3 Zeichen enthalten";
  }

  // validate HAUSNUMMER
  if (!data.houseNumber) {
    validationErrors.houseNumber = "Hausnummer eingeben";
  }

  // validate PLZ
  if (!data.plz) {
    validationErrors.plz = "Postleitzahl eingeben";
  } else if(!/^\d{4}$/.test(data.plz)) // Regex für PLZ vierstellig, nur Ziffern
    {
   validationErrors.plz = "Postleitzahl nicht gültig";
    }
  

  // validate ORT
  if (!data.location) {
    validationErrors.location = "Wohnort eingeben.";
  } else if (data.location.length < 2) {
    validationErrors.location = "Wohnort ist zu kurz";
  }

  // validate EMAIL
  if (!data.email) {
    validationErrors.email = "E-Mail Adresse eingeben.";
  } else if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(data.email)) {
      validationErrors.email = "Ungültige E-Mail Adresse";
    }
  

  // validate MESSAGE 
  if (!data.message) {
    validationErrors.message = "darf nicht leer sein";
  } else if (data.message.length < 30){
    validationErrors.message = "Nachricht zu kurz";
  }




  //if there are no errors, log the data to the console

  if (Object.keys(validationErrors).length === 0) {
    console.log("form data: sumbitted", data);
    
    // sonst zeige Errors auf der Seite
  } else {
    displayErrors(validationErrors);
  }
}


// console.log("Checking firstName:", data.firstName);
// console.log("Checking lastName:", data.lastName);

// function to display errors next to the relevant form input fields:

function displayErrors(errors) {

  // iterate over the errors 
  for (const field in errors){
// get input element by ID
    const inputField = document.querySelector(`#${field}`);
  


// input field check console

  if (!inputField) {
   console.error(`Field with ID #${field} not found`);
 }


// create a span element for the error message

const errorSpan = document.createElement("span");

// add class for styling the error span

errorSpan.classList.add("error-message");
errorSpan.textContent = errors[field]; // make the error message

// append the span after the input field

inputField.after(errorSpan);
}

}


// function to clear the errors

function clearErrors() {
document.querySelectorAll("span.error-message").forEach((element) => { element.remove();

});

}



