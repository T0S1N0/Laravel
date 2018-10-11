<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    /*public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }*/

    //Hacemos una pruba en los tests de Laravel, con ello la anotacion @test y el prefijo test_ que se encargara de que Laravel los trate como tales.

    /**@test*/
    function test_it_loads_the_users_list_page() 
	{
	  $this->get('/usuarios')
	    ->assertStatus(200)
	    ->assertSee('Usuarios');
	}
}
