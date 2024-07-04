<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

enum PromiseReactionType implements Value
{
    case FULFILL;
    case REJECT;
}
