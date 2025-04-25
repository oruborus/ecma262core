<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts;

use Deprecated;
use Oru\EcmaScript\Core\Contracts\Values\ValueFactory;

interface Interpreter
{
    #[Deprecated('Inject `ValueFactory`')]
    public function getValueFactory(): ValueFactory;

    public function enterStrictMode(): void;

    public function isInStrictMode(): bool;

    public function leaveStrictMode(): void;
}
