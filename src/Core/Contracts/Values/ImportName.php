<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

enum ImportName implements Value
{
    case NAMESPACE;
    case NAMESPACE_OBJECT;
    case ALL;
    case ALL_BUT_DEFAULT;
}
