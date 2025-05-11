<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\BooleanObjects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;

interface ThisBooleanValue
{
    /**
     * @see https://262.ecma-international.org/12.0/#thisbooleanvalue
     *
     * @throws AbruptCompletion
     */
    public function __invoke(LanguageValue $value): BooleanValue;
}
