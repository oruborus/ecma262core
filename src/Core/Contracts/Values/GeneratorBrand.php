<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

enum GeneratorBrand implements Value
{
    case EMPTY;
    case ArrayIteratorPrototype;
    case MapIteratorPrototype;
    case SetIteratorPrototype;
    case StringIteratorPrototype;
}
