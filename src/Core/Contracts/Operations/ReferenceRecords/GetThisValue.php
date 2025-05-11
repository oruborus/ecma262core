<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ReferenceRecords;

use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ReferenceRecord;

interface GetThisValue
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-getthisvalue
     */
    public function __invoke(ReferenceRecord $v): LanguageValue;
}
