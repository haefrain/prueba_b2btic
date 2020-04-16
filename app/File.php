<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Type;

class File extends Model
{
    protected $table = 'files';
    protected $fillable = ['code', 'name'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
