<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RelationalOperations;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;

interface InstanceofOperator
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-instanceofoperator
     *
     * @throws AbruptCompletion
     */
    public function __invoke(LanguageValue $v, LanguageValue $target): BooleanValue;
}
