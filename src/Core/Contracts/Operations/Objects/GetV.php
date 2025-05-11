<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Objects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;

interface GetV
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-getv
     *
     * @throws AbruptCompletion
     */
    public function __invoke(LanguageValue $value, StringValue|SymbolValue $propertyKey): LanguageValue;
}
