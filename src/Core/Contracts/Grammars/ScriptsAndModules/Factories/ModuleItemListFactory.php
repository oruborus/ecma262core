<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ModuleItem;
use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ModuleItemList;

interface ModuleItemListFactory
{
    public function create(ModuleItemList $moduleItemList, ModuleItem $moduleItem): ModuleItemList;
}
