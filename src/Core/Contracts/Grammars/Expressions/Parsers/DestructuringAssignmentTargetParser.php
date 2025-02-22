<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Parsers;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\DestructuringAssignmentTarget;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface DestructuringAssignmentTargetParser
{
    /**
     * @see https://tc39.es/ecma262/#prod-DestructuringAssignmentTarget
     *
     * @throws ThrowCompletion
     */
    public function parse(Agent $agent, Lexer $lexer, Parameters $parameters): ?DestructuringAssignmentTarget;

    /**
     * @see https://tc39.es/ecma262/#prod-DestructuringAssignmentTarget
     *
     * @throws ThrowCompletion
     */
    public function parseOrFail(Agent $agent, Lexer $lexer, Parameters $parameters): DestructuringAssignmentTarget;
}
