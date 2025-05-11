<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\IteratorObjects;

use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface CreateIterResultObject
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-createiterresultobject
     */
    public function __invoke(LanguageValue $value, BooleanValue $done): ObjectValue;
}
