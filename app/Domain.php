<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    protected $fillable = [
      'server_id', 'name', 'domain', 'expires', 'note'
    ];

    protected $casts = ['expires' => 'date'];

    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where('name', 'like', '%'.$query.'%');
    }

    public function server()
    {
        return $this->belongsTo(Server::class);
    }

}
