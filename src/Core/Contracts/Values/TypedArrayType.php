<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface TypedArrayType
{
    public const Int8      = 'Int8';
    public const Uint8     = 'Uint8';
    public const Uint8C    = 'Uint8C';
    public const Int16     = 'Int16';
    public const Uint16    = 'Uint16';
    public const Int32     = 'Int32';
    public const Uint32    = 'Uint32';
    public const BigInt64  = 'BigInt64';
    public const BigUint64 = 'BigUint64';
    public const Float32   = 'Float32';
    public const Float64   = 'Float64';

    public static function get(string $case): self;

    public function intrinsic(): string;

    public function size(): int;
}
