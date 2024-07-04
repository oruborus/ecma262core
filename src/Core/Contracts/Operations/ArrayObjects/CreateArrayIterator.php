<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ArrayObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface CreateArrayIterator
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-createarrayiterator
     *
     * @param "key"|"value"|"key+value" $kind
     */
    public function __invoke(Agent $agent, LanguageValue $array, string $kind): ObjectValue;
}
