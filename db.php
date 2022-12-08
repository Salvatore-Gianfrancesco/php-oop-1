<?php

include __DIR__ . '/Models/Movie.php';

$movies = [
    new Movie(
        'Le ali della libertà',
        'Il banchiere Andy Dufresne viene arrestato per aver ucciso sua moglie e il suo amante. Dopo un duro adattamento, cerca di migliorare le condizioni del carcere e dare speranza ai suoi compagni.',
        1994,
        ['Tim Robbins', 'Morgan Freeman', 'Bob Gunton'],
        ['Drammatico'],
        'https://www.themoviedb.org/t/p/w220_and_h330_face/9OxcvTJwZDjQTFvY2NxiwnSrQS6.jpg'
    ),
    new Movie(
        'Il padrino',
        'Il patriarca invecchiando di un\'organizzazione criminale trasferisce il controllo del suo impero clandestino al suo figlio riluttante.',
        1972,
        ['Marlon Brando', 'Al Pacino', 'James Caan'],
        ['Poliziesco', 'Drammatico'],
        'https://www.themoviedb.org/t/p/w220_and_h330_face/aQ4yCDBVtCVis7tLNMpUiu1DuLa.jpg'
    ),
    new Movie(
        'Il cavaliere oscuro',
        'Quando una minaccia chiamata Joker emerge dal suo misterioso passato creando scompiglio e caos nella città di Gotham, il Cavaliere Oscuro deve affrontare le più grandi sfide psicologiche e fisiche per combattere l\'ingiustizia.',
        2008,
        ['Christian Bale', 'Heath Ledger', 'Aaron Eckhart'],
        ['Azione', 'Poliziesco', 'Drammatico', 'Thriller'],
        'https://www.themoviedb.org/t/p/w220_and_h330_face/qIhsgno1mjbzUbs4H6DaRjhskAR.jpg'
    ),
    new Movie(
        'La parola ai giurati',
        'Un membro della giuria tenta di impedire un errore giudiziario costringendo i suoi colleghi a riesaminare le prove.',
        1957,
        ['Henry Fonda', 'Lee J. Cobb', 'Martin Balsam'],
        ['Poliziesco', 'Drammatico'],
        'https://www.themoviedb.org/t/p/w220_and_h330_face/6lvkCuYuqpbmK1OPcv5oKleWbgV.jpg'
    ),
    new Movie(
        'Schindler\'s List',
        'Nella Polonia occupata dai tedeschi durante la seconda guerra mondiale, Oskar Schindler si preoccupa per i suoi operai ebrei dopo aver assistito alla loro persecuzione da parte dei tedeschi nazisti.',
        1993,
        ['Liam Neeson', 'Ralph Fiennes', 'Ben Kingsley'],
        ['Biografico', 'Drammatico', 'Storico'],
        'https://www.themoviedb.org/t/p/w220_and_h330_face/m0pV0fmMERzCvPVQbLLrPPLl5q1.jpg'
    ),
    new Movie(
        'Forrest Gump',
        'Le presidenze di Kennedy e Johnson, il Vietnam, Watergate e altre storie si sviluppano con la prospettiva di un uomo dell\'Alabama con un QI di 75.',
        1994,
        ['Tom Hanks', 'Robin Wright', 'Gary Sinise'],
        ['Drammatico', 'Sentimentale'],
        'https://www.themoviedb.org/t/p/w220_and_h330_face/pGZqc9jQ6F8klQZKm37NAAMH70o.jpg'
    ),
    new Movie(
        'Inception',
        'Un ladro che ruba i segreti aziendali attraverso l\'uso della tecnologia di condivisione dei sogni ha il compito inverso di inserire un\'idea nella mente di un direttore generale.',
        2010,
        ['Leonardo DiCaprio', 'Joseph Gordon-Levitt', 'Elliot Page'],
        ['Azione', 'Avventura', 'Fantascienza', 'Thriller'],
        'https://www.themoviedb.org/t/p/w220_and_h330_face/5QHWgqaBxZI1eM5e3YhyKzY5o3z.jpg'
    ),
    new Movie(
        'Matrix',
        'Grazie a misteriosi ribelli, un hacker scopre la vera natura della sua realtà e il suo ruolo nella guerra contro i suoi controllori.',
        1999,
        ['Keanu Reeves', 'Laurence Fishburne', 'Carrie-Anne Moss'],
        ['Azione', 'Fantascienza'],
        'https://www.themoviedb.org/t/p/w220_and_h330_face/5uCQOswAMkOqUZiNzOxvckw59e3.jpg'
    )
];
