<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Parsers;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ClassTail;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;

interface ClassTailParser
{
    /**
     * @see https://tc39.es/ecma262/#prod-ClassTail
     */
    public function parse(Agent $agent, Lexer $lexer, Parameters $parameters): ?ClassTail;

    /**
     * @see https://tc39.es/ecma262/#prod-ClassTail
     */
    public function parseOrFail(Agent $agent, Lexer $lexer, Parameters $parameters): ClassTail;
}
