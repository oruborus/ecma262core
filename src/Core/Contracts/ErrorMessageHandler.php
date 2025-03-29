<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface ErrorMessageHandler
{
    public function handleErrorMessage(Agent $agent, string $message, SourceText $sourceText, Position $position): string;
}
