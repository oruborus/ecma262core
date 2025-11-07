<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\LabelIdentifier;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\BreakStatement;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface BreakStatementFactory
{
    public function create(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): BreakStatement;

    public function createWithLabelIdentifier(
        LabelIdentifier $labelIdentifier,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): BreakStatement;
}
