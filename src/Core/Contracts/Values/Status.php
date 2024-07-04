<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

enum Status implements Value
{
    case NEW;
    case UNLINKED;
    case LINKING;
    case LINKED;
    case EVALUATING;
    case EVALUATING_ASYNC;
    case EVALUATED;
}
