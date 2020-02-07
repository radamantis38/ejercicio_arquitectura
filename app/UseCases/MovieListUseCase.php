<?php
namespace App\UseCases;

use App\Repositories\Interfaces\MovieRepositoryInterface;
use App\UseCases\Interfaces\MovieListUseCaseInterface;

class MovieListUseCase implements MovieListUseCaseInterface
{
    protected $repository;

    /**
     * MovieistUseCase constructor.
     */
    public function __construct(
        MovieRepositoryInterface $repository
    )
    {
        $this->repository = $repository;
    }

    /**
     * @inheritDoc
     */
    public function listMovies(): array
    {
        return $this->repository->findAll();
    }
}