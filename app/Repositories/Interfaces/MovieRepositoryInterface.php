<?php

namespace App\Repositories\Interfaces;

/**
 * Interface MovieRepositoryInterface
 * @package App\Repositories\Interfaces
 */
interface MovieRepositoryInterface
{
    /**
     * funcion para filtrar peliculas
     * @param array $params
     * @return array
     */
    public function findBy(array $params): array;
}
