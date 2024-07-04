<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts;

enum ParameterName: string
{
    case AWAIT    = 'AWAIT';
    case DEFAULT  = 'DEFAULT';
    case IN       = 'IN';
    case N        = 'N';
    case RETURN   = 'RETURN';
    case SEP      = 'SEP';
    case U        = 'U';
    case YIELD    = 'YIELD';
}
