<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\DoWhileStatement;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\Statement;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface DoWhileStatementFactory
{
    public function create(
        Statement $statement,
        Expression $expression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): DoWhileStatement;
}
