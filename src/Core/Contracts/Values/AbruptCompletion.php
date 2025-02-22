<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Throwable;

interface AbruptCompletion extends CompletionValue, Throwable
{
    public function getTarget(): EmptyValue|StringValue;
}
