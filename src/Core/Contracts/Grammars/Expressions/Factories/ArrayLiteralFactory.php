<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\ArrayLiteral;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\ElementList;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Elision;

interface ArrayLiteralFactory
{
    /** @param array<int, int> $sourceTextMatched */
    public function create(?Elision $elision, array $sourceTextMatched): ArrayLiteral;

    /** @param array<int, int> $sourceTextMatched */
    public function createWithElementList(ElementList $elementList, ?Elision $elision, array $sourceTextMatched): ArrayLiteral;
}
