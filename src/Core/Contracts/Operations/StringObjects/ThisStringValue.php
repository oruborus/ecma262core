<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\StringObjects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface ThisStringValue
{
    /**
     * @see https://262.ecma-international.org/12.0/#thisstringvalue
     *
     * @throws AbruptCompletion
     */
    public function __invoke(LanguageValue $value): StringValue;
}
