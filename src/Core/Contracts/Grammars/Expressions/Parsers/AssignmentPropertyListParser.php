<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Parsers;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentPropertyList;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface AssignmentPropertyListParser
{
    /**
     * @see https://tc39.es/ecma262/#prod-AssignmentPropertyList
     *
     * @throws ThrowCompletion
     */
    public function parse(Agent $agent, Lexer $lexer, Parameters $parameters): ?AssignmentPropertyList;

    /**
     * @see https://tc39.es/ecma262/#prod-AssignmentPropertyList
     *
     * @throws ThrowCompletion
     */
    public function parseOrFail(Agent $agent, Lexer $lexer, Parameters $parameters): AssignmentPropertyList;
}
