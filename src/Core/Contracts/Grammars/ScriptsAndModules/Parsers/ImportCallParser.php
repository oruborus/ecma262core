<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Parsers;

use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ImportCall;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface ImportCallParser
{
    /**
     * @see https://tc39.es/ecma262/#prod-ImportCall
     *
     * @throws ThrowCompletion
     */
    public function parse(Lexer $lexer, Parameters $parameters): ?ImportCall;
}
