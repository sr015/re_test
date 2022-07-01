<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'body',
    ];
    public function getPaginateByLimit(int $limit_count=10)
    {
        // updated_atで降順に並べた後、limitで件数制限をかける
        return $this ->orderBy('updated_at', 'DESC')->Paginate(5);
    }
}
