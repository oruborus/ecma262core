<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface MethodDefinitionRecord
{
    public function key(): StringValue|SymbolValue;

    public function closure(): ObjectValue;
}
