<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\Atom;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\Quantifier;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\Term;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface TermFactory
{
    public function create(
        Atom $atom,
        Quantifier $quantifier,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): Term;
}
