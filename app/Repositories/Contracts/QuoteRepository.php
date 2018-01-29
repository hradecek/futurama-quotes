<?php

namespace App\Repositories\Contracts;

interface QuoteRepository
{
    public function findByCharacter($characterId);

    public function findById($id);

    public function findRandom();
}
