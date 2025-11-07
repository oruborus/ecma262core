<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\Disjunction;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\Pattern;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface PatternFactory
{
    public function create(
        Disjunction $disjunction,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): Pattern;
}
