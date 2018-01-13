<?php

namespace App\Http\Controllers;

use App\Character;
use App\Quote;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File as FileSystem;
use Illuminate\Support\Facades\File;
use Laravel\Lumen\Routing\Controller as BaseController;

class QuoteController extends BaseController
{
    public function random()
    {
        $quote = Quote::inRandomOrder()->firstOrFail()->text;
        $characterImgUri = $this->characterRandomImageUri();

        return view('quote', compact('quote', 'characterImgUri'));
    }

    public function quote($character)
    {
        $character_id = Character::where('nick', $character)->first()->id;
        $quote_id = DB::table('character_quote')->where('character_id', $character_id)
                      ->inRandomOrder()
                      ->first()
                      ->quote_id;
        $quote = Quote::where('id', $quote_id)->first()->text;

        return response()->json(['quote' => $quote, 'image' => $this->characterRandomImageUri()]);
    }

    /* TODO: Move out of controller! */
    const CHARACTERS_PATH = "img/characters/";
    private function characterRandomImageUri()
    {
        $characterNicknames = Character::inRandomOrder()->get(['nick']);
        while ($characterNicknames->isNotEmpty()) {
            $nick = $characterNicknames->pop()->nick;
            $characterDir = self::CHARACTERS_PATH . $nick;

            if (File::exists($characterDir))
                $images = FileSystem::allFiles($characterDir);
                if (!empty($images)) {
                    return $images[array_rand($images)]->getPathName();
                }
        }
        return '';
    }
}
