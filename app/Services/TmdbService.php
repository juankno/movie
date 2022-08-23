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
            ->get("{$this->baseUri}/3/movie/popular")->json()['results'];
    }

    public function getGenresMovies()
    {
        $genres = Http::withToken($this->token)
            ->get("{$this->baseUri}/3/genre/movie/list")->json()['genres'];

        return collect($genres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
    }

    public function getNowPlayingMovies()
    {
        return Http::withToken($this->token)
            ->get("{$this->baseUri}/3/movie/now_playing")->json()['results'];
    }

    public function getDetailsMovie($movie)
    {
        return Http::withToken($this->token)
            ->get("{$this->baseUri}/3/movie/{$movie}?append_to_response=credits,videos,images")
            ->json();
    }

    public function getSearchesMovie(string $search)
    {
        return Http::withToken($this->token)
            ->get("{$this->baseUri}/3/search/movie?query={$search}")
            ->json()['results'];
    }
}
