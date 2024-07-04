<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\FunctionObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface MakeClassConstructor
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-makeclassconstructor
     */
    public function __invoke(Agent $agent, LanguageValue $f): UndefinedValue;
}
