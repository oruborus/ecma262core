<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\IterationStatements;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\Statement;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface ForBodyEvaluation
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-forbodyevaluation
     *
     * @param ListValue<StringValue> $perIterationBindings
     * @param ListValue<StringValue> $labelSet
     * @throws AbruptCompletion
     */
    public function __invoke(?Expression $test, ?Expression $increment, Statement $stmt, ListValue $perIterationBindings, ListValue $labelSet): LanguageValue;
}
