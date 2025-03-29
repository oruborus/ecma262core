<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts;

interface Position
{
    public function line(): int;

    public function column(): int;

    public function file(): string;

    public function withSize(int $size): static;

    public function size(): int;

    /** @return non-negative-int */
    public function current(): int;

    public function advance(int $amount): static;

    public function newLine(): static;

    public function resetCursor(): static;
}
