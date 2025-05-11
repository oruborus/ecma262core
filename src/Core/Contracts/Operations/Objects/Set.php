<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Objects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;

interface Set
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-set-o-p-v-throw
     *
     * @throws AbruptCompletion
     */
    public function __invoke(ObjectValue $object, StringValue|SymbolValue $propertyKey, LanguageValue $value, BooleanValue $throw): BooleanValue;
}
