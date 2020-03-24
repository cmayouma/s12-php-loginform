<?php
    // Définir la liste des utilisateurs
    $userData = [
        'toto@test.com' => 'BonjourLesGens',
        'jeanpierre@test.com' => 'JaimeLesFrites',
        'michel@test.com' => 'Abcd1234'
    ];


    // Si l'e-mail et le mot de passe existent dans les données envoyées à la page
    if (isset($_POST['email']) && isset($_POST['password'])) {
        // Récupère les données du formulaire
        $email = $_POST['email'];
        $givenPassword = $_POST['password'];
        // Si l'adresse e-mail entrée par l'utilisateur existe dans les données
        if (isset($userData[$email])) {
            $expectedPassword = $userData[$email];  // => Mot de passe correspondant au nom d'utilisateur rentré dans le formulaire

            if ($expectedPassword === $givenPassword) {
                echo 'Connexion réussie';
            } else {
                echo 'Connexion échouée';
            }
        } else {
            echo 'Nom d\'utilisateur inexistant';
        }
    }
?>


