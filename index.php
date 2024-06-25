<?php
// definizione della classe Movie
class Movie{

    // variabili d'istanza
    private string $titolo;
    private int $anno;
    private string $regista;
    private string $genere;

    // definizione di un costruttore
    public function __construct(string $_titolo){
        $this->titolo = $_titolo;
    }

    // metodi getter e setter di titolo
    public function getTitolo(){
        return $this->titolo;
    }
    public function setTitolo(string $_titolo):void{
        $this->titolo=$_titolo;
        
    }

    // metodi getter e setter di anno
    public function getAnno(){
        return $this->anno;
    }
    public function setAnno(int $_anno):void{
        if(!is_int($_anno)){
            // eccezione in caso l'anno non fosse un numero intero
            throw new Exception("L' anno deve essere un numero intero per poter calcolare quanti anni sono passati");
        }
        $this->anno=$_anno;
    
    }

    // metodi getter e setter di regista
    public function getRegista(){
        return $this->regista;
    }
    public function setRegista(string $_regista):void{
        $this->regista=$_regista;
        
    }
    // metodi getter e setter di genere
    public function getGenere(){
        return $this->genere;
    }
    public function setgenere(string $_genere):void{
        $this->genere=$_genere;
        
    }

}


    



try {
    // oggetti istanziati
    $movie1 = new Movie('Matrix');
    $movie2 = new Movie('Avatar');


    // setto registi
    $movie1->setRegista('Andy e Larry Wachowski');
    $movie2->setRegista('James Cameron');

    // stetto anni
    $movie1->setAnno(1999);
    $movie2->setAnno(2009);


    $movies_list = [$movie1, $movie2];

    // var_dump($movie1);
    // var_dump($movie2);
} catch (Exception $error) {
    echo $error->getMessage();
}








?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1>Film</h1>

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
                    Genere: <?php echo $movie->getAnno(); ?>
                </p>
                <p>
                    Regista: <?php echo $movie->getAnno(); ?>
                </p>

            </div>
        </li>

        <?php endforeach; ?>
    </ul>
        

    
</body>
</html>