<?php
class Pezzo{
    private $id;
    private $codice;
    private $titolo;

    public function getId(){ return $this -> id; }

    public function getCodice(){ return $this -> codice; }
    public function setCodice($value){ $this -> codice = $value; }

    public function getTitolo(){ return $this -> titolo; }
    public function setTitolo($value){ $this -> titolo = $value; }
}
?>
