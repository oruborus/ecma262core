<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes;

interface StringLiteral extends Literal, ModuleExportName
{
    public function getRawValue(): string;

    public function getValue(): string;
}
