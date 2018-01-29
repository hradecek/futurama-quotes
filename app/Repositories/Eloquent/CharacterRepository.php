<?php

namespace App\Repositories\Eloquent;

use App\Character;

class CharacterRepository implements \App\Repositories\Contracts\CharacterRepository
{
    public function findByNick($nick)
    {
        return Character::where('nick', $nick)->first();
    }

    public function findAllNicknames()
    {
        return Character::inRandomOrder()->get(['nick']);
    }
}
