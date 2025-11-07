<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Elision;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ElisionFactory
{
    public function create(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): Elision;

    public function createWithElision(
        Elision $elision,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): Elision;
}
