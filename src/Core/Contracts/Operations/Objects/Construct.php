<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Objects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface Construct
{
    /**
     * @see https://tc39.es/ecma262/#sec-construct
     *
     * @param ?ListValue<LanguageValue> $argumentsList
     * @throws AbruptCompletion
     */
    public function __invoke(ObjectValue $f, ?ListValue $argumentsList = null, null|UndefinedValue|ObjectValue $newTarget = null): ObjectValue;
}
