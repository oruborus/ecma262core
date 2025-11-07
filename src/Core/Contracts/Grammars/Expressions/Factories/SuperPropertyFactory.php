<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\SuperProperty;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\IdentifierName;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface SuperPropertyFactory
{
    public function createWithExpression(
        Expression $expression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): SuperProperty;

    public function createWithIdentifierName(
        IdentifierName $identifierName,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): SuperProperty;
}
