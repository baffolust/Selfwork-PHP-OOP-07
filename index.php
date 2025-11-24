<!-- Creazione Esercito Random di Iron Men -->

<?php

require "./armWeapons.php";
require "./bootWeapons.php";
require "./shieldWeapons.php";
require "./IronMan.php";
require "./Ammo_Armour.php";

//* funzione di appoggio per estrarre un elemento casuale da un array
function pickRandom($arr){
    return $arr[array_rand($arr)];
}

$ironMen_army = [];

$ironMen_number = rand(3, 15);

for($i=0; $i<$ironMen_number; $i++){
    
    //Scelta munizioni e armatura casuali
    $randomAmmo_1 = pickRandom($ammoType);
    $randomAmmo_2 = pickRandom($ammoType);
    $randomArmour = pickRandom($armourType);
    
    //Armi da Braccio sinistro
    $leftArmWeapons = [
        new Cannone($randomAmmo_1),
        new Catapulta($randomAmmo_1),
        new Mitra($randomAmmo_1),
        new Generatore($randomAmmo_1)
    ];
    
    //Armi da Braccio sinistro
    $rightArmWeapons = [
        new Cannone($randomAmmo_2),
        new Catapulta($randomAmmo_2),
        new Mitra($randomAmmo_2),
        new Generatore($randomAmmo_2)
    ];
    
    //Armi da Braccio sinistro
    $shieldWeapons = [
        new Scudo($randomArmour),
        new IntercettaAttacchi($randomArmour),
        new ExtraBoost($randomArmour)
    ];

    //Gamba sinistra
    $leftBoots = [
        new Razzo(),
        new Aggancio()
    ];

    //Gamba destra
    $rightBoots = [
        new Razzo(),
        new Aggancio()
    ];

    $ironMen_army [] = new IronMan(
        pickRandom($leftArmWeapons), pickRandom($rightArmWeapons), pickRandom($shieldWeapons), pickRandom($rightBoots), pickRandom($leftBoots)
    );
}

echo "Creati " . IronMan::$counterIronMen . " IronMan. \n";
foreach($ironMen_army as $index => $ironMan){

    echo "Iron Man numero " . ($index + 1) . " \n";
    $ironMan->upperAttack();

    echo "Scudo: "; 
    $ironMan->shieldActive();
    echo "\n";

    $ironMan->bootsActive();
    
}