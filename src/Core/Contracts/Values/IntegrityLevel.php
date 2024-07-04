<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

enum IntegrityLevel implements Value
{
    case SEALED;
    case FROZEN;
}
