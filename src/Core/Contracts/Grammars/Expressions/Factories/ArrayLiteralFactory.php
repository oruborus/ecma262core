<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\ArrayLiteral;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\ElementList;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Elision;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ArrayLiteralFactory
{
    public function createEmpty(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
        Parameters $parameters,
    ): ArrayLiteral;

    public function createWithElementList(
        ElementList $elementList,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
        Parameters $parameters,
    ): ArrayLiteral;

    public function createWithElision(
        Elision $elision,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
        Parameters $parameters,
    ): ArrayLiteral;

    public function create(
        ElementList $elementList,
        Elision $elision,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
        Parameters $parameters,
    ): ArrayLiteral;
}
