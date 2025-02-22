<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions;

interface DecimalDigits extends SignedInteger
{
    public function numberOfNumericCodePoints(): int;
}
