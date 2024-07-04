<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\AsyncGeneratorObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface AsyncGeneratorResolve
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-asyncgeneratorresolve
     */
    public function __invoke(Agent $agent, ObjectValue $generator, LanguageValue $value, BooleanValue $done): UndefinedValue;
}
