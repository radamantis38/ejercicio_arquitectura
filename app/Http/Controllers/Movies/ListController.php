<?php

namespace App\Http\Controllers\Movies;

use App\Http\Controllers\Controller;
use App\UseCases\Interfaces\MovieListUseCaseInterface;


class ListController extends Controller
{

    protected $useCase;

    /**
     * ListController constructor.
     */
    public function __construct(
        MovieListUseCaseInterface $useCase
    )
    {
        $this->useCase = $useCase;
    }

    public function __invoke()
    {
        $movies = $this->useCase->listMovies();
        return view('welcome',['movies'=>$movies]);
    }
}
