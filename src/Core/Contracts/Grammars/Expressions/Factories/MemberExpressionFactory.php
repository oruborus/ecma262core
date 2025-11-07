<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Arguments;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\MemberExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\TemplateLiteral;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\IdentifierName;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\PrivateIdentifier;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface MemberExpressionFactory
{
    public function createWithArguments(
        MemberExpression $memberExpression,
        Arguments $arguments,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): MemberExpression;

    public function createWithExpression(
        MemberExpression $memberExpression,
        Expression $expression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): MemberExpression;

    public function createWithIdentifierName(
        MemberExpression $memberExpression,
        IdentifierName $identifierName,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): MemberExpression;

    public function createWithPrivateIdentifier(
        MemberExpression $memberExpression,
        PrivateIdentifier $privateIdentifier,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): MemberExpression;

    public function createWithTemplateLiteral(
        MemberExpression $memberExpression,
        TemplateLiteral $templateLiteral,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): MemberExpression;
}
