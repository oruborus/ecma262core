<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;

interface ArrowParameters extends FormalParameters
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-coveredformalslist
     */
    public function coveredFormalsList(Agent $agent): ArrowParameters|ArrowFormalParameters;
}
