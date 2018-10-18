<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
    protected $table = 'posts';

    // Primary Key
    protected $primaryKey = 'id';

    // Timestamps
    public $timestamps = true;

    /**
     * Cada post tem pelo menos um usuário
     */
    public function user() {
        return $this->belongsTo('App\User');
    }
}
