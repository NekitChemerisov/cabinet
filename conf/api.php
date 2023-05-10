<?php
class API{
    protected $URL;
    protected $cityId;
    protected $apiKey;

    public function __construct($apiKey, $cityId) {
        $this->apiKey = $apiKey;
        $this->cityId = $cityId;
    }

    public function getWeather(){
        $url = "http://api.openweathermap.org/data/2.5/weather?id={$this->cityId}&lang=ru&units=metric&APPID={$this->apiKey}";
        $info = file_get_contents($url);
        return json_decode($info, true);
    }
}
