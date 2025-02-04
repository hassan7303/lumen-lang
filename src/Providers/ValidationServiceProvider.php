<?php

namespace lumenLang;

use Illuminate\Support\ServiceProvider;

class ValidationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $bootstrapPath = base_path('bootstrap/app.php');

        $content = file_get_contents($bootstrapPath);
        if (!str_contains($content, '$app->setLocale(')) {
            $newContent = str_replace(
                'return $app;',
                "\$app->setLocale(env('APP_LOCALE', 'fa'));\n\nreturn \$app;",
                $content
            );

            file_put_contents($bootstrapPath, $newContent);
        }

        $langPath = base_path('resources/lang/fa');
        if (!is_dir($langPath)) {
            mkdir($langPath, 0755, true);
        }
        
        $packageLangFile = __DIR__ . '/translations/fa.php';

        $destinationLangFile = $langPath . '/validation.php';

        if (!file_exists($destinationLangFile)) {
            copy($packageLangFile, $destinationLangFile);
        }
    }
}