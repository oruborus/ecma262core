<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface RegExpCreate
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-regexpcreate
     *
     * @throws AbruptCompletion
     */
    public function __invoke(LanguageValue $p, LanguageValue $f): ObjectValue;
}
