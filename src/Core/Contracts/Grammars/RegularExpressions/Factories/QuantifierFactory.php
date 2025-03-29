<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\Quantifier;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\QuantifierPrefix;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface QuantifierFactory
{
    public function create(
        QuantifierPrefix $quantifierPrefix,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): Quantifier;
}
