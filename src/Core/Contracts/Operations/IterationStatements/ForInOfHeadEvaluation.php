<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\IterationStatements;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\IteratorRecord;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface ForInOfHeadEvaluation
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-forinofheadevaluation
     *
     * @param ListValue<StringValue> $uninitializedBoundNames
     * @throws AbruptCompletion
     */
    public function __invoke(ListValue $uninitializedBoundNames, Expression $expr, string $iterationKind): IteratorRecord;
}
