<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BooleanLiteral;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\IdentifierName;

interface BooleanLiteralFactory
{
    // FIXME: Harden `$value` parameter type
    public function create(IdentifierName $value): BooleanLiteral;
}
