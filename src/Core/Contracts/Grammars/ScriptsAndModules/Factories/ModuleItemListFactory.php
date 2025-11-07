<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ModuleItem;
use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ModuleItemList;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ModuleItemListFactory
{
    public function create(
        ModuleItemList $moduleItemList,
        ModuleItem $moduleItem,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ModuleItemList;
}
