<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Arguments;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\CallExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\TemplateLiteral;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\IdentifierName;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\PrivateIdentifier;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface CallExpressionFactory
{
    public function createWithArguments(
        CallExpression $callExpression,
        Arguments $arguments,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): CallExpression;

    public function createWithExpression(
        CallExpression $callExpression,
        Expression $expression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): CallExpression;

    public function createWithIdentifierName(
        CallExpression $callExpression,
        IdentifierName $identifierName,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): CallExpression;

    public function createWithTemplateLiteral(
        CallExpression $callExpression,
        TemplateLiteral $templateLiteral,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): CallExpression;

    public function createWithPrivateIdentifier(
        CallExpression $callExpression,
        PrivateIdentifier $privateIdentifier,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): CallExpression;
}
