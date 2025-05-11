<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\IteratorObjects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface IterableToList
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-iterabletolist
     *
     * @return ListValue<LanguageValue>
     * @throws AbruptCompletion
     */
    public function __invoke(LanguageValue $items, ?ObjectValue $method = null): ListValue;
}
