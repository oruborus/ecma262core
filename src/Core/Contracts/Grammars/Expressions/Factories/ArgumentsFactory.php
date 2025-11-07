<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\ArgumentList;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Arguments;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ArgumentsFactory
{
    public function createEmpty(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): Arguments;

    public function create(
        ArgumentList $argumentList,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): Arguments;
}
