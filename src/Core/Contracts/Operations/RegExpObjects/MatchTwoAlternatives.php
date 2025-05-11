<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Values\Matcher;

interface MatchTwoAlternatives
{
    /** @see https://tc39.es/ecma262/#sec-matchtwoalternatives */
    public function __invoke(Matcher $m1, Matcher $m2): Matcher;
}
