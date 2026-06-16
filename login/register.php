<?php
session_start();
require "../dbconfig.php";

// Alleen actie ondernemen als het formulier verzonden is
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // 1. Check de Invite Code (Guard clause)
        $stmt = $conn->query("SELECT value FROM site_settings WHERE key_name = 'invite_code'");
        $saved_code = $stmt->fetchColumn();

        if ($_POST['adpassword'] !== $saved_code) {
            die("Fout: Ongeldige invite code!");
        }

        // 2. Haal de gegevens op
        $gebruikersnaam = $_POST['user1'];
        $wachtwoord = $_POST['password1'];

        if (empty($gebruikersnaam) || empty($wachtwoord)) {
            die("Vul alle velden in!");
        }

        // 3. Hash het wachtwoord
        $hash = password_hash($wachtwoord, PASSWORD_DEFAULT);

        // 4. Sla op in database
        $sql = "INSERT INTO login (user, password, admin) VALUES (:username, :password, :admin)";
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute([
            'username' => $gebruikersnaam,
            'password' => $hash,
            'admin' => 0
        ]);

        // 5. ROULETTE: Als registratie gelukt is, ververs de code
        if ($result) {
            $nieuwe_code = bin2hex(random_bytes(4));
            $update = $conn->prepare("UPDATE site_settings SET value = ? WHERE key_name = 'invite_code'");
            $update->execute([$nieuwe_code]);
        }

        echo 'Registratie is voltooid! De invite code is automatisch ververst voor de volgende gebruiker. <a href="index.php">Log in!</a>';
        exit;

    } catch (PDOException $e) {
        echo "Foutmelding: " . $e->getMessage();
    }
}
?>