<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Parsers;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\LabelIdentifier;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\LabelledItem;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface LabelledItemParser
{
    /**
     * @see https://tc39.es/ecma262/#prod-LabelledItem
     *
     * @throws ThrowCompletion
     */
    public function parse(Agent $agent, Lexer $lexer, Parameters $parameters): LabelledItem;

    /**
     * @see https://tc39.es/ecma262/#prod-LabelledItem
     *
     * @throws ThrowCompletion
     */
    public function parseLabelled(Agent $agent, Lexer $lexer, Parameters $parameters, LabelIdentifier $labelIdentifier): LabelledItem;
}
