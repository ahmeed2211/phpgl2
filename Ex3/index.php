<?php
//found in stackoverflow
error_reporting(E_ALL);
ini_set('display_errors', 1);


require_once 'Pokemon.php';
require_once 'PokemonPlante.php';
require_once 'AttackPokemon.php';
$attacks=[
    new AttackPokemon(10,100,2,20),
    new AttackPokemon(30,80,4,20),
];

$pokemons = [
    new Pokemon("Pikachu", "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/025.png", 200, $attacks[1]),
    new Pokemon("Charizard", "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/006.png", 200, $attacks[0]),
    new PokemonPlante ("Bulbassauro", "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/001.png", 200, $attacks[0])
];
$round = 1;
$maxRounds = 100;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon Battle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="p-4">
<p class="alert alert-primary" role="alert">Les combattants</p>
<?php while ($pokemons[0]->getHp() > 0 && $pokemons[1]->getHp() > 0 && $round <= $maxRounds) : ?>
<div class="row">
    <?php foreach ($pokemons as $pokemon) : ?>
    <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
        <div class="card-header">
            <?php echo $pokemon->getName(); ?>
            <img src=<?= $pokemon->getUrl(); ?> class="card-img-top" alt="pokemon">
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Points: <?= $pokemon->getHp() ?> </li>
            <li class="list-group-item">Min Attack Points: <?= $pokemon->getAttackPokemon()->attackMinimal ?></li>
            <li class="list-group-item">Max Attack Points: <?= $pokemon->getAttackPokemon()->attackMaximal ?></li>
            <li class="list-group-item">special Attack: <?= $pokemon->getAttackPokemon()->specialAttack ?></li>
            <li class="list-group-item">Probability Special Attack: <?= $pokemon->getAttackPokemon()->probabilitySpecialAttack ?></li>
        </ul>
    </div>
    </div>
    <?php endforeach; ?>
    <div class="alert alert-danger" role="alert">
        Round <?php echo $round; ?>
        <div class="alert alert-light" role="alert">
            <div class="row">
                <div class="col-sm-6">
                    <?php echo $pokemons[0]->attack($pokemons[1]); ?>
                </div>
                <div class="col-sm-6">
                    <?php echo $pokemons[1]->attack($pokemons[0]); ?>
                </div>
            </div>
        </div>
        <?php $round++; ?>
    </div>
</div>
<?php endwhile; ?>







<div class="row">
    <?php foreach ($pokemons as $pokemon) : ?>
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-header">
                    <?php echo $pokemon->getName(); ?>
                    <img src=<?= $pokemon->getUrl(); ?> class="card-img-top" alt="pokemon">
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Points: <?= $pokemon->getHp() ?> </li>
                    <li class="list-group-item">Min Attack Points: <?= $pokemon->getAttackPokemon()->attackMinimal ?></li>
                    <li class="list-group-item">Max Attack Points: <?= $pokemon->getAttackPokemon()->attackMaximal ?></li>
                    <li class="list-group-item">special Attack: <?= $pokemon->getAttackPokemon()->specialAttack ?></li>
                    <li class="list-group-item">Probability Special Attack: <?= $pokemon->getAttackPokemon()->probabilitySpecialAttack ?></li>
                </ul>
            </div>
        </div>
    <?php endforeach; ?>
    <div class="alert alert-success" role="alert">
    <?php
        if ($pokemons[0]->getHp() > $pokemons[1]->getHp()) {
            echo "Le vainqueur est : ";
        ?>
    <img src=<?= $pokemons[0]->getUrl(); ?>  alt="pokemon">
    <?php
        } else {
            echo "Le vainqueur est : ";
        ?>
    <img src=<?= $pokemons[1]->getUrl(); ?>  alt="pokemon">
    <?php
        }
    ?>
    </div>

</div>



</body>

</html>
