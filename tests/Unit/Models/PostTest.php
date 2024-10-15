<?php

namespace Tests\Unit\Models;

//se llama el modelo a utilizar
use App\Models\Post;
use PHPUnit\Framework\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic unit test example.
     */

     //probamos que se ingrese el nombre en minuscula
    public function test_set_name_in_lowercase()
    {
        $post = new Post;
        $post->name = 'Proyecto en PHP';

        $this->assertEquals('proyecto en php', $post->name); //parametro 1, lo que espero, en el segundo lo que se recibe
    }

    public function test_get_slug()
    {
        $post = new Post;
        $post->name = 'Proyecto en PHP';

        $this->assertEquals('proyecto-en-php', $post->slug); //parametro 1, lo que espero, en el segundo lo que se recibe
    }

    public function test_get_href()
    {
        $post = new Post;
        $post->name = 'Proyecto en PHP';

        $this -> assertEquals('blog/proyecto-en-php', $post->href());
    }

}
