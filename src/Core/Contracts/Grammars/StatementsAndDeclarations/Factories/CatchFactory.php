<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\Block;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\Catch_;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\CatchParameter;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface CatchFactory
{
    public function create(
        CatchParameter $catchParameter,
        Block $block,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): Catch_;

    public function createWithoutCatchParameter(
        Block $block,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): Catch_;
}
