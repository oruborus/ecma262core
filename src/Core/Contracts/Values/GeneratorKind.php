<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

enum GeneratorKind implements Value
{
    case NON_GENERATOR;
    case SYNC;
    case ASYNC;
}
