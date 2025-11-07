<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\Block;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\Catch_;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\Finally_;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\TryStatement;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface TryStatementFactory
{
    public function create(
        Block $block,
        Catch_ $catch,
        Finally_ $finally,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): TryStatement;

    public function createWithCatch(
        Block $block,
        Catch_ $catch,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): TryStatement;

    public function createWithFinally(
        Block $block,
        Finally_ $finally,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): TryStatement;
}
