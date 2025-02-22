<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Parsers;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\AsyncGeneratorBody;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface AsyncGeneratorBodyParser
{
    /**
     * @see https://tc39.es/ecma262/#prod-AsyncGeneratorBody
     *
     * @throws ThrowCompletion
     */
    public function parse(Agent $agent, Lexer $lexer, Parameters $parameters): ?AsyncGeneratorBody;

    /**
     * @see https://tc39.es/ecma262/#prod-AsyncGeneratorBody
     *
     * @throws ThrowCompletion
     */
    public function parseOrFail(Agent $agent, Lexer $lexer, Parameters $parameters): AsyncGeneratorBody;
}
