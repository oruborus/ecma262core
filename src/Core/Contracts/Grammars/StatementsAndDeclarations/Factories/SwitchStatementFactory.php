<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\CaseBlock;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\SwitchStatement;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface SwitchStatementFactory
{
    public function create(
        Expression $expression,
        CaseBlock $caseBlock,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): SwitchStatement;
}
