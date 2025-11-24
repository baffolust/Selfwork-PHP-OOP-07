<!-- Classi delle armi da braccio -->
<?php

abstract class ArmWeapon{
    protected $ammo;
    
    public function __construct($_ammo){
        $this->ammo = $_ammo;
    }
    
    public abstract function attack();
}

class Cannone extends ArmWeapon{
    public function attack(){
        echo "Spara $this->ammo a potenza inaudita \n";
    }
}

class Catapulta extends ArmWeapon{
    public function attack(){
        echo "Lancia $this->ammo a distanza siderale \n";
    }
}

class Mitra extends ArmWeapon{
    public function attack(){
        echo "Raffica di $this->ammo \n";
    }
}

class Generatore extends ArmWeapon{
    public function attack(){
        echo "Genera migliaia di $this->ammo \n";
    }
}