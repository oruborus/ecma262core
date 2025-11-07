<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BooleanLiteral;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface BooleanLiteralFactory
{
    public function createTrue(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): BooleanLiteral;

    public function createFalse(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): BooleanLiteral;
}
