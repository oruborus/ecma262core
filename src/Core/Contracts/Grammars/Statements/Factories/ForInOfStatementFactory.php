<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\LeftHandSideExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\ForBinding;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\ForDeclaration;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\ForInOfStatement;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\Statement;

interface ForInOfStatementFactory
{
    /** @param "for-in"|"for-of"|"for-await-of" $type */
    public function create(
        LeftHandSideExpression|ForBinding|ForDeclaration $first,
        Expression $secondExpression,
        Statement $statement,
        string $type,
    ): ForInOfStatement;
}
