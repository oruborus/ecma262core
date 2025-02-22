<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Lexers;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\AsciiLetter;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

// FIXME: Remove `Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Lexers\AsciiLetterLexer`
interface AsciiLetterLexer
{
    /** @see https://tc39.es/ecma262/#prod-AsciiLetter */
    public function parse(Agent $agent, Lexer $lexer, Parameters $parameters): ?AsciiLetter;

    /**
     * @see https://tc39.es/ecma262/#prod-AsciiLetter
     *
     * @throws ThrowCompletion
     */
    public function parseOrFail(Agent $agent, Lexer $lexer, Parameters $parameters): AsciiLetter;
}
