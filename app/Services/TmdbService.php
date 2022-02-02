<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TmdbService
{

    protected $baseUri;

    protected $token;

    protected $key;


    public function __construct()
    {
        $this->baseUri = config('services.tmdb.base_uri');
        $this->key = config('services.tmdb.key');
        $this->token = config('services.tmdb.token');
    }


    public function getPopularMovies()
    {
        return Http::withToken($this->token)
            ->get("{$this->baseUri}/3/movie/popular")->json();
    }
}
