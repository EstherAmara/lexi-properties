<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;

    protected $guarded = [];

    const ACTIVE = 'active',
        INACTIVE = 'inactive',
        INDEX = 'index';

    public function isIndex() {
        return $this->status === self::INDEX;
    }
}
