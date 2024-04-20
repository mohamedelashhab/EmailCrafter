<?php

namespace Domain\Subscriber\Models;

use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Subscriber extends BaseModel
{
    protected $fillable = [
        'email',
        'first_name',
        'last_name',
        'form_id',
        'user_id'
    ];

    public function tags() : BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
