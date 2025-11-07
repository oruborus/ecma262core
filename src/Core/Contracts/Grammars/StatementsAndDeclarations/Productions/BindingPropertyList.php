<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions;

use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasBoundNames;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasContainsExpression;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface BindingPropertyList extends HasBoundNames, HasContainsExpression, Binding
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-destructuring-binding-patterns-runtime-semantics-propertybindinginitialization
     *
     * @return ListValue<StringValue|SymbolValue>
     * @throws AbruptCompletion
     */
    public function propertyBindingInitialization(LanguageValue $value, UndefinedValue|EnvironmentRecord $environment): ListValue;
}
