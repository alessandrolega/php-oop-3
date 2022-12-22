<?php

include_once __DIR__ . '/classi/generi.php';
include_once __DIR__ . '/classi/libro.php';
include_once __DIR__ . '/classi/audiolibro.php';
include_once __DIR__ . '/classi/cd.php';


$generi = [
  'giallo' => new Generi('giallo', 'icon-font-awesome-giallo'),
  'horror' => new Generi('horror', 'icon-font-awesome-horror'),
  'fantasy' => new Generi('fantasy', 'icon-font-awesome-fantasy')
];
var_dump($generi);

$prodotti = [
  new Libro('La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://immagine-copertina.com', 250, 'flessibile'),
  new audioLibro('La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://immagine-copertina.com', 120, 'spotify', 'https://spotify-libri.com'),
  new Cd('Il signore degli anelli', 'JR Tolkien', 25.40, $generi['fantasy'], true, 'https://immagine-copertina.com', 140, 1954)
];

var_dump($prodotti);

foreach ($prodotti as $elem) {
  echo get_class($elem);
  echo "<br>";
}
