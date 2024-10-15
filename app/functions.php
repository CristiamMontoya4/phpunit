<?php

//validamos que no exista esta función
if ( ! function_exists('validate_email') ) {
    //creamos la función validate_email
    function validate_email($email)
    {
        //hacemos uso de ese metodo yas creado
        return App\Helpers\Email::validate($email);
    }
}

//Pero para que exista, se debe declarar en composer.json, sección autoload, se crea files
//se agrega la ruta, este se carga automaticamente al ejecutarse