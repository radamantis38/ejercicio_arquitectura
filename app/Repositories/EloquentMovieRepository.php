<?php


namespace App\Repositories;

use App\Models\Movie;
use App\Repositories\Interfaces\MovieRepositoryInterface;

/**
 * Class EloquentMovieRepository
 * @package App\Repositories
 */
class EloquentMovieRepository implements MovieRepositoryInterface
{
    /**
     * @var Movie
     */
    protected $movie;

    /**
     * EloquentMovieRepository constructor.
     * @param Movie $movie
     */
    public function __construct(Movie $movie)
    {
        $this->movie = $movie;
    }

    /**
     * funcion para filtrar peliculas
     * @param array $params
     * @return array
     */
    public function findBy(array $params = []): array
    {
        if (!empty($params)){
            $this->movie->where($params);
        }

        $movies = $this->movie->get();

        return !empty($movies) ? $movies->toArray() : [];
    }
}