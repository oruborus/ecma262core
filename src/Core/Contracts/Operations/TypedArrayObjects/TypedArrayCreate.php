<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\TypedArrayObjects;

use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface TypedArrayCreate
{
    /**
     * @see https://262.ecma-international.org/12.0/#typedarray-create
     *
     * @param ListValue<LanguageValue> $argumentList
     */
    public function __invoke(ObjectValue $constructor, ListValue $argumentList): ObjectValue;
}
