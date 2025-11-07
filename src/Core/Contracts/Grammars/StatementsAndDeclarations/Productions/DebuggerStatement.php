<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions;

use Oru\EcmaScript\Core\Contracts\Values\EmptyValue;

interface DebuggerStatement extends Statement
{
    /** @see https://tc39.es/ecma262/#prod-DebuggerStatement */
    public function evaluate(): EmptyValue;
}
