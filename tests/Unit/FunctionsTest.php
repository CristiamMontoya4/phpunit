<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
//no se importa helpers/email/validate
//si no que se utiliza la función de app/functions.php la cual se carga automaticamente
//al estar cargada en composer.json

class FunctionsTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function testEmail()
    {
        //Aquí evaluamos con la función validate_email
        //esta se creo en la raiz (app) en functions.php, donde se recurrira debido a que no existe en esta clase
        $result = validate_email('test@example.com');
        $this->assertTrue($result);

        $result = validate_email('test@@example.com');
        $this->assertFalse($result);
    }
}
