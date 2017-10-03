<?php

require('Db.php');
Db::connect('wm140.wedos.net', 'd153168_data', 'w153168_data', 'HH3WgjUN');


//
// $objednavky = Db::queryAll('
//         SELECT *
//         FROM rezervace
// ');
//



?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <meta charset="UTF-8">
  <title>Půjčovna dodávek</title>
</head>

<body>
  <?php include "menu.php" ?>
  <div class="wrapper">
    <?php include "header.php" ?>
    <!-- <div class="navigation">
            navigation
          </div> -->
    <div class="container">
      <div class="block">
      </div>
      <div class="content">
      
        <input type="number" name="number1">
        <input type="number" name="number2">
        <button name="tlac"></button>

      <div id="vypis"></div>
        <script src="script.js"></script>

        <table border="1px">
        <?php /*
                foreach ($objednavky as $objednavka)
                {
                        echo('<tr><td><h2>' . htmlspecialchars($objednavka['id']) . "</td><td>" . htmlspecialchars($objednavka['typ_auta']) . "</td><td>" . htmlspecialchars($objednavka['spz']) . "</td><td>" . htmlspecialchars($objednavka['zprava']) . "</td><td>" . htmlspecialchars($objednavka['pujceno_od']));

                        echo('</td></tr>');
                }       */
        ?>
        </table>
        <!-- <p>
          Main Content Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis commodo sem. Suspendisse potenti. Pellentesque scelerisque est sed magna bibendum, in pulvinar diam malesuada. Nunc a malesuada sapien. Nunc eget nibh tincidunt, viverra
          leo sit amet, imperdiet dui. Nulla consequat ipsum vel vulputate luctus. Suspendisse dictum lacus tortor, a porta diam maximus at. Nam posuere arcu justo, et facilisis mi vulputate eleifend. Main Content Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Suspendisse quis commodo sem. Suspendisse potenti. Pellentesque scelerisque est sed magna bibendum, in pulvinar diam malesuada. Nunc a malesuada sapien. Nunc eget nibh tincidunt, viverra leo sit amet, imperdiet dui. Nulla consequat
          ipsum vel vulputate luctus. Suspendisse dictum lacus tortor, a porta diam maximus at. Nam posuere arcu justo, et facilisis mi vulputate eleifend. Main Content Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis commodo
          sem. Suspendisse potenti. <br /><br />Pellentesque scelerisque est sed magna bibendum, in pulvinar diam malesuada. Nunc a malesuada sapien. Nunc eget nibh tincidunt, viverra leo sit amet, imperdiet dui. Nulla consequat ipsum vel vulputate
          luctus. Suspendisse dictum lacus tortor, a porta diam maximus at. Nam posuere arcu justo, et facilisis mi vulputate eleifend. Main Content Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis commodo sem. Suspendisse potenti.
          Pellentesque scelerisque est sed magna bibendum, in pulvinar diam malesuada. Nunc a malesuada sapien. Nunc eget nibh tincidunt, viverra leo sit amet, imperdiet dui. Nulla consequat ipsum vel vulputate luctus. Suspendisse dictum lacus tortor,
          a porta di
        </p> -->
      </div>
    </div>

    <div class="footer">
      This website is develdoped by Lopliok
    </div>
  </div>
</body>

</html>
