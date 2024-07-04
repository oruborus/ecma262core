<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

enum ConstructorKind implements Value
{
    case BASE;
    case DERIVED;
}
