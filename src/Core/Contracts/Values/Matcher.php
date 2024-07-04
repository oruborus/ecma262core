<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Oru\EcmaScript\Core\Contracts\Agent;

interface Matcher extends SpecificationValue
{
    public function __invoke(Agent $agent, State $x, Continuation $c): ?State;
}
