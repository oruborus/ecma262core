<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\RuntimeSemantics;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface HasBindingInitialization
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-bindinginitialization
     *
     * @throws AbruptCompletion
     */
    public function bindingInitialization(LanguageValue $value, UndefinedValue|EnvironmentRecord $environment): LanguageValue;
}
