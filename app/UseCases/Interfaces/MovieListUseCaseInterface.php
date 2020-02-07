<?php

namespace App\UseCases\Interfaces;

/**
 * Interface MovieListUseCaseInterface
 * @package App\UseCases\Interfaces
 */
interface MovieListUseCaseInterface
{
    /**
     * @param array $params
     * @return array
     */
    public function listMovies():array;
}