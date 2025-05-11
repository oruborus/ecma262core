<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\GeneratorObjects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;

interface Yield_
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-yield
     *
     * @throws AbruptCompletion
     */
    public function __invoke(LanguageValue $value): LanguageValue;
}
