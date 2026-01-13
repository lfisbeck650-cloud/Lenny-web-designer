const form = document.getElementById("contactForm");
const response = document.getElementById("response");

form.addEventListener("submit", function(e) {
  e.preventDefault();

  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const message = document.getElementById("message").value;

  // Hier könnt ihr EmailJS oder Formspree einbinden
  // Für jetzt simulieren wir nur die Bestätigung
  response.textContent = `Danke ${name}! Deine Anfrage wurde gesendet. Meine Eltern werden die Bezahlung und Details klären.`;

  // Formular zurücksetzen
  form.reset();
});
