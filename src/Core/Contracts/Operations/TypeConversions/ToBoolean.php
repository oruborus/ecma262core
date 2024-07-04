<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\TypeConversions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;

interface ToBoolean
{
    /**
     * @see https://tc39.es/ecma262/#sec-toboolean
     */
    public function __invoke(Agent $agent, LanguageValue $argument): BooleanValue;
}
