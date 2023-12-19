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
  ?>
  </section>

  
  
  <div class="conteneur-calendrier">
    <div class="header">
  <div class="conteneur-boutons">
    
  
  <a href="pageEvent2.php"><button class="button-19" role="button">créer un event </button></a>
  <a href="modifierunevent2.php"><button class="button-19" role="button">modifier un event </button></a>

  <a href="creerungroupe2.php"><button class="button-19" role="button">créer un groupe </button></a>
  <a href="modifierungroupe2.php"><button class="button-19" role="button">modifier un groupe </button></a>

  <a href="inscription2.php"><button class="button-19" role="button">créer un utilisateur </button></a>


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
    <div class="dayLun">
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
          <p class="title">Culture G</p>
          <p class="time"></p>
        </div>
        <div class="event start-16 end-21 securities">
          <p class="title">SEO</p>
          <p class="time"></p>
        </div>
        <div class="event start-21 end-26 securities">
          <p class="title"></p>
          <p class="time"></p>
        </div>
      </div>
    </div>
    <div class="dayMar">
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
          <p class="title">MARKETING</p>
          <p class="time"></p>
        </div>
        <div class="event start-16 end-21 securities">
          <p class="title">PHP AVEC FAOUZIA LA GOAT</p>
          <p class="time"></p>
        </div>
        <div class="event start-21 end-26 securities">
          <p class="title"></p>
          <p class="time"></p>
        </div>
      </div>
    </div>
    <div class="dayMer">
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
          <p class="title">RESEAU</p>
          <p class="time"></p>
        </div>
        <div class="event start-16 end-21 securities">
          <p class="title">GOOGLE ADS</p>
          <p class="time"></p>
        </div>
        <div class="event start-21 end-26 securities">
          <p class="title"></p>
          <p class="time"></p>
        </div>
      </div>
    </div>
    <div class="dayJeu">
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
          <p class="title">SOLUTION WEB</p>
          <p class="time"></p>
        </div>
        <div class="event start-16 end-21 securities">
          <p class="title">HTML5/CSS</p>
          <p class="time"></p>
        </div>
        <div class="event start-21 end-26 securities">
          <p class="title"></p>
          <p class="time"></p>
        </div>
      </div>
    </div>
    <div class="dayVen">
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
          <p class="title">BDD AVEC GABER</p>
          <p class="time"></p>
        </div>
        <div class="event start-16 end-21 securities">
          <p class="title">ANGLAIS</p>
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