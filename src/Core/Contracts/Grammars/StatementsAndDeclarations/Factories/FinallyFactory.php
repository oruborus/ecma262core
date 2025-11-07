<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\Block;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\Finally_;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface FinallyFactory
{
    public function create(
        Block $block,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): Finally_;
}
