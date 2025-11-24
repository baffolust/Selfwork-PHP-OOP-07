<?php

require './defenseAbstract.php';

class IntercettaAttacchi extends ShieldWeapon{
    public function defense(){
        echo "Intercetta gli attacchi nemici \n";
    }
}