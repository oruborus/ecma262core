<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\Quantifier;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\QuantifierPrefix;

interface QuantifierFactory
{
    public function create(QuantifierPrefix $quantifierPrefix): Quantifier;

    public function createOptional(QuantifierPrefix $quantifierPrefix): Quantifier;
}
