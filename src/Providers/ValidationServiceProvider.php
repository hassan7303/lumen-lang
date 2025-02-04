<?php

namespace lumenLang;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Log;

class ValidationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        try {
            Log::info('ValidationServiceProvider is booting...');

            $langPath = base_path('resources/lang/fa');
            
            if (!is_dir($langPath)) {
                mkdir($langPath, 0755, true);
                Log::info("Created lang directory at: {$langPath}");
            }

            $packageLangFile = __DIR__ . '/../../translations/fa/validation.php';
            $destinationLangFile = $langPath . '/validation.php';

            if (!file_exists($destinationLangFile)) {
                if (copy($packageLangFile, $destinationLangFile)) {
                    Log::info("Copied language file to: {$destinationLangFile}");
                } else {
                    Log::error("Failed to copy language file from {$packageLangFile} to {$destinationLangFile}");
                }
            } else {
                Log::info("Language file already exists: {$destinationLangFile}");
            }

            app()->setLocale(env('APP_LOCALE', 'fa'));
            Log::info('Locale has been set to fa');

        } catch (\Exception $e) {
            Log::error('Error in ValidationServiceProvider: ' . $e->getMessage());
        }
    }
}