<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\InputElements;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasIs;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasPositionalInformation;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasSourceTextMatched;

interface InputElement extends HasIs, HasPositionalInformation, HasSourceTextMatched
{
    public static function create(Agent $agent, Lexer $lexer, InputElementFactory $factory, Parameters $parameters): ?InputElement;
}
