<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\InputElements;

/**
 * The InputElementRegExpOrTemplateTail goal is used in syntactic grammar contexts where
 * a RegularExpressionLiteral, a TemplateMiddle, or a TemplateTail is permitted.
 */
interface InputElementRegExp extends InputElement
{
}
