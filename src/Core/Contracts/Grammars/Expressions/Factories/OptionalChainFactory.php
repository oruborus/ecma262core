<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Arguments;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\OptionalChain;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\OptionalExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\IdentifierName;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\PrivateIdentifier;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface OptionalChainFactory
{
    public function createWithArguments(
        Arguments $arguments,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): OptionalChain;

    public function createWithExpression(
        Expression $expression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): OptionalChain;

    public function createWithIdentifierName(
        IdentifierName $identifierName,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): OptionalChain;

    public function createWithPrivateIdentifier(
        PrivateIdentifier $privateIdentifier,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): OptionalChain;

    public function createWithOptionalChainAndArguments(
        OptionalChain $optionalChain,
        Arguments $arguments,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): OptionalChain;

    public function createWithOptionalChainAndExpression(
        OptionalChain $optionalChain,
        Expression $expression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): OptionalChain;

    public function createWithOptionalChainAndIdentifierName(
        OptionalChain $optionalChain,
        IdentifierName $identifierName,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): OptionalChain;

    public function createWithOptionalChainAndPrivateIdentifier(
        OptionalChain $optionalChain,
        PrivateIdentifier $privateIdentifier,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): OptionalChain;
}
