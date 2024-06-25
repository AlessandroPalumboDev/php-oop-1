<?php
require_once __DIR__. '/Actor.php';



class Movie{

// variabili d'istanza
private string $titolo;
private int $anno;
private string $regista;
private array $genere = [];
private array $attori = [];

// definizione di un costruttore
public function __construct(string $_titolo, array $_attori){
    $this->titolo = $_titolo;
    $this->attori = $_attori;
}

// metodi getter e setter di titolo
public function getTitolo():string{
    return $this->titolo;
}
public function setTitolo(string $_titolo):void{
    $this->titolo=$_titolo;
    
}

// metodi getter e setter di anno
public function getAnno():int{
    return $this->anno;
}
public function setAnno(int $_anno):void{
    if(!is_int($_anno)){
        // eccezione in caso l'anno non fosse un numero intero
        throw new Exception("L' anno deve essere un numero intero");
    }
    $this->anno=$_anno;
}

// metodi getter e setter di regista
public function getRegista():string {
    return $this->regista;
}
public function setRegista(string $_regista):void{
    $this->regista=$_regista;
    
}
// metodi getter e setter di genere
public function getGenere(): array{
    return $this->genere;
}
public function setgenere(array $_genere):void{
    $this->genere=$_genere;
    
}

// metodi getter e setter di attori
public function getAttori(): array{
    return $this->attori;
}
public function setattori(array $_attori):void{
    $this->attori=$_attori;
    
}



}
?>