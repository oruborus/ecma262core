<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\RuntimeSemantics;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface HasKeyedBindingInitialization
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-keyedbindinginitialization
     *
     * @throws AbruptCompletion
     */
    public function keyedBindingInitialization(LanguageValue $value, UndefinedValue|EnvironmentRecord $environment, StringValue|SymbolValue $propertyName): LanguageValue;
}
