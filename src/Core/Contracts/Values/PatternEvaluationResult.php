<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface PatternEvaluationResult extends SpecificationValue
{
    public function getCharSet(): CharSet;

    public function getInvert(): BooleanValue;
}
