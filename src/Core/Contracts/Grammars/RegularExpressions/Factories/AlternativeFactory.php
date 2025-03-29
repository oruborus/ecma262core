<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\Alternative;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\Term;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface AlternativeFactory
{
    public function create(
        Alternative $alternative,
        Term $term,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): Alternative;

    public function createEmpty(SourceText $sourceText, Position $position): Alternative;
}
