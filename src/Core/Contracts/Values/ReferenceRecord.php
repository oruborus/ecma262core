<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Oru\EcmaScript\Core\Contracts\Agent;

/**
 * @see https://262.ecma-international.org/12.0/#sec-reference-record-specification-type
 */
interface ReferenceRecord extends SpecificationValue
{
    // FIXME: The use of `null` stands for `unresolvable`
    public function setBase(null|LanguageValue|EnvironmentRecord $value): void;

    // FIXME: The use of `null` stands for `unresolvable`
    public function getBase(Agent $agent): null|LanguageValue|EnvironmentRecord;

    public function setReferencedName(StringValue|SymbolValue $value): void;

    public function getReferencedName(Agent $agent): StringValue|SymbolValue;

    public function setStrict(BooleanValue $value): void;

    public function getStrict(Agent $agent): BooleanValue;

    public function setThisValue(LanguageValue $value): void;

    public function getThisValue(Agent $agent): LanguageValue;
}
