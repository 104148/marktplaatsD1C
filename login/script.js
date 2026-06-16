function showPasw() {
  // We pakken álle invoervelden die de class 'wachtwoord-veld' hebben
  let velden = document.querySelectorAll('.wachtwoord-veld');
  
  // We lopen door alle gevonden velden heen met een loopje
  velden.forEach(function(veld) {
    if (veld.type === "password") {
      veld.type = "text";
    } else {
      veld.type = "password";
    }
  });
}