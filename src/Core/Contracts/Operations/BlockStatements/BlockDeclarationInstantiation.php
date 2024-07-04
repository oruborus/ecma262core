<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\BlockStatements;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Nodes\CaseBlock;
use Oru\EcmaScript\Core\Contracts\Nodes\StatementList;
use Oru\EcmaScript\Core\Contracts\Values\DeclarativeEnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\UnusedValue;

interface BlockDeclarationInstantiation
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-blockdeclarationinstantiation
     */
    public function __invoke(Agent $agent, StatementList|CaseBlock $code, DeclarativeEnvironmentRecord $env): UnusedValue;
}
