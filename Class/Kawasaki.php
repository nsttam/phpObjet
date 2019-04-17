<?php
class Kawasaki extends Moto implements KawasakiInterface {
    private $isJaponaise;

    public function __construct( $model, $prix, $topCase)
    {
        parent::__construct( "Kawasaki", $model, $prix, $topCase, false);
        $this->isJaponaise = true;
    }
}
?>