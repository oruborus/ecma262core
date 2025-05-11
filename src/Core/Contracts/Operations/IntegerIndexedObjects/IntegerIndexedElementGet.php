<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\IntegerIndexedObjects;

use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;

interface IntegerIndexedElementGet
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-integerindexedelementget
     */
    public function __invoke(LanguageValue $o, NumberValue $index): LanguageValue;
}
