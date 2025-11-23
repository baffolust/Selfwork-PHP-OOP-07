<!-- Classi dei potenziamenti da busto -->
<?php

abstract class shieldWeapon{
    public $armourType;
    
    public function __construct($_armour){
        $this->armourType = $_armour;
    }
    
    public abstract function active();
}

class Scudo extends shieldWeapon{
    public function active(){
        echo "Scudo in $this->armourType \n";
    }
}

class IntercettaAttacchi extends shieldWeapon{
    public function active(){
        echo "Intercetta gli attacchi nemici \n";
    }
}

class ExtraBoost extends shieldWeapon{
    public function active(){
        echo "Extra spinta per volo \n";
    }
}
