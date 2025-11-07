<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\LetOrConst;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface LetOrConstFactory
{
    public function createWithLet(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): LetOrConst;

    public function createWithConst(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): LetOrConst;
}
