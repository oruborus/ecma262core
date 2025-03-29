<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\RegularExpressionModifier;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface RegularExpressionModifierFactory
{
    /** @param 105|109|115 $regularExpressionModifier */
    public function create(
        int $regularExpressionModifier,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): RegularExpressionModifier;
}
