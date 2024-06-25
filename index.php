<?php
require_once __DIR__. '/models/Movie.php';
// definizione della classe Movie

// logica di creazione dati applicativo
try {
    // oggetti istanziati
    $movie1 = new Movie('Matrix');
    $movie2 = new Movie('Avatar');


    // setto registi
    $movie1->setRegista('Andy e Larry Wachowski');
    $movie2->setRegista('James Cameron');

    // setto anni
    $movie1->setAnno(1999);
    $movie2->setAnno(2009);

    // setto generi
    $movie1->setGenere(['fantascienza', 'azione']);
    $movie2->setGenere(['fantascienza', 'azione', 'avventura', 'fantastico']);

    // array movies
    $movies_list = [$movie1, $movie2];


} catch (Exception $error) {
    echo $error->getMessage();
}

?>


<!--  rappresentazione in pagina -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1>Movies</h1>

    <ul>
        <?php foreach($movies_list as $movie): ?>
        <li>
            <div>
                <h3>
                    <?php echo $movie->getTitolo(); ?>
                </h3>
                <p>
                    Anno di uscita: <?php echo $movie->getAnno(); ?>
                </p>
                <p>
                    Regista: <?php echo $movie->getRegista(); ?>
                </p>
                
                <span>
                    Generi:
                    <ul>
                        <?php foreach($movie->getGenere() as $genere): ?>
                            <li>
                                <?php echo $genere; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul> 
                </span>

            </div>
        </li>

        <?php endforeach; ?>
    </ul>
            
</body>
</html>