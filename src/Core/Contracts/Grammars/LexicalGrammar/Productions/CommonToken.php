<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions;

interface CommonToken extends InputElementDiv, InputElementRegExp, InputElementRegExpOrTemplateTail, InputElementTemplateTail {}
