<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\TypeConversions;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface ToObject
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-toobject
     * @see https://262.ecma-international.org/12.0/#table-toobject-conversions
     *
     * @throws AbruptCompletion
     */
    public function __invoke(LanguageValue $argument): ObjectValue;
}
