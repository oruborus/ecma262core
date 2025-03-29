<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\StaticSemantics;

use Oru\EcmaScript\Core\Contracts\Position;

interface HasPosition
{
    public Position $position { get; }

    public Position $next { get; }

    public function position(): Position;

    public function line(): int;

    public function column(): int;

    public function file(): string;
}
