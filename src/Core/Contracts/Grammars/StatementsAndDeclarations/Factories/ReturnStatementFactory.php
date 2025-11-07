<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\ReturnStatement;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ReturnStatementFactory
{
    public function create(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ReturnStatement;

    public function createWithExpression(
        Expression $expression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ReturnStatement;
}
