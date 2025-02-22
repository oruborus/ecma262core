<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Lexers;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\ClassEscape;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface ClassEscapeLexer
{
    /**
     * @see https://tc39.es/ecma262/#prod-ClassEscape
     *
     * @throws ThrowCompletion
     * @internal Use `ClassEscapeParser::parseOrFail()` to restore old behaviour
     */
    public function parse(Agent $agent, Lexer $lexer, Parameters $parameters): ?ClassEscape;

    /**
     * @see https://tc39.es/ecma262/#prod-ClassEscape
     *
     * @throws ThrowCompletion
     */
    public function parseOrFail(Agent $agent, Lexer $lexer, Parameters $parameters): ClassEscape;
}
