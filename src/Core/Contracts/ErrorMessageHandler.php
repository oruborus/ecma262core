<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts;

use Oru\EcmaScript\Core\Contracts\Agent;

interface ErrorMessageHandler
{
    public function handleErrorMessage(Agent $agent, string $message, PositionalInformation $positionalInformation): string;
}
