<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('money', function ($amount) {
            $format = "<?php echo '$' . number_format($amount, 2); ?>";
            $locale = App::getLocale();
            if ($locale == 'vi') {
                $format = "<?php echo number_format($amount*23335.50, 0, '', ','); . '  ₫' ?>";
            }
            return $format;
        });
    }
}
