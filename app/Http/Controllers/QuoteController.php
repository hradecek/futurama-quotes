<?php

namespace App\Http\Controllers;

use App\Quote;
use Laravel\Lumen\Routing\Controller as BaseController;

class QuoteController extends BaseController
{
    public function getRandom()
    {
        $quote = Quote::inRandomOrder()->firstOrFail()->text;
        
        return view('quote', compact('quote'));
    }
}
