<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface GeneratorBody extends FunctionBody
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-evaluategeneratorbody
     *
     * @param ListValue<LanguageValue> $argumentsList
     */
    public function evaluateGeneratorBody(ObjectValue $functionObject, ListValue $argumentsList): AbruptCompletion;
}
