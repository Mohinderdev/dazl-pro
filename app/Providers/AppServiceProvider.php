<?php

namespace App\Providers;

use App\ThirdParties\UploadImages\Cloudinary\CloudinaryFactory;
use Spatie\BladeX\Facades\BladeX;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Modules\Language\Models\Language;
use App\ThirdParties\UploadImages\ImagesFactoryInterface;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        try {
            $languages = Language::active()->get();
            // TODO: get defult language not all
            $default_language = Language::Default()->first();
            \View::share('languages', $languages);
            \View::share('default_language', $default_language);

        } catch (\Exception $e) {
        }

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ImagesFactoryInterface::class, function ($app) {
            return (env('IMAGE_THIRD_PARTY_PROVIDER') == 'cloudinary') ? new CloudinaryFactory()  : '';
        });
        if ($this->app->isLocal()) {
            $this->app->register(TelescopeServiceProvider::class);
        }
    }
}
