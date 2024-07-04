<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

enum ClassElementKind implements Value
{
    case CONSTRUCTOR_METHOD;
    case EMPTY;
    case NON_CONSTRUCTOR_METHOD;
}
