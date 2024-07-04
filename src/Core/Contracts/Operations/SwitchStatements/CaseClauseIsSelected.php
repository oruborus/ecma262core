<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\SwitchStatements;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Nodes\CaseClause;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;

interface CaseClauseIsSelected
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-caseclauseisselected
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, CaseClause $c, LanguageValue $input): BooleanValue;
}
