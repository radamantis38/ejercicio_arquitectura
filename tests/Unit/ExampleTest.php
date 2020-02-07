<?php

namespace Tests\Unit;

use App\Models\Movie;
use App\Repositories\EloquentMovieRepository;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $a = new EloquentMovieRepository(new Movie());
        dd($a->findBy(['adult' => 0]));
        $this->assertTrue(true);
    }
}
