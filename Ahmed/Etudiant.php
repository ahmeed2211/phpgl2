<?php
class Etudiant {
    public $nom;
    public $notes = [];

    public function __construct($nom, $notes) {
        $this->nom = $nom;
        $this->notes = $notes;
    }
    public function afficher() {
        echo "<h3>{$this->nom}</h3>";
        echo "<div style='display: flex; flex-wrap; gap: 10px;'>";
        foreach ($this->notes as $note) {
            $color='';
            if ($note > 10) {
                $color = 'green';
            } else if($note == 10){
                $color='orange';
            } else if ($note < 10){
                $color = 'red';
            }
            echo "<div style='background-color: $color; padding: 10px; border-radius: 5px;'>$note</div>";
        }}
        public function calculmoy(){
            $somme = 0;
            foreach ($this->notes as $note) {
                $somme += $note;
            }
            return $somme / count($this->notes);
        }
        public function estAdmis(){
            if ($this->calculmoy()>=10){
                return true;
            }
            return false;
        }
        public function afficherResultat(){
            if ($this->estAdmis()){
                echo "<h3 style='color: green;'>Admis</h3>";
            } else {
                echo "<h3 style='color: red;'>Non Admis</h3>";
            }
        }
    }
    ?>
