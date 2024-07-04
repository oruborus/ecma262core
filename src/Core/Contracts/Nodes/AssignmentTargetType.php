<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes;

enum AssignmentTargetType
{
    case SIMPLE;
    case INVALID;
}
