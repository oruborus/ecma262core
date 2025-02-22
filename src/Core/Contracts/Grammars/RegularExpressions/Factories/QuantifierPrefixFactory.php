<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\DecimalDigits;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\QuantifierPrefix;

interface QuantifierPrefixFactory
{
    /** @param 42|43|63 $prefix */
    public function create(int $prefix): QuantifierPrefix;

    public function createExact(DecimalDigits $exactValue): QuantifierPrefix;

    public function createExactRange(DecimalDigits $min, DecimalDigits $max): QuantifierPrefix;

    public function createOpenRange(DecimalDigits $min): QuantifierPrefix;
}
