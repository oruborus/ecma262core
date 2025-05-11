<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\AsyncGeneratorObjects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;

interface AsyncGeneratorYield
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-asyncgeneratorenqueue
     *
     * @throws AbruptCompletion
     */
    public function __invoke(LanguageValue $value): LanguageValue;
}
