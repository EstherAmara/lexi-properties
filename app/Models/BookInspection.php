<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookInspection extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function property()
    {
        return $this->hasOne(Properties::class, 'id', 'property_id');
    }
}
