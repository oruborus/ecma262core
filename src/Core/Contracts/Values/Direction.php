<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

enum Direction implements Value
{
    case BACKWARD;
    case FORWARD;
}
