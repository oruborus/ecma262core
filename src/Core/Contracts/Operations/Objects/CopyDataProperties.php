<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Objects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;
use Oru\EcmaScript\Core\Contracts\Values\UnusedValue;

interface CopyDataProperties
{
    /**
     * @see https://tc39.es/ecma262/#sec-copydataproperties
     *
     * @param ListValue<StringValue|SymbolValue> $excludedItems
     * @throws AbruptCompletion
     */
    public function __invoke(ObjectValue $target, LanguageValue $source, ListValue $excludedItems): UnusedValue;
}
