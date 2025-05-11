<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Values\CharSet;
use Oru\EcmaScript\Core\Contracts\Values\RegExpRecord;

interface MaybeSimpleCaseFolding
{
    /** @see https://tc39.es/ecma262/#sec-maybesimplecasefolding */
    public function __invoke(RegExpRecord $rer, CharSet $a): CharSet;
}
