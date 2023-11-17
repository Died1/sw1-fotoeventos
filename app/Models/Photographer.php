<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Photographer extends User
{

    use HasFactory;

    protected $table = 'users';

     // Añade una condición específica para los fotógrafos
     protected static function booted()
     {
         static::addGlobalScope('photographer', function ($builder) {
             $builder->where('type', 'photographer');
         });
     }


    public function eventsAssigned()
    {
        return $this->hasMany(Event::class, 'photographer_id');
    }

    public function addPhotoToEvent(Event $event, Photo $photo)
    {
        if ($this->id === $event->photographer_id) {
            // El fotógrafo está asignado al evento
            $event->addPhoto($photo);
        }
    }


}
