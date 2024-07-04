<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\InputElements;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;

interface InputElementFactory
{
    /**
     * @template TInputElement of InputElement
     * @param class-string<TInputElement> $production
     * @return ?TInputElement
     */
    public function create(string $production, Agent $agent, Lexer $lexer, Parameters $parameters): ?InputElement;

    public function createReplacingLineTerminator(PositionalInformation $positionalInformation): LineTerminator;
}
