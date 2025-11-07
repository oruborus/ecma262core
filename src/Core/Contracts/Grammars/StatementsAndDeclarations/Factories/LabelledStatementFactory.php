<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\LabelIdentifier;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\LabelledItem;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\LabelledStatement;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface LabelledStatementFactory
{
    public function create(
        LabelIdentifier $labelIdentifier,
        LabelledItem $labelledItem,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): LabelledStatement;
}
