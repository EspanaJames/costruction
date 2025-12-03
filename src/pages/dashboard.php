<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: /login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="30" />
    <meta name="author" content="James España & Zoe Gerard Brillantes" />
    <title>Costruction</title>
    <link rel="stylesheet" href="../../assets/styles/dashboardStyles.css" />
    <link rel="stylesheet" href="../../assets/styles/homeButtonStyles.css" />
    <link
      rel="stylesheet"
      href="../../assets/styles/statisticsButtonStyles.css"
    />
    <link
      rel="stylesheet"
      href="../../assets/styles/materialsButtonStyles.css"
    />
    <link
      rel="stylesheet"
      href="../../assets/styles/settingsButtonStyles.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  </head>
  <body>
    <section class="titleSection">
      <nav class="navBar">
        <div class="titleDiv">
          <img src="../../assets/images/COSTRUCTION.png" alt="" />
          <h1>Costruction</h1>
        </div>
        <div class="buttonDiv">
          <button id="homeButton" class="navButtons" data-page="Home"><i class="fas fa-home"></i></button>
          <button id="statisticsButton" class="navButtons" data-page="statistics"><i class="fa-solid fa-cart-shopping"></i></button>
          <button id="materialButton" class="navButtons" data-page="Material"><i class="fas fa-user"></i></button>
          <button id="settingsButton" class="navButtons" data-page="Setting"><i class="fas fa-cog"></i></button>
        </div>
      </nav>
    </section>
    <section class="contentSection"></section>
    <script type="module" src="../components/nav/main.js"></script>
  </body>
</html>
