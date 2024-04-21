<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "email"
    ];

    public function name(): Attribute {
        return Attribute::make(
            set: fn($name) => ucwords($name),
        );
    }
    public function email(): Attribute {
        return Attribute::make(
            set: fn($email) => Str::lower($email),
        );
    }
}