<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\TestingAndComparison;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface AbstractRelationalComparison
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-abstract-relational-comparison
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, LanguageValue $x, LanguageValue $y, bool $leftFirst = true): BooleanValue|UndefinedValue;
}
