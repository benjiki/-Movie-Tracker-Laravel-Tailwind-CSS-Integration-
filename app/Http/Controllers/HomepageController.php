<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HomepageController extends Controller
{
    public function getPopularMovies()
    {
        $client = new Client();
        $sliderMovies = [];
        $discoverMovies = [];
        $seriesMovies = [];
        $animeData = [];
        $mangaData = []; // New variable for manga data

        $api = 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIzZTkzYjI5YzljZTg1YzBmZTNjNDFmNzBkODlmZTcwYSIsInN1YiI6IjY2MTZhZjNkY2I2ZGI1MDE3Y2E5ZTZhYSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.IUeC5YEe4x1_qFgjObYSabkKDBPdmQHORkpEW4uonPM';

        try {
            // Make request for slider movies
            $sliderResponse = $client->request('GET', 'https://api.themoviedb.org/3/movie/popular?language=en-US&page=1', [
                'headers' => [
                    'Authorization' => $api,
                    'accept' => 'application/json',
                ],
            ]);

            $sliderData = $sliderResponse->getBody()->getContents();
            $sliderMovies = json_decode($sliderData, true)['results'];
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        try {
            // Make request for discover movies
            $discoverResponse = $client->request('GET', 'https://api.themoviedb.org/3/discover/movie?include_adult=true&include_video=false&language=en-US&page=1&sort_by=popularity.desc', [
                'headers' => [
                    'Authorization' => $api,
                    'accept' => 'application/json',
                ],
            ]);

            $discoverData = $discoverResponse->getBody()->getContents();
            $discoverMovies = json_decode($discoverData, true)['results'];
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        try {
            // Make request for series
            $seriesResponse = $client->request('GET', 'https://api.themoviedb.org/3/discover/tv?include_adult=true&include_null_first_air_dates=false&language=en-US&page=1&sort_by=popularity.desc', [
                'headers' => [
                    'Authorization' => $api,
                    'accept' => 'application/json',
                ],
            ]);

            $seriesData = $seriesResponse->getBody()->getContents();
            $seriesMovies = json_decode($seriesData, true)['results'];
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        try {
            // Make request for anime data
            $animeResponse = $client->get("https://api-aniwatch.onrender.com/anime/home");
            $animeData = json_decode($animeResponse->getBody(), true);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        try {
            // Make request for manga data
            $mangaResponse = $client->request('GET', 'https://community-manga-eden.p.rapidapi.com/list/0', [
                'headers' => [
                    'X-RapidAPI-Key' => '5d30a114c2msh91b585622c77ed1p1d3865jsnd895d48fea04',
                    'X-RapidAPI-Host' => 'community-manga-eden.p.rapidapi.com',
                    'accept' => 'application/json',
                ],
            ]);

            $mangaData = json_decode($mangaResponse->getBody()->getContents(), true);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        // Pass all data to the view
        return view('welcome', compact('sliderMovies', 'discoverMovies', 'seriesMovies', 'animeData', 'mangaData'));
    }
}
