<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = array('title', 'thumb', 'used_language', 'link');

    public function isImageAUrl() {
        return filter_var($this->thumb, FILTER_VALIDATE_URL);
    }
}
