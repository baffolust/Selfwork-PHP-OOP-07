<!-- Classi delle armi da braccio -->
<?php

abstract class armWeapon{
    public $ammo;
    
    public function __construct($_ammo){
        $this->ammo = $_ammo;
    }
    
    public abstract function attack();
}

class Cannone extends armWeapon{
    public function attack(){
        echo "Spara $this->ammo a potenza indautia \n";
    }
}

class Catapulta extends armWeapon{
    public function attack(){
        echo "Lancia $this->ammo a distanza siderale \n";
    }
}

class Mitra extends armWeapon{
    public function attack(){
        echo "Raffica di $this->ammo \n";
    }
}

class Generatore extends armWeapon{
    public function attack(){
        echo "Genera migliaia di $this->ammo \n";
    }
}