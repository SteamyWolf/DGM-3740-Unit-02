<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8" />
  <title>Cabot Cruises: <?php echo($pTitle) ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" media="screen" href="scss/styles.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
  <link href="slick/slick.css" rel="stylesheet" />
  <link href="slick/slick-theme.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <script defer src="./js/active.js"></script>
</head>
<body>
  <header>
    <div id="logo">
      <img src="images/logo.png" srcset="images/logo1x.png 1x, images/logo2x.png 2x, images/logo3x.png 3x" alt="Boat Logo"/>
    </div>
    <div>
      <p><a href="tel:1-800-234-5678">1-800-555-7654</a></p>
    </div>
  </header>

  <nav>
    <div style="max-width: 1200px; margin: auto; height: 45px;">
      <button id="hamburgerBtn"></button>
      <ul id="primaryNav" class="closed">
        <li><a href="./index.php">HOME</a></li>
        <li>
          <a href="./_cruises.php">CRUISES</a>
        </li>
        <li>
          <a href="#">AGENTS</a>
          <ul>
            <li><a href="./_agent1.php">Agent 1</a></li>
            <li><a href="./_agent2.php">Agent 2</a></li>
          </ul>
        </li>
        <li><a href="_bookings.php">BOOK</a></li>
      </ul>
      <ul id="secondaryNav">
        <li id="searchBar">
          <form>
            <input type="search" placeholder="Search" name="search" />
            <button type="button" class="submit">
              <i class="fa fa-search"></i>
            </button>
          </form>
        </li>
      </ul>
    </div>
  </nav>