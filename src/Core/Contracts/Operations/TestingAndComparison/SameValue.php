<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\TestingAndComparison;

use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;

interface SameValue
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-samevalue
     */
    public function __invoke(LanguageValue $x, LanguageValue $y): BooleanValue;
}
