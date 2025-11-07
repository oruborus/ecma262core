<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Literal;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\IdentifierName;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\NumericLiteral;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\StringLiteral;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface LiteralFactory
{
    public function createWithNullLiteral(
        IdentifierName $nullLiteral,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): Literal;

    public function createWithBooleanLiteral(
        IdentifierName $booleanLiteral,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): Literal;

    public function createWithNumericLiteral(
        NumericLiteral $numericLiteral,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): Literal;

    public function createWithStringLiteral(
        StringLiteral $stringLiteral,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): Literal;
}
