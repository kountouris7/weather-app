<?php

use App\City;
use Illuminate\Database\Migrations\Migration;

class MigrateCities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $data = [
            [
                "id"      => 1271231,
                "name"    => "Ghūra",
                "country" => "IN",
            ],
            [
                "id"      => 690856,
                "name"    => "Tyuzler",
                "country" => "UA",
            ],

            [
            "id" => 2643743,
            "name" => "London",
            "country" => "GB",
            ],

            [
                "id" => 6455259,
                "name" => "Paris",
                "country" => "FR",
            ]
            ];

        foreach ($data as $item) {
            City::create($item);
        }
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
