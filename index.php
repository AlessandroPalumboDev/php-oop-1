<?php
// definizione della classe Movie
class Movie{

    // variabili d'istanza
    private string $titolo;
    private int $anno;
    private string $regista;

    // definizione di un costruttore
    public function __construct(int $_anno, string $_titolo){
        $this->anno = $_anno;
        $this->titolo = $_titolo;
    }

    // metodo getter e setter di regista
    public function getRegista(){
        return $this->regista;
    }
    public function setRegista(string $_regista){
        $this->regista=$_regista;
        
    }
    
    
}

// oggetti istanziati

$matrix = new Movie(1999, 'Matrix');
// setto regista
$matrix->setRegista('Andy e Larry Wachowski');

$avatar = new Movie(2009, 'Avatar');
// setto regista
$avatar->setRegista('James Cameron');


var_dump($matrix);
var_dump($avatar);



?>