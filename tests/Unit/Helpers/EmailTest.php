<?php

namespace Tests\Unit\Helpers;

use PHPUnit\Framework\TestCase;
use App\Helpers\Email; // Asegúrate de importar la clase Email

class EmailTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function testEmail()
    {
        //se llama a la función validate de email
        $result = Email::validate('test@example.com');
        //con assert se espera un retorno true, para aprobar la prueba
        $this->assertTrue($result);

        //Esta prueba , será aprobada ya que un correo con arroba doble es falso y eso se espera
        $result = Email::validate('test@@example.com');
        $this->assertFalse($result);
    }
}