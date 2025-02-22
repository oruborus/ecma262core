<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Parsers;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\PropertySetParameterList;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface PropertySetParameterListParser
{
    /**
     * @see https://tc39.es/ecma262/#prod-PropertySetParameterList
     */
    public function parse(Agent $agent, Lexer $lexer, Parameters $parameters): ?PropertySetParameterList;

    /**
     * @see https://tc39.es/ecma262/#prod-PropertySetParameterList
     *
     * @throws ThrowCompletion
     */
    public function parseOrFail(Agent $agent, Lexer $lexer, Parameters $parameters): PropertySetParameterList;
}
