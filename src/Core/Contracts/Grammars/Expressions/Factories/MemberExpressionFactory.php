<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Arguments;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\MemberExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\TemplateLiteral;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\IdentifierName;

interface MemberExpressionFactory
{
    public function createWithArguments(MemberExpression $memberExpression, Arguments $arguments): MemberExpression;

    public function createWithAppendix(
        MemberExpression $memberExpression,
        null|IdentifierName|Expression|TemplateLiteral $appendix,
    ): MemberExpression;
}
