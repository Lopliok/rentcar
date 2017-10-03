<?php


require('Db.php');
Db::connect('wm140.wedos.net', 'd153168_data', 'w153168_data', 'HH3WgjUN');

if ($_POST){



        Db::query('
                INSERT INTO rezervace (typ_auta, spz, zprava, pujceno_od)
                VALUES (?, ?, ?, ?)
        ', $_POST['typeofcar'], $_POST['spz'], $_POST['notice'], $_POST['datum']);

        echo "Rezervace odeslána.";

}











/*

if ($_GET) {
  echo "Výpis dat";
  echo "<br />";
  echo "<br />";
  echo "<h3>Typ auta:</h3> " . $_GET[typeofcar] . " " . gettype($_GET[typeofcar]);
  echo "<br />";
  echo "<h3>SPZ vozidla:</h3> " . $_GET[spz] . " " . gettype($_GET[spz]);
  echo "<br />";
  echo "<h3>Poznámka:</h3> " . nl2br($_GET[notice]) . " " . gettype($_GET[notice]);
  echo "<br />";
  echo "<h3>Poznámka:</h3> " . $_GET[datum] . " " . gettype($_GET[datum]);
  echo "<br />";
  echo "<h3>Poznámka:</h3> " . $_GET[barva] . " " . gettype($_GET[barva]);





}

*/






?>
