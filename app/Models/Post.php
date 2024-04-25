<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int status
 */
class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'category_id', 'status'];
//    protected $guarded = [];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tags(): BelongsToMany
    {
//        return $this->belongsToMany(Tag::class)->withPivot(['created_at']);
        return $this->belongsToMany(Tag::class)->as('ts')->withTimestamps();
    }

    public function isPublished()
    {
        return $this->status ? 'Published' : 'Not published';
    }

}
