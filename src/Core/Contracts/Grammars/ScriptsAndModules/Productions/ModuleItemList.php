<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions;

use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface ModuleItemList extends ModuleBody
{
    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-containsduplicatelabels
     *
     * @param ListValue<StringValue> $labelSet
     */
    public function containsDuplicateLabels(ListValue $labelSet): BooleanValue;

    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-containsundefinedbreaktarget
     *
     * @param ListValue<StringValue> $labelSet
     */
    public function containsUndefinedBreakTarget(ListValue $labelSet): BooleanValue;

    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-containsundefinedcontinuetarget
     *
     * @param ListValue<StringValue> $iterationSet
     * @param ListValue<StringValue> $labelSet
     */
    public function containsUndefinedContinueTarget(ListValue $iterationSet, ListValue $labelSet): BooleanValue;
}
