<?php

namespace App\Repositories\Eloquent;

use App\Quote;
use Illuminate\Support\Facades\DB;

class QuoteRepository implements \App\Repositories\Contracts\QuoteRepository
{
    public function findByCharacter($characterId)
    {
        $quote_id = DB::table('character_quote')
            ->where('character_id', $characterId)
            ->inRandomOrder()
            ->first()
            ->quote_id;

        return Quote::where('id', $quote_id)->first();
    }

    public function findById($id)
    {
        return Quote::find($id)->first();
    }

    public function findRandom()
    {
        return Quote::inRandomOrder()->firstOrFail();
    }
}
