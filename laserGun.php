<?php

require "./attackAbstract.php";

class LaserGun extends ArmWeapon{
    public function attack(){
        echo "Raffica di laser\n";
    }
}