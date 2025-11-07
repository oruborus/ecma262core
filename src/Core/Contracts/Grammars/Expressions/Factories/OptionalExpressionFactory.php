<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\CallExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\MemberExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\OptionalChain;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\OptionalExpression;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface OptionalExpressionFactory
{
    public function create(
        CallExpression|MemberExpression $callOrMemberExpression,
        OptionalChain $optionalChain,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): OptionalExpression;

    public function createWithOptionalExpression(
        OptionalExpression $optionalExpression,
        OptionalChain $optionalChain,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): OptionalExpression;
}
