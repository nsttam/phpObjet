<?php
abstract class Moto extends Vehicule implements MotoInterface {

    private $topCase;
    private $nbPlaces;
    private $isJaponnaise;


    public function __construct($marque, $model, $prix, $topCase, $isJaponnaise)
    {
        parent::__construct($marque, $model, $prix);
        $this->topCase = $topCase;
        $this->isJaponnaise = $isJaponnaise;
        try {
            new MotoException($this);
        } catch (Exception $e) {
            var_dump('Erreur : '. $e->getMessage(). ' détécté ligne'. $e->getLine().
                ' Dans le fichier '.$e->getFile() .' code d\'erreur: '.$e->getCode());
            die();
        }
    }

    public function __set($name, $value){ //voir index
      echo("l'attribute n'existe pas ou est prive");
    }

    public function __get($name){ //voir index
      echo("impossible d'afficher la valeur");
    }
    /**
     * @return mixed
     */
    public function getTopCase()
    {
        return $this->topCase;
    }

    /**
     * @param mixed $topCase
     */
    public function setTopCase($topCase)
    {
        $this->topCase = $topCase;
    }

    /**
     * @return mixed
     */
    public function getNbPlaces()
    {
        return $this->nbPlaces;
    }

    /**
     * @param mixed $nbPlaces
     */
    public function setNbPlaces($nbPlaces)
    {
        $this->nbPlaces = $nbPlaces;
    }

    /**
     * @return mixed
     */
    public function getIsJaponnaise()
    {
        return $this->isJaponnaise;
    }

    /**
     * @param mixed $isJaponnaise
     */
    public function setIsJaponnaise($isJaponnaise)
    {
        $this->isJaponnaise = $isJaponnaise;
    }

}
?>
