<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\PrimaryExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\RegularExpressionLiteral;

interface PrimaryExpressionFactory
{
    public function createThis(): PrimaryExpression;

    public function createWithRegularExpressionLiteral(
        RegularExpressionLiteral $regularExpressionLiteral,
    ): PrimaryExpression;
}
