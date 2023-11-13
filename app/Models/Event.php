<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'detail',
        'date_start',
        'date_end',
        'qr_url',
        'cover_url',
        'address',
        'creator_id',
        'photographer_id',
    ];

    public function organizer()
    {
        return $this->hasOne(User::class, 'id', 'creator_id');
    }


    public function photographer()
    {
        return $this->belongsTo(Photographer::class, 'photographer_id', 'id');
    }


    public function photos()
    {
        return $this->hasMany(Photo::class);
    }




}
