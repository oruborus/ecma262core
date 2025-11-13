<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Stringable;

interface PrivateName extends SpecificationValue, Stringable
{
    public StringValue $description { get; }
}
