<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Parsers;

use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\BindingRestElement;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface BindingRestElementParser
{
    /**
     * @see https://tc39.es/ecma262/#prod-BindingRestElement
     *
     * @throws ThrowCompletion
     */
    public function parse(Lexer $lexer, Parameters $parameters): ?BindingRestElement;
}
