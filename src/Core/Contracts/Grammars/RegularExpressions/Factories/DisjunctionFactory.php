<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\Alternative;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\Disjunction;

interface DisjunctionFactory
{
    public function createWithAlternative(Alternative $alternative): Disjunction;

    public function createWithAlternativeAndDisjunction(Alternative $alternative, Disjunction $disjunction): Disjunction;
}
