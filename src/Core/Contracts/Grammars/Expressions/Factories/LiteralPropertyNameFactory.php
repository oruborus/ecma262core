<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\LiteralPropertyName;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\IdentifierName;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\NumericLiteral;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\StringLiteral;

interface LiteralPropertyNameFactory
{
    public function create(IdentifierName|StringLiteral|NumericLiteral $name): LiteralPropertyName;
}
