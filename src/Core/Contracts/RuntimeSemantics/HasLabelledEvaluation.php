<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\RuntimeSemantics;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface HasLabelledEvaluation
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-labelledevaluation
     *
     * @param ListValue<StringValue> $labelSet
     * @throws AbruptCompletion
     */
    public function labelledEvaluation(ListValue $labelSet): LanguageValue;
}
