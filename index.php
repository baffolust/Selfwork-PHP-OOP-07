<?php
 
require './aggancioParete.php';
require './extraBoost.php';
require './interceptor.php';
require './laserGun.php';
require './lightcannon.php';
require './razzoPropulsore.php';
require './sarcasm.php';
require './scudo.php';

class IronMan {

    public $attack;
    public $defense;
    public $boot;
    public static $IronMenCounter = 0;

    public function __construct(ArmWeapon $attacco, ShieldWeapon $difesa, BootUtility $stivali)
    {
        $this->attack = $attacco;
        $this->defense = $difesa;
        $this->boot = $stivali;
        self::$IronMenCounter++;
    }

    public function attack(){
        $this->attack->attack();
    }

    public function defense(){
        $this->defense->defense();
    }

    public function utility(){
        $this->boot->active();
    }

}

$ironMan_1 = new IronMan(new LaserGun, new Scudo, new RazzoPropulsore);
$ironMan_1->attack();
$ironMan_1->defense();
$ironMan_1->utility();

$ironMan_2 = new IronMan(new Cannone, new Scudo, new Aggancio);
$ironMan_3 = new IronMan(new LaserGun, new IntercettaAttacchi, new RazzoPropulsore);
$ironMan_4 = new IronMan(new Sarcasmo, new Scudo, new RazzoPropulsore);

echo "Sono stati creati " . IronMan::$IronMenCounter ." Iron Men";

$ironMan_4->attack();