<?php

namespace App\Listeners;

use App\Events\UserCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserCreatedListener
{
    use InteractsWithQueue;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserCreated  $event
     * @return void
     */
    public function handle(UserCreated $event)
    {
        $usuario = $event->user;

        // Busca el último vendedor creado en la misma transacción
        $vendedor = Vendedor::where('created_at', '>=', $usuario->created_at)->latest()->first();

        // Si el vendedor fue creado en la misma transacción, actualiza su ID
        if ($vendedor && $vendedor->created_at === $usuario->created_at) {
            $vendedor->id_vendedor = $usuario->id;
            $vendedor->save();
        }
    }
}

