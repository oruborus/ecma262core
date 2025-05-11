<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Miscellaneous;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface InitializeBoundName
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-initializeboundname
     *
     * @throws AbruptCompletion
     */
    public function __invoke(StringValue $name, LanguageValue $value, UndefinedValue|EnvironmentRecord $environment): LanguageValue;
}
