<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;


/**
 * @see https://262.ecma-international.org/12.0/#sec-reference-record-specification-type
 */
interface ReferenceRecord extends SpecificationValue
{
    // FIXME: The use of `null` stands for `unresolvable`
    public function setBase(null|LanguageValue|EnvironmentRecord $value): void;

    // FIXME: The use of `null` stands for `unresolvable`
    public function getBase(): null|LanguageValue|EnvironmentRecord;

    public function setReferencedName(StringValue|SymbolValue $value): void;

    public function getReferencedName(): StringValue|SymbolValue;

    public function setStrict(BooleanValue $value): void;

    public function getStrict(): BooleanValue;

    public function setThisValue(LanguageValue $value): void;

    public function getThisValue(): LanguageValue;
}
