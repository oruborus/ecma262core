<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface MatchState extends SpecificationValue
{
    public NumberValue $endIndex { get; set; }

    /** @var (CaptureRange|UndefinedValue)[] $captures */
    public array $captures { get; set; }

    /** @var ListValue<int, int> $input */
    public ListValue $input { get; set; }
}
