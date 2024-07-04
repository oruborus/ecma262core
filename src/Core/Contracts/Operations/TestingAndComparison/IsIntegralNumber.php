<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\TestingAndComparison;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;

interface IsIntegralNumber
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-isintegralnumber
     */
    public function __invoke(Agent $agent, LanguageValue $argument): BooleanValue;
}
