<!-- Classi dei potenziamenti da busto -->
<?php

abstract class ShieldWeapon{
    protected $armourType;
    
    public function __construct($_armour){
        $this->armourType = $_armour;
    }
    
    public abstract function active();
}

class Scudo extends ShieldWeapon{
    public function active(){
        echo "Scudo in $this->armourType \n";
    }
}

class IntercettaAttacchi extends ShieldWeapon{
    public function active(){
        echo "Intercetta gli attacchi nemici \n";
    }
}

class ExtraBoost extends ShieldWeapon{
    public function active(){
        echo "Extra spinta per volo \n";
    }
}
