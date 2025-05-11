<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\GlobalObjects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;

interface PerformEval
{
    /**
     * @see https://tc39.es/ecma262/#sec-performeval
     *
     * @throws AbruptCompletion
     */
    public function __invoke(LanguageValue $x, BooleanValue $strictCaller, BooleanValue $direct): LanguageValue;
}
