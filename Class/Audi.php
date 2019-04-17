<?php
class Audi extends Voiture implements AudiInterface {
    private $isQuatro;

    public function __construct( $model, $prix, $nbPortes, $clim, $siegeChauffant, $isQuatro)
    {
        parent::__construct('Audi', $model, $prix, $nbPortes, $clim, $siegeChauffant);
        $this->isQuatro = $isQuatro;
    }


    public function __set($name, $value){ //j'assign les valeurs dans l'index
      var_dump($name);
      var_dump($value);
      echo("l'attribute n'existe pas ou est prive");
    }

    /**
     * @return mixed
     */
    public function getisQuatro()
    {
        return $this->isQuatro;
    }

    /**
     * @param mixed $isQuatro
     */
    public function setIsQuatro($isQuatro)
    {
        $this->isQuatro = $isQuatro;
    }
}
?>
