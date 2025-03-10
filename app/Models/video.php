<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'thumbnail',
        'video_url',
        'category',
        'user_id',
        'views'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Increment views count
    public function incrementViews()
    {
        $this->views++;
        $this->save();
    }
}
