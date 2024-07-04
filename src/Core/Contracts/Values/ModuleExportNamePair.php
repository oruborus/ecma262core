<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Oru\EcmaScript\Core\Contracts\Nodes\Module;

interface ModuleExportNamePair extends SpecificationValue
{
    /**
     * @psalm-mutation-free
     */
    public function module(): Module;

    /**
     * @psalm-mutation-free
     */
    public function exportName(): StringValue;
}
