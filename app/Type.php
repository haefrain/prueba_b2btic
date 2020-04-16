<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\File;

class Type extends Model
{
    protected $table = 'types';
    protected $fillable = ['name'];

    public function files()
    {
        return $this->hasMany(File::class);
    }
}
