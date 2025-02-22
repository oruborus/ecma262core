<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\Disjunction;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\Pattern;

interface PatternFactory
{
    public function create(Disjunction $disjunction): Pattern;
}
