<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\Block;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\BlockStatement;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface BlockStatementFactory
{
    public function create(
        Block $block,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): BlockStatement;
}
