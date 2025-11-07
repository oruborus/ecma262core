<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\LiteralPropertyName;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\IdentifierName;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\NumericLiteral;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\StringLiteral;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface LiteralPropertyNameFactory
{
    public function createWithIdentifierName(
        IdentifierName $identifierName,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): LiteralPropertyName;

    public function createWithNumericLiteral(
        NumericLiteral $numericLiteral,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): LiteralPropertyName;

    public function createWithStringLiteral(
        StringLiteral $stringLiteral,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): LiteralPropertyName;
}
