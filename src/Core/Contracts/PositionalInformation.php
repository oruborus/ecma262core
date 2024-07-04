<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts;

interface PositionalInformation
{
    public function lexer(): Lexer;

    public function line(): int;

    public function column(): int;

    public function file(): string;

    public function withSize(int $size): static;

    public function size(): int;
}
