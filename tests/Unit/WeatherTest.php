<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;


class WeatherTest extends TestCase
{
    use DatabaseMigrations;

    protected $city;

    public function setUp()
    {
        parent::setUp();

        $this->city = create('App\Search');
    }
}
