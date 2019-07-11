<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Task extends Model
{
    protected $fillable = [
        'name',
        'card_id',
        'id',
        'complete',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    protected function card() {
        return  $this->belongsTo(Card::class);
    }
}