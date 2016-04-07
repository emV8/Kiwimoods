<!DOCTYPE html>

<?php
include 'Htm5Playlist/PlayList.php';
?>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css.css" />
  <script type="text/javascript" language="Javascript" src="Htm5Playlist/traitement/fonction.js"></script>
</head>

<body>
        
        <style>
            .player_cls{
                margin: auto;
                border-radius: 15px;
                background: rgb(90%,90%,90%);
                border: outset 2px gray;
                box-shadow: 3px 3px 10px black;
                width: 25%!important;
            }
        </style>

      <?php
        /* On déclare l'objet Playlist($path) avec comme paramètre le chemin
         * vers la racine du dossier Htm5Playlist/, prenez garde à renseigner le chemin 
          exacte */
          
        function genplaylist()
        {
            $playList = new PlayList("Htm5Playlist/");
            //*******************************
            // version 2: par des Array!
            //*******************************
            //on renseigne deux Arrays, un pour les chemins vers les musiques à lire, 
            //un deuxième pour les titres.
            $chemin[0] = "http://dariumis.fr/lesMp3/1412862486_4166.mp3";
            $titre[0] = "titre 1";
            $chemin[1] = "http://dariumis.fr/lesMp3/1411336191_6685.mp3";
            $titre[1] = "titre 2";
            //on place simplement la playliste généré par les Arrays grâce à 
            //la fonction getArray($id, $chemin, $titre).
            // Les paramètres de cette fonction sont dans l'ordre:
            //---- l'id de votre playlist
            //---- l'Array contenant les chemins
            //---- l'Array contenant les titres
            echo $playList->getArray("depuisArray", $chemin, $titre);
        }       
        ?>
</body>
</html>