<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\RegExpRecord;

interface HasEitherUnicodeFlag
{
    /** @see https://tc39.es/ecma262/#sec-haseitherunicodeflag */
    public function __invoke(RegExpRecord $rer): BooleanValue;
}
