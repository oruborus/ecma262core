<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Arguments;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\CallExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\TemplateLiteral;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\IdentifierName;

interface CallExpressionFactory
{
    public function create(
        CallExpression $callExpression,
        Arguments|Expression|IdentifierName|TemplateLiteral $appendix,
    ): CallExpression;
}
