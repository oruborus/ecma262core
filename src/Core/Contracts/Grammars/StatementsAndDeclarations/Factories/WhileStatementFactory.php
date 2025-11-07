<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\Statement;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\WhileStatement;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface WhileStatementFactory
{
    public function create(
        Expression $expression,
        Statement $statement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): WhileStatement;
}
