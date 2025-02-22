<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\SuperProperty;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\IdentifierName;

interface SuperPropertyFactory
{
    public function createWithExpression(Expression $expression): SuperProperty;

    public function createWithIdentifierName(IdentifierName $identifierName): SuperProperty;
}
