<?php


namespace App;

use stdClass;


class Report

{
    private  stdClass $report;

    public function __construct($city)
    {
            $apiKey = "64694d11a8271d21e955af6aa1137a8b";
//            $city = "Riga";
            $apiUrl = "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric";

            return $this->report = json_decode(file_get_contents($apiUrl, true));
    }

    public function getName(): string
    {
        return $this->report->name;
    }

    public function getTemp(): float
    {
        return $this->report->main->temp;
    }

    public function getFeel(): float
    {
        return $this->report->main->feels_like;
    }

    public function getWind(): float
    {
        return $this->report->wind->speed;
    }
}

