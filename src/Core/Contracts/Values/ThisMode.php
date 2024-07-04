<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

enum ThisMode implements Value
{
    case GLOBAL;
    case LEXICAL;
    case LEXICAL_THIS;
    case NON_LEXICAL_THIS;
    case STRICT;
}
