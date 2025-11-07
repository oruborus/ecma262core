<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\ExpressionStatement;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ExpressionStatementFactory
{
    public function create(
        Expression $expression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ExpressionStatement;
}
