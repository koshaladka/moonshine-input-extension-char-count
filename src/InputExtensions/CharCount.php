<?php

declare(strict_types=1);

namespace Koshaladka\InputExtensionCharCount\InputExtensions;

use MoonShine\InputExtensions\InputExtension;
use phpDocumentor\Reflection\Types\CallableParameter;

class CharCount extends InputExtension
{
    protected static string $view = 'char-count::input-extensions.char-count';

    protected array $xData = [
        'charCount: $refs.extensionInput.value.length',
        'init() {
            const input = this.$refs.extensionInput;
            input.addEventListener(`input`, () => {
                this.charCount = input.value.length
            })
        }',
    ];

}
