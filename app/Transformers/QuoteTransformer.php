<?php

namespace App\Transformers;

use App\Character;
use App\Quote;
use League\Fractal\TransformerAbstract;

class QuoteTransformer extends TransformerAbstract
{
    protected $availableIncludes = [
        'character'
    ];

    public function transform(Quote $quote)
    {
        return [
            'quote' => $quote->text,
            'links' => [
                [
                    'rel' => 'self',
                    /*TODO: use hash instead of id */
                    'uri' => '/quote/' . $quote->id
                ]
            ]
        ];
    }

    public function includeAuthor(Character $character)
    {
        return $this->item($character, new CharacterTransformer);
    }
}
