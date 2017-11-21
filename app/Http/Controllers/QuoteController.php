<?php

namespace App\Http\Controllers;

use App\Character;
use App\Quote;
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
