<?php
session_start();
include('Read.php');
include('Count.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="Script.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <title></title>
</head>

<body>
<!-- Header section -->
<header>
  <h1>
    <a   href="https://argo.wildcodeschool.com/"><img class="jello-horizontal" src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo"/></a>
    Les Argonautes
  </h1>
</header>
<span id="Banner"></span>

<!-- Main section -->
<main>
      <!-- New member form -->
      <h2>Ajouter un(e) Argonaute</h2>

      <p id="Subtitle">Il y a <?php echo($row_cnt)?> menbres dans votre équipage.</p>


      <form class="new-member-form" action="add.php" method="post">
        <label for="name">Nom de l&apos;Argonaute</label>
        <input type="text" id="Name" name="Name" autofocus placeholder="Charalampos" maxLength="12" />
        <button type="submit" id="Btn-Launch" onclick="myFunction()">ADD</button>
      </form>
  
      <!-- Member list -->

      <h2 id="TitleList">Membres de l'équipage</h2>
<div class="MenberList">

    <div id="Part1" style="display:block;">

<?php
  foreach($result1 as $List){
?>
    
  <ul id="tab-01">
    <li><?= $List['Name'] ?> <a href="delete.php?id=<?= $List['user_id']?>">Supprimer</a></li> 
  </ul>

<?php
    }
?>
    </div>

    <!-- -->


    <div id="Part2" style="display:block">

<?php
  foreach($result2 as $List2){
?>
      <ul id="tab-02">
        <li><?= $List2['Name'] ?> <a href="delete.php?id=<?= $List2['user_id']?> ">Supprimer </a></li> 
      </ul>

<?php
    }
?>
    </div>

  <!-- -->

    <div id="Part3" style="display:block">

<?php
  foreach($result3 as $List3){
?>

      <ul id="tab-03" >
        <li><?= $List3['Name'] ?> <a href="delete.php?id=<?= $List3['user_id']?> ">Supprimer </a></li>  
      </ul>

<?php
    }
?>
    </div>        
</div>
              </main> 





<footer>
  <p>Réalisé par <a href="https://foin-alexandre.notion.site/D-veloppeur-Junior-fe3d8ea7dabb4595968b052598253747">Alex-andros</a> sanós en Anthestérion de l'an 515 avant JC</p>
</footer>

</body>
</html>