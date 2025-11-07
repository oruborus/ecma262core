<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\LabelIdentifier;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\ContinueStatement;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ContinueStatementFactory
{
    public function create(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ContinueStatement;

    public function createWithLabelIdentifier(
        LabelIdentifier $labelIdentifier,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ContinueStatement;
}
