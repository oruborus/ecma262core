<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Parsers;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\AsyncGeneratorExpression;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface AsyncGeneratorExpressionParser
{
    /**
     * @see https://tc39.es/ecma262/#prod-AsyncGeneratorExpression
     *
     * @throws ThrowCompletion
     */
    public function parse(SourceCode $sourceCode, Position $position, Parameters $parameters): ?AsyncGeneratorExpression;
}
