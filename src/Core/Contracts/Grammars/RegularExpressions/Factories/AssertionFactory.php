<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\Assertion;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\Disjunction;

interface AssertionFactory
{
    /** @param "^"|"$"|"b"|"B"|"="|"!"|"<="|"<!" $type */
    public function create(string $type): Assertion;

    /** @param "^"|"$"|"b"|"B"|"="|"!"|"<="|"<!" $type */
    public function createWithDisjunction(string $type, Disjunction $disjunction): Assertion;
}
