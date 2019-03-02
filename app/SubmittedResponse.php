<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class SubmittedResponse extends Model
{
    protected $fillable = [
        'set_type',
        'response_content',
        'user_id'
    ];

    protected $casts = [
        'response_content' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(get_class(new User));
    }
}
