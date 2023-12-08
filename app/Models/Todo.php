<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $table = 'todos';

    protected $fillable = ['title', 'completed'];

    protected $casts = [
        'completed' => 'boolean',
    ];

    public function check(bool $value): void
    {
        $this->update(['completed' => ! $value]);
    }
}
