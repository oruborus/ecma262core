<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\MultiplicativeOperator;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface MultiplicativeOperatorFactory
{
    public function createAsterisk(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): MultiplicativeOperator;

    public function createSolidus(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): MultiplicativeOperator;

    public function createPercent(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): MultiplicativeOperator;
}
