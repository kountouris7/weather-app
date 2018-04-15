<?php

namespace App\Http\Controllers;
use App\Search;
use Illuminate\Support\Facades\Validator;
use App\City;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    /**
     * WeatherController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function search(Request $request) //input from search form - pass to api() and acts as store method also //
    {
        $validator = $this->validator($request);

        $city = request( 'name' ); //this gets city name and passes it to $this->api() //

             Search::create([
            'user_id' => auth()->id(),
            'name'=>request('name'),
            'country'=>request('country')
        ]);

        if ($validator->fails()) {
            return redirect('show')
                ->withErrors($validator)
                ->withInput();
        }
            list($temp_max, $temp_min, $icon, $today, $cityname, $country) = $this->api($city);

        return view('showWeather',compact('temp_max','temp_min','icon', 'today', 'cityname', 'country'));
    }

    public function showCities() //displays cities saved in the database->cities
    {
        $city=City::get();
        return view('show', compact('city'));
    }

    public function showWeather(City $city)
    {
        list($temp_max, $temp_min, $icon, $today, $cityname, $country) = $this->api($city->name);
        return view('showWeather',compact('temp_max','temp_min','icon', 'today', 'cityname', 'country'));
    }

    protected function api($city): array
    {
        $url      = "http://api.openweathermap.org/data/2.5/weather?q=". $city ."&units=metric&appid=78dfb7931759b24d9254a0cd87a5da83";
        $contents = file_get_contents($url);
        $clima    = json_decode($contents);
        $temp_max = $clima->main->temp_max;
        $temp_min = $clima->main->temp_min;
        $icon     = $clima->weather[0]->icon . ".png";
        $today    = date("F j, Y, g:i a");
        $cityname = $clima->name;
        $country = $clima->sys->country;

        return [$temp_max, $temp_min, $icon, $today, $cityname, $country];
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(Request $request): \Illuminate\Contracts\Validation\Validator
    {
        $validator = Validator::make($request->all(), [

            'name' => 'exists:cities,name'
        ]);

        return $validator;
    }
}