<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\TestingAndComparison;

use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;

interface IsCallable
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-iscallable
     */
    public function __invoke(LanguageValue $argument): BooleanValue;
}
