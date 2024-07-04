<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts;

use Oru\EcmaScript\Core\Contracts\Nodes\Node;
use Oru\EcmaScript\Core\Contracts\Values\Value;
use Oru\EcmaScript\Core\Contracts\Values\ValueFactory;

interface Interpreter
{
    public function run(Node $node, Agent $agent): ?Value;

    public function getValueFactory(): ValueFactory;

    public function enterStrictMode(): void;

    public function isInStrictMode(): bool;

    public function leaveStrictMode(): void;
}
