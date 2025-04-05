<?php
require_once 'AttackPokemon.php';
class Pokemon
{
    public function __construct(protected string $name,
    protected string $url,
    protected int $hp,
    protected AttackPokemon $attackPokemon){

    }
    public function getName(){
        return $this->name;
    }
    public function getUrl(): string
    {
        return $this->url;
    }
    public function getHp(){
        return $this->hp;
    }
    public function getAttackPokemon(){
        return $this->attackPokemon;
    }
    public function setHp($hp){
        $this->hp = $hp;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setUrl($url){
        $this->url = $url;
    }
    public function setAttackPokemon($attackPokemon){
        $this->attackPokemon=$attackPokemon;
    }

    public function isDead(){
        return $this->hp <= 0;
    }

    public function attack(Pokemon &$p){
        $atk=mt_rand($this->attackPokemon->attackMinimal,$this->attackPokemon->attackMaximal);
        $special=mt_rand(1,100)<=$this->attackPokemon->probabilitySpecialAttack;
        if($special){
            $atk*=$this->attackPokemon->specialAttack;
        }
        $p->setHp($p->getHp()-$atk);
        return $atk;
    }
    public function whoAmI(){
        echo $this->name;
        echo $this->hp;
        echo $this->url;
        echo $this->attackPokemon;
    }
}
