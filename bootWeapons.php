<!-- Classi dei potenziamenti per le gambe -->
<?php

abstract class BootWeapon{
    
    public abstract function active();
}

class Razzo extends BootWeapon{
    public function active(){
        echo "Spicco il volo \n";
    }
}

class Aggancio extends BootWeapon{
    public function active(){
        echo "Aggancio a parete \n";
    }
}


