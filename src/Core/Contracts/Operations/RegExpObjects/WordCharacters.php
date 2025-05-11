<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Values\CharSet;
use Oru\EcmaScript\Core\Contracts\Values\RegExpRecord;

interface WordCharacters
{
    /** @see https://tc39.es/ecma262/#sec-wordcharacters */
    public function __invoke(RegExpRecord $rer): CharSet;
}
