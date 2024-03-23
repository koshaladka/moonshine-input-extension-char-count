<?php

declare(strict_types=1);

namespace Koshaladka\InputExtensionCharCount\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

final class CharCountServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        Blade::anonymousComponentPath(__DIR__ . '/../../resources/views', 'char-count');
    }
}
