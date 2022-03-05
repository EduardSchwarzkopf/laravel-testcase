<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['url', 'body', 'active'];

    public function clientMeta()
    {
        return $this->hasOne(ClientMeta::class);
    }

    public function testHistories()
    {
        return $this->hasMany(TestHistory::class);
    }
}
