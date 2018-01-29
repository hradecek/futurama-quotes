<?php

namespace App\Providers;

use App\Repositories\Contracts\CharacterRepository;
use App\Repositories\Contracts\QuoteRepository;
use App\Repositories\Eloquent\QuoteRepository as EloquentQuoteRepository;
use App\Repositories\Eloquent\CharacterRepository as EloquentCharacterRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    private $repositories = [
        QuoteRepository::class => EloquentQuoteRepository::class,
        CharacterRepository::class => EloquentCharacterRepository::class
    ];

    protected $defer = true;

    public function register()
    {
        foreach ($this->repositories as $repository => $impl) {
            $this->app->bind($repository, function () use ($repository, $impl) {
                return new $impl;
            });
        }
    }

    public function provides()
    {
        return array_keys($this->repositories);
    }
}
