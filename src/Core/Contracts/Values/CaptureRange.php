<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface CaptureRange extends SpecificationValue
{
    public NumberValue  $startIndex { get; }
    public NumberValue  $endIndex { get; }
}
