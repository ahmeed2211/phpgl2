<?php
require_once 'Pokemon.php';
class PokemonFeu extends Pokemon{
    public function attack(Pokemon &$p)
    {
        $atk = mt_rand($this->attackPokemon->attackMinimal, $this->attackPokemon->attackMaximal);
        $special = mt_rand(1, 100) <= $this->attackPokemon->probabilitySpecialAttack;
        if ($special) {
            $atk *= $this->attackPokemon->specialAttack;
        }
        if ($p instanceof PokemonPlante) {
            $atk*=2;
        }
        elseif ($p instanceof PokemonEau || $p instanceof PokemonFeu) {
            $atk*=0.5;
        }
        $p->setHp($p->getHp() - $atk);
        return $atk;
    }
}