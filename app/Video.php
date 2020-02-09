<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\CommentableTrait;

class Video extends Model
{
    use CommentableTrait;
}
