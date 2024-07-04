<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\IterationStatements;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;

interface LoopContinues
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-loopcontinues
     */
    public function __invoke(Agent $agent, null|LanguageValue|AbruptCompletion $completion, ListValue $labelSet): BooleanValue;
}
