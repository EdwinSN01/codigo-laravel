<?php

namespace App\Listeners;
use App\Events\ServicioSaved;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class OptimizeServicioImage implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ServicioSaved $event): void
    {
        $image = Image::make(Storage::get($event->servicio->image))
        ->widen(600)
        ->limitColors(255)
        ->encode();
        Storage::put($event->servicio->image,(string) $image);
    }
}
