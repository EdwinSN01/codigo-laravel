<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Auth\Events\Registered;
use App\Events\ServicioSaved;
use App\Listeners\OptimizeServicioImage;
use App\Listeners\SendEmailVerificationNotification;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ServicioSaved::class => [
            OptimizeServicioImage::class,
        ],
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        // Aquí puedes registrar otros servicios o componentes adicionales si es necesario.
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        parent::boot();

        // Aquí puedes realizar tareas de inicialización después de que los servicios hayan sido registrados.
    }
}
