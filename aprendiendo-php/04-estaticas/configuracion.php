<?php 
class ConfiguracionStatic{
    public static $color;
    public static $newsletter;
    public static $entorno;
    //el metodo estatico se utiliza para no tener que instanciar una clase para acceder rapidamente a sus propiedades
    //self:: es equivalente a un this cuando la propiedad es estatica

    public function getColor(){
        return self::$color;
    }

    public function getNewsletter(){
        return self::$newsletter;
    }

    public function getEntorno(){
        return self::$entorno;
    }

    public function setColor($color){
        self::$color = $color;
    }

    public function setNewsletter($newsletter){
        self::$newsletter = $newsletter;
    }

    public function setEntorno($entorno){
        self::$entorno = $entorno;
    }
}

?>