<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasBoundNames;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasIsConstantDeclaration;

interface Declaration extends StatementListItem, HasIsConstantDeclaration, HasBoundNames
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-declarationpart
     */
    public function declarationPart(Agent $agent): Declaration;
}
