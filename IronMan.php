<!-- Classe IronMan -->

<?php

require "./armWeapons.php";
require "./bootWeapons.php";
require "./shieldWeapons.php";

class IronMan{

    protected $rightArm;
    protected $leftArm;
    protected $shield;
    protected $rightBoot;
    protected $leftBoot;
    public static $counterIronMen = 0;


    public function __construct(ArmWeapon $_rightArm, ArmWeapon $_leftArm, ShieldWeapon $_shield, BootWeapon $_rightBoot, BootWeapon $_leftBoot){
        
        $this->rightArm = $_rightArm;
        $this->leftArm = $_leftArm;
        $this->shield = $_shield;
        $this->rightBoot = $_rightBoot;
        $this->leftBoot = $_leftBoot;
        self::$counterIronMen++;
    }

    public function rightArmAttack(){
        $this->rightArm->attack();
    }

    public function leftArmAttack(){
        $this->leftArm->attack();
    }

    public function upperAttack(){
        echo "Braccio Sinistro: ";
        $this->leftArm->attack();
        echo "\n";
        echo "Braccio Destro: ";
        $this->rightArm->attack();
    }

    public function shieldActive(){
        $this->shield->active();
    }

    public function rightBootActive(){
        $this->rightBoot->active();
    }

    public function leftBootActive(){
        $this->leftBoot->active();
    }

    public function bootsActive(){
        echo "Gamba Sinitra: ";
        $this->leftBoot->active();
        echo "\n";
        echo "Gamba Destra: ";
        $this->rightBoot->active();
    }

    
}