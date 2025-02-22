<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Lexers;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\ControlEscape;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;

interface ControlEscapeLexer
{
    /**
     * @see https://tc39.es/ecma262/#prod-ControlEscape
     */
    public function parse(Agent $agent, Lexer $lexer, Parameters $parameters): ?ControlEscape;
}
