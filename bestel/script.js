const form = document.getElementById("bestelForm");
 
form.addEventListener("submit", function(e){
 
    e.preventDefault();
 
    const naam = document.getElementById("naam").value;
    const email = document.getElementById("email").value;
    const adres = document.getElementById("adres").value;
    const postcode = document.getElementById("postcode").value;
    const plaats = document.getElementById("plaats").value;
 
    if(
        naam === "" ||
        email === "" ||
        adres === "" ||
        postcode === "" ||
        plaats === ""
    ){
        alert("Vul alle gegevens in.");
        return;
    }
 
    alert(
        "Bestelling succesvol!\n\n" +
        "Naam: " + naam +
        "\nEmail: " + email
    );
 
});