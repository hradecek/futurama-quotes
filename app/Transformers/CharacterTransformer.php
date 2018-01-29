<?php

namespace App\Transformers;

use App\Character;
use League\Fractal\TransformerAbstract;

class CharacterTransformer extends TransformerAbstract
{
    public function transform(Character $character)
    {
        $response = [
            'nick' => $character->nick
        ];

        if (!empty($character->name)) {
            $response['name'] = $character->name;
        }

        return $response;
    }
}
