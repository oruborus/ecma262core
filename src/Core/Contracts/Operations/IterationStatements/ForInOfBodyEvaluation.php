<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\IterationStatements;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Nodes\ForBinding;
use Oru\EcmaScript\Core\Contracts\Nodes\ForDeclaration;
use Oru\EcmaScript\Core\Contracts\Nodes\LeftHandSideExpression;
use Oru\EcmaScript\Core\Contracts\Nodes\Statement;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\IteratorRecord;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;

interface ForInOfBodyEvaluation
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-forin-div-ofbodyevaluation-lhs-stmt-iterator-lhskind-labelset
     *
     * @param "enumerate"|"iterate" $iterationKind
     * @param "assignment"|"varBinding"|"lexicalBinding" $lhsKind
     * @param "sync"|"async" $iteratorKind
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, LeftHandSideExpression|ForBinding|ForDeclaration $lhs, Statement $stmt, IteratorRecord $iteratorRecord, string $iterationKind, string $lhsKind, ListValue $labelSet, string $iteratorKind = 'sync'): LanguageValue;
}
