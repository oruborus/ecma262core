<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;

interface BreakableStatement extends Statement
{
    /**
     * @see https://262.ecma-international.org/12.0/#prod-BreakableStatement 
     *
     * @throws AbruptCompletion
     */
    public function evaluate(): LanguageValue;
}
