<?php
// definizione della classe Movie
class Movie{

    // variabili d'istanza
    private string $titolo;
    private int $anno;
    private string $regista;

    // definizione di un costruttore
    // public function __construct(int $_anno, string $_titolo){
    //     $this->anno = $_anno;
    //     $this->titolo = $_titolo;
    // }

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

// oggetti istanziati

$matrix = new Movie();
// setto titolo, anno e regista
$matrix->setTitolo('Matrix');
$matrix->setAnno('1999');
$matrix->setRegista('Andy e Larry Wachowski');

$avatar = new Movie();
// setto titolo, anno e regista
$avatar->setTitolo('Avatar');
$avatar->setAnno('2009');
$avatar->setRegista('James Cameron');


var_dump($matrix);
var_dump($avatar);



?>

