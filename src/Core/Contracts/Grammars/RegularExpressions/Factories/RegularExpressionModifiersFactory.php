<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\RegularExpressionModifier;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\RegularExpressionModifiers;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface RegularExpressionModifiersFactory
{
    public function create(
        RegularExpressionModifiers $regularExpressionModifiers,
        RegularExpressionModifier $regularExpressionModifier,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): RegularExpressionModifiers;

    public function createEmpty(
        SourceText $sourceText,
        Position $position,
    ): RegularExpressionModifiers;
}
