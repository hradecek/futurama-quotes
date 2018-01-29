<?php

namespace App\Repositories\Contracts;

interface CharacterRepository
{
    public function findByNick($nick);

    public function findAllNicknames();
}
