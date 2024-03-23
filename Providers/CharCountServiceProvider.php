<?php

declare(strict_types=1);

namespace Koshaladka\InputExtensionCharCount\Providers;

use Illuminate\Support\ServiceProvider;

final class CharCountServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'char-count');

    }
}
