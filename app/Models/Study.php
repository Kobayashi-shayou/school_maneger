<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    use HasFactory;

	//リレーションコード
        public function user() {
                return $this->belongsTo('App\Models\User', 'user_id');
        }

        public function Instructor() {
                return $this->belongsTo('App\Models\Instructor', 'instructor_id');
        }
}
