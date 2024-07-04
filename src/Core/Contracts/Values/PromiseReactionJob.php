<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Oru\EcmaScript\Core\Contracts\Agent;

interface PromiseReactionJob extends SpecificationValue
{
    /**
     * @return callable(Agent):LanguageValue
     */
    public function job(): callable;

    public function realm(): NullValue|RealmRecord;
}
