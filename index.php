<?php
// definizione della classe Movie
class Movie{

    // variabili d'istanza
    private string $titolo;
    private int $anno;
    private string $regista;

    // definizione di un costruttore
    public function __construct(int $_anno){
        $this->anno = $_anno;
    }

    // metodi getter e setter di titolo
    public function getTitolo(){
        return $this->titolo;
    }
    public function setTitolo(string $_titolo){
        $this->titolo=$_titolo;
        
    }

    // metodi getter e setter di anno
    public function getAnno(){
        return $this->anno;
    }
    public function setAnno(int $_anno){
        $this->anno=$_anno;
    
    }

    // metodi getter e setter di regista
    public function getRegista(){
        return $this->regista;
    }
    public function setRegista(string $_regista){
        $this->regista=$_regista;
        
    }

}

// funzione calcolo quanti anni fa
function differenza($num){
    if(!is_int($num)){
        // eccezione in caso l'anno non fosse un numero intero
        throw new Exception('deve essere un numero intero per poter calcolare quanti anni sono passati');
    }
    return 2024 - $num  . 'anni fa' . '<br/>';
    
}

// oggetti istanziati

$matrix = new Movie(1999);
// setto titolo e regista
$matrix->setTitolo('Matrix');
$matrix->setRegista('Andy e Larry Wachowski');

$avatar = new Movie(2009);
// setto titolo e regista
$avatar->setTitolo('Avatar');
$avatar->setRegista('James Cameron');



// STAMPO UN FILM
var_dump($matrix);
// gestione eccezione usando il getter
try {
    echo differenza($matrix->getAnno());
} catch (Exception $error) {
    echo $error->getMessage();
}


// STAMPO UN FILM
var_dump($avatar);
// gestione eccezione usando il getter
try {
    // echo differenza($avatar->getAnno());
    echo differenza('ciao');
} catch (Exception $error) {
    echo $error->getMessage();
}


?>

