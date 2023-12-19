<?php
// Commencer une nouvelle session ou reprendre une session existante
session_start();
echo ("Bienvenu ". $_SESSION["user_lastname"]);

?>

<DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>agenda</title>
        <link href="../css/agenda.css" rel="stylesheet">
        
</head>
<header>

  
</header>
<body>
  <section>
    <form method="post">
    <input type="datetime-local" name="date" required>
    <input type="submit" name="submit" value="Afficher la semaine">
</form>
<?php
  date_default_timezone_set('Europe/Paris');
  
  // Vérifier si une date a été sélectionnée
  if (isset($_POST['date'])) {
      // Utiliser la date sélectionnée
      $selectedDate = $_POST['date'];
  } else {
      // Utiliser la date actuelle
      $selectedDate = date('Y-m-d');
  }
  
  // Convertir la date sélectionnée en timestamp
  $timestamp = strtotime($selectedDate);
  
  // Trouver le lundi de la semaine de la date sélectionnée
  $monday = strtotime('monday this week', $timestamp);
  // Trouver le dimanche de la semaine de la date sélectionnée
  $sunday = strtotime('sunday this week', $timestamp);
  
  // Afficher la période de la semaine sélectionnée
  echo "Semaine du " . date('d/m/Y', $monday) . " au " . date('d/m/Y', $sunday);

    try {
      $db = new PDO('sqlite:../../Back/BDD/BDD2.db');
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set error mode to exception
  } catch (PDOException $e) {
      die("Erreur de connexion : " . $e->getMessage());
  }

  $id_user = $_SESSION['user_id'];

  $sql = "SELECT id_team FROM users_has_teams WHERE id_user = :id_user";

  $stmt = $db->prepare($sql);
  $stmt->execute(); 
  
  // Récupérer les résultats de la requête SQL en utilisant la méthode fetchAll()
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

  $sql2 = 'SELECT id_agenda FROM teams_has_agendas WHERE id_team = :results';

  $stmt2 = $db->prepare($sql2);
  $stmt2->execute(); 
  
  // Récupérer les résultats de la requête SQL en utilisant la méthode fetchAll()
  $results2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
  
  ?>
  </section>

  
  
  <div class="conteneur-calendrier">
    <div class="header">
  <div class="conteneur-boutons">

  <a href="pageEvent2.php"><button class="button-19" role="button">créer un event </button></a>
  <a href="modifierunevent2.php"><button class="button-19" role="button">modifier un event </button></a>

  <a href="infocompte2.php"><button class="button-19logo" role="button"><i class="fa-solid fa-user" style="color: #646ad9;"></i></button></a>
  <div style="clear: both;"></div>
  </div>

  </div>
  
    <div class="calendar">
    <div class="timeline">
      <div class="spacer"></div>
      <div class="time-marker">00h</div>
      <div class="time-marker">01h</div>
      <div class="time-marker">02h</div>
      <div class="time-marker">03h</div>
      <div class="time-marker">04h</div>
      <div class="time-marker">05h</div>
      <div class="time-marker">06h</div>
      <div class="time-marker">07h</div>
      <div class="time-marker">08h</div>
      <div class="time-marker">09h</div>
      <div class="time-marker">10h</div>
      <div class="time-marker">11h</div>
      <div class="time-marker">12h</div>
      <div class="time-marker">13h</div>
      <div class="time-marker">14h</div>
      <div class="time-marker">15h</div>
      <div class="time-marker">16h</div>
      <div class="time-marker">17h</div>
      <div class="time-marker">18h</div>
      <div class="time-marker">19h</div>
      <div class="time-marker">20h</div>
      <div class="time-marker">21h</div>
      <div class="time-marker">22h</div>
      <div class="time-marker">23h</div>
      <div class="time-marker">24h</div>  
    </div>

  <div class="days">
    <div class="day Lun">
      <div class="date">
        <p class="date-num"></p>
        <p class="date-day">Lundi</p>
      </div>
      <div class="events">
        <div class="event start-01 end-06 securities">
          <p class="title"></p>
          <p class="time"></p>
        </div>
        <div class="event start-06 end-11 securities">
          <p class="title"></p>
          <p class="time"></p>
        </div>
        <div class="event start-11 end-16 securities">
          <p class="title"></p>
          <p class="time"></p>
        </div>
        <div class="event start-16 end-21 securities">
          <p class="title"></p>
          <p class="time"></p>
        </div>
        <div class="event start-21 end-26 securities">
          <p class="title"></p>
          <p class="time"></p>
        </div>
      </div>
    </div>
    <div class="day Mar">
      <div class="date">
        <p class="date-num"></p>
        <p class="date-day">Mardi</p>
      </div>
      <div class="events">
        <div class="event start-01 end-06 corp-fi">
          <p class="title"></p>
          <p class="time"></p>
        </div>
        <div class="event start-06 end-11 ent-law">
          <p class="title"></p>
          <p class="time"></p>
        </div>
        <div class="event start-11 end-16 ent-law">
          <p class="title"></p>
          <p class="time"></p>
        </div>
        <div class="event start-16 end-21 securities">
          <p class="title"></p>
          <p class="time"></p>
        </div>
        <div class="event start-21 end-26 securities">
          <p class="title"></p>
          <p class="time"></p>
        </div>
      </div>
    </div>
    <div class="day Mer">
      <div class="date">
        <p class="date-num"></p>
        <p class="date-day">Mercredi</p>
      </div>
      <div class="events">
      <div class="event start-01 end-06 corp-fi">
          <p class="title"></p>
          <p class="time"></p>
        </div>
        <div class="event start-06 end-11 ent-law">
          <p class="title"></p>
          <p class="time"></p>
        </div>
        <div class="event start-11 end-16 ent-law">
          <p class="title"></p>
          <p class="time"></p>
        </div>
        <div class="event start-16 end-21 securities">
          <p class="title"></p>
          <p class="time"></p>
        </div>
        <div class="event start-21 end-26 securities">
          <p class="title"></p>
          <p class="time"></p>
        </div>
      </div>
    </div>
    <div class="day Jeu">
      <div class="date">
        <p class="date-num"></p>
        <p class="date-day">Jeudi</p>
      </div>
      <div class="events">
      <div class="event start-01 end-06 corp-fi">
          <p class="title"></p>
          <p class="time"></p>
        </div>
        <div class="event start-06 end-11 ent-law">
          <p class="title"></p>
          <p class="time"></p>
        </div>
        <div class="event start-11 end-16 ent-law">
          <p class="title"></p>
          <p class="time"></p>
        </div>
        <div class="event start-16 end-21 securities">
          <p class="title"></p>
          <p class="time"></p>
        </div>
        <div class="event start-21 end-26 securities">
          <p class="title"></p>
          <p class="time"></p>
        </div>
      </div>
    </div>
    <div class="day Ven">
      <div class="date">
        <p class="date-num"></p>
        <p class="date-day">Vendredi</p>
      </div>
      <div class="events">
      <div class="event start-01 end-06 corp-fi">
          <p class="title"></p>
          <p class="time"></p>
        </div>
        <div class="event start-06 end-11 ent-law">
          <p class="title"></p>
          <p class="time"></p>
        </div>
        <div class="event start-11 end-16 ent-law">
          <p class="title"></p>
          <p class="time"></p>
        </div>
        <div class="event start-16 end-21 securities">
          <p class="title"></p>
          <p class="time"></p>
        </div>
        <div class="event start-21 end-26 securities">
          <p class="title"></p>
          <p class="time"></p>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>