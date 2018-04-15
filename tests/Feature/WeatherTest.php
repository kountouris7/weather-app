<?php

namespace Tests\Feature;

use App\City;
use const Grpc\CHANNEL_IDLE;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;


class WeatherTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
public function guests_may_not_view_or_search_weather()
{
    $this->withExceptionHandling();

    $this->get('/show')
         ->assertRedirect('/login');

    $this->post('/search')
         ->assertRedirect('/login');
}
    /** @test */
    public function an_auth_user_can_view_weather()
    {
        $this->signIn();
        //$this->get('')
    }

}

