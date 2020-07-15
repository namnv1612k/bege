<?php

namespace App\Providers;

use App\Models\User;
use App\Observers\UserObserver;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Laravel\Cashier\Cashier;

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
            /*$format = "<?php echo '$' . number_format($amount, 2); ?>";
            $locale = App::getLocale();
            if ($locale == 'vi') {*/
            //            }
            return "<?php echo '₫' . number_format($amount, 0, '', ','); ?>";
        });

        Cashier::ignoreMigrations();

        User::observe(UserObserver::class);
    }
}
