<?php

require_once __DIR__ . '/Model/Movie.php';

$collateralBeauty = new Movie('Collaterl Beauty', 2012, '"Collateral Beauty" è un film drammatico che racconta la storia di Howard, un dirigente pubblicitario che affronta una profonda crisi dopo la morte improvvisa della figlia.', ['Drammatic', 'Sentimental', 'Romantic', 'Tragic']);

$theShawshankRedemption = new Movie('The Shawshank Redemption', 1994, 'Andy Dufresne, un banchiere condannato per omicidio, trascorre decenni nella prigione di Shawshank mentre cerca di dimostrare la sua innocenza e mantiene la speranza attraverso un amicizia improbabile con un altro detenuto.', ['Drammatic', 'Carcerario', 'Intrigante', 'Inspirazionale']);

$inception = new Movie('Inception', 2010, 'In un mondo in cui è possibile entrare nei sogni degli altri, un esperto di furto di informazioni è incaricato di impiantare una nuova idea nella mente di un CEO rivale.', ['Azione', 'Fantascienza', 'Thriller', 'Complesso']);

$forrestGump = new Movie('Forrest Gump', 1994, 'La vita straordinaria di Forrest Gump, un uomo con un QI basso ma un cuore d oro, che si trova coinvolto in molti degli eventi più significativi della storia americana.', ['Commedia', 'Drammatic', 'Romantic', 'Inspirazionale']);


var_dump($collateralBeauty);
