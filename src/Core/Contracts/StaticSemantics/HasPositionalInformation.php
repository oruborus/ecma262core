<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\StaticSemantics;

use Oru\EcmaScript\Core\Contracts\PositionalInformation;

interface HasPositionalInformation
{
    public PositionalInformation $position { get; }

    public PositionalInformation $next { get; }

    public function positionalInformation(): PositionalInformation;

    public function line(): int;

    public function column(): int;

    public function file(): string;
}
