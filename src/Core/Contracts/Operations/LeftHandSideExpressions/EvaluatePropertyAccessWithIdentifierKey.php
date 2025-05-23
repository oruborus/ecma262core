<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\LeftHandSideExpressions;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\IdentifierName;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ReferenceRecord;

interface EvaluatePropertyAccessWithIdentifierKey
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-evaluate-property-access-with-identifier-key
     *
     * @throws AbruptCompletion
     */
    public function __invoke(LanguageValue $baseValue, IdentifierName $identifierName, BooleanValue $strict): ReferenceRecord;
}
