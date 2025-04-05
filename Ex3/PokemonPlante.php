<?php
require_once 'Pokemon.php';
class PokemonPlante extends Pokemon{
    public function attack(Pokemon &$p)
    {
        $atk = mt_rand($this->attackPokemon->attackMinimal, $this->attackPokemon->attackMaximal);
        $special = mt_rand(1, 100) <= $this->attackPokemon->probabilitySpecialAttack;
        if ($special) {
            $atk *= $this->attackPokemon->specialAttack;
        }
        if ($p instanceof PokemonEau) {
            $atk*=2;
        }
        elseif ($p instanceof PokemonFeu || $p instanceof PokemonPlante) {
            $atk*=0.5;
        }
        $p->setHp($p->getHp() - $atk);
        return $atk;
    }
}