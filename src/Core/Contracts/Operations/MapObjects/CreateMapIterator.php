<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\MapObjects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface CreateMapIterator
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-createmapiterator
     *
     * @psalm-type Entry array{Key: ?LanguageValue, Value: LanguageValue}
     *
     * @param "key+value"|"key"|"value" $kind
     * @throws AbruptCompletion
     */
    public function __invoke(LanguageValue $map, string $kind): ObjectValue;
}
