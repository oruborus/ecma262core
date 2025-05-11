<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\LeftHandSideExpressions;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Arguments;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\TemplateLiteral;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ReferenceRecord;

interface EvaluateCall
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-evaluatecall
     *
     * @throws AbruptCompletion
     */
    public function __invoke(LanguageValue $func, LanguageValue|ReferenceRecord $ref, Arguments|TemplateLiteral $node, BooleanValue $tailPosition): LanguageValue;
}
