<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts;

enum ParameterName: string
{
    case AWAIT                = 'AWAIT';
    case DEFAULT              = 'DEFAULT';
    case IN                   = 'IN';
    case NAMED_CAPTURE_GROUPS = 'NamedCaptureGroups';
    case RETURN               = 'RETURN';
    case SEP                  = 'SEP';
    case TAGGED               = 'TAGGED';
    case UNICODE_MODE         = 'UnicodeMode';
    case UNICODE_SETS_MODE    = 'UnicodeSetsMode';
    case YIELD                = 'YIELD';
}
