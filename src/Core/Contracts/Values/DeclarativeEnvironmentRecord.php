<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Oru\EcmaScript\Core\Contracts\Agent;

interface DeclarativeEnvironmentRecord extends EnvironmentRecord
{
    public function hasBinding(Agent $agent, StringValue $n): BooleanValue;
}
