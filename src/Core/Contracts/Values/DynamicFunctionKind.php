<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

enum DynamicFunctionKind implements Value
{
    case NORMAL;
    case GENERATOR;
    case ASYNC;
    case ASYNC_GENERATOR;
}
