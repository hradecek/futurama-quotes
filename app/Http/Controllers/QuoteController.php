<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\CharacterRepository;
use App\Repositories\Contracts\QuoteRepository;
use Illuminate\Support\Facades\File as FileSystem;
use Illuminate\Support\Facades\File;
use Laravel\Lumen\Routing\Controller as BaseController;

class QuoteController extends BaseController
{
    const VIEW_MAIN = 'quote';

    private $quoteRepository;
    private $characterRepository;

    public function __construct(QuoteRepository $quoteRepository, CharacterRepository $characterRepository)
    {
        $this->quoteRepository = $quoteRepository;
        $this->characterRepository = $characterRepository;
    }

    public function random()
    {
        $quote = $this->quoteRepository->findRandom()->text;
        $characterImgUri = $this->characterRandomImageUri();

        return view(self::VIEW_MAIN, compact('quote', 'characterImgUri'));
    }

    public function quoteById($id)
    {
        $quote = $this->quoteRepository->findById($id);
        $characterImgUri = $this->characterRandomImageUri();

        return view(self::VIEW_MAIN, compact('quote', 'characterImgUri'));
    }

    public function updateQuote()
    {
        $quote = $this->quoteRepository->findRandom()->text;
        $characterImgUri = $this->characterRandomImageUri();

        return response()->json(compact('quote', 'characterImgUri'));
    }

    public function quoteByCharacter($character)
    {
        $character = $this->characterRepository->findByNick($character);
        if (null === $character) {
            abort(404);
        }
        $quote = $this->quoteRepository->findByCharacter($character->id)->text;
        $characterImgUri = $this->characterRandomImageUri();

        return view(self::VIEW_MAIN, compact('quote' , 'characterImgUri'));
    }

    const CHARACTERS_PATH = 'img/characters/';
    private function characterRandomImageUri()
    {
        $characterNicknames = $this->characterRepository->findAllNicknames();
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
