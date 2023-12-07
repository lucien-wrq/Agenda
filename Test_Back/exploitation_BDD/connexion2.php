<?php
session_start();

try {
    $db = new PDO('sqlite:BDD2.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set error mode to exception
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['mdp'];

    // Use prepared statements to prevent SQL injection
    $sql = "SELECT u.id_user, u.email, u.password, u.lastname, u.firstname, r.id_role FROM users u
            JOIN users_has_roles ur ON u.id_user = ur.id_user
            JOIN roles r ON ur.id_role = r.id_role
            WHERE u.email = :email";


    $stmt = $db->prepare($sql);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Compare the hashed password
        if (password_verify($password, $user['password'])) {
            // Store user information in the session
            $_SESSION['user_id'] = $user['id_user'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_role'] = $user['id_role'];
            $_SESSION['user_lastname'] = $user['lastname'];
            $_SESSION['user_firstname'] = $user['firstname'];
            
            
            //modification de la derniere date de connection 
            $last_login_date = date('Y-m-d H:i:s');

            $query = "UPDATE users SET last_login_date = :last_login_date WHERE email = :email";
            $stmt = $db->prepare($query); // assign the PDOStatement object to a variable

            // Bind the parameters
            $stmt->bindParam(':last_login_date', $last_login_date);
            $stmt->bindParam(':email', $email);

            // Execute the query
            $stmt->execute();

            // Redirect based on the user's role
            if ($user['id_role'] == 1) {
                header("Location: page_user.php");
            } elseif ($user['id_role'] == 2) {
                header("Location: page_admin.php");
            } else {
                // Handle other roles if needed
                echo "Role not supported";
            }
            exit();
        } else {
            echo "Mot de passe incorrect";
        }
    } else {
        echo "Utilisateur non trouvé";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="connexion2.css" rel="stylesheet">
    <div class="wrapper fadeInDown">
        <div id="formContent">
          
      
          <!-- Image -->
          <div class="fadeIn first">
            <img src="https://img.freepik.com/vecteurs-premium/illustration-festive-homme-pouce-leve-pour-page-connexion_91152-12.jpg?w=2000" id="icon" alt="User Icon" />
          </div>
      
          <!-- formulaire de connexion -->
          <form action="connexion2.php" method="POST">
            <input type="email" id="email" class="fadeIn second" name="email" placeholder="email">
            <input type="password" id="mdp" class="fadeIn third" name="mdp" placeholder="mot de passe">
            <input type="submit" class="fadeIn fourth" value="Se connecter">
          </form>
      
          <!-- rappeler le mot de passe -->
          <div id="formFooter">
            <a class="underlineHover" href="#">Mot de passe oublié ?</a>
          </div>
      
        </div>
      </div>