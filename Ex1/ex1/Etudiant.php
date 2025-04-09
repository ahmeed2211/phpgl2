<?php


class Etudiant
{
    public function __construct(
        protected string $nom = '',
        protected array  $notes = []
    )
    {
    }

    public function afficheNotes()
    {
        foreach ($this->notes as $note) {
            echo $note . "<br>";
        }
    }

    public function moyenne()
    {
        $somme = 0;
        foreach ($this->notes as $note) {
            $somme += $note;
        }
        return $somme / count($this->notes);
    }

    public function admissible()
    {
        $test = $this->moyenne() >= 10;
        if ($test) {
            echo "Admis";
        } else {
            echo "Non admis";
        }
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getNotes()
    {
        return $this->notes;
    }
}

