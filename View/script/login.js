const emailInput = document.getElementById("email");
const errorEmail = document.getElementById("error-message-email");
const categorySelect = document.getElementById("select");
const errorCategory = document.getElementById("error-message-category");
const experienceTextarea = document.getElementById("experience");
const errorExperience = document.getElementById("error-message-experience");
const fileInput = document.getElementById("fileInput");
const errorFile = document.getElementById("error-message-file"); // Ajout du message d'erreur pour le fichier
const signupButton = document.getElementById("signupButton");
const passwordInput = document.getElementById("pwd");
const errorPassword = document.getElementById("error-message-pwd");
emailInput.addEventListener("keyup", validateEmail);

passwordInput.addEventListener("keyup", validatePassword);

function validateFirstName() {
  const firstName = firstNameInput.value.trim();
  // Utilisez une expression régulière pour vérifier que le prénom ne contient que des lettres et des espaces
  if (/^[A-Za-z\s]*$/.test(firstName) && firstName.length > 3) {
    errorFirstName.textContent = "";
  } else {
    errorFirstName.textContent =
      "Le prénom doit contenir plus de 3 caractères et ne doit contenir que des lettres et des espaces.";
  }
  validateForm();
}

function validateLastName() {
  const lastName = lastNameInput.value.trim();
  // Utilisez une expression régulière pour vérifier que le nom de famille ne contient que des lettres et des espaces
  if (/^[A-Za-z\s]*$/.test(lastName) && lastName.length > 3) {
    errorLastName.textContent = "";
  } else {
    errorLastName.textContent =
      "Le nom de famille doit contenir plus de 3 caractères et ne doit contenir que des lettres et des espaces.";
  }
  validateForm();
}

function validateEmail() {
  const email = emailInput.value.trim();
  if (/^\S+@\S+\.\S+$/.test(email)) {
    errorEmail.textContent = "";
  } else {
    errorEmail.textContent = "Adresse e-mail non valide.";
  }
  validateForm();
}

function validatePassword() {
  const password = passwordInput.value.trim();
  if (password.length > 3) {
    errorPassword.textContent = "";
  } else {
    errorPassword.textContent =
      "Le mot de passe doit contenir plus de 3 caractères.";
  }
  validateForm();
}
function validateForm() {
  const isEmailValid = /^\S+@\S+\.\S+$/.test(emailInput.value.trim());
  const isPasswordValid = passwordInput.value.trim().length > 3; // Nouvelle validation du mot de passe

  if (isEmailValid && isPasswordValid) {
    signupButton.disabled = false; // Activation du bouton Signup
  } else {
    signupButton.disabled = true; // Désactivation du bouton Signup
  }
}
