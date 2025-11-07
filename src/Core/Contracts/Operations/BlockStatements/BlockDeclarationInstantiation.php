<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\BlockStatements;

use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\CaseBlock;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\StatementList;
use Oru\EcmaScript\Core\Contracts\Values\DeclarativeEnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\UnusedValue;

interface BlockDeclarationInstantiation
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-blockdeclarationinstantiation
     */
    public function __invoke(StatementList|CaseBlock $code, DeclarativeEnvironmentRecord $env): UnusedValue;
}
