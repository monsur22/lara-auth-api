<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Organization extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'type',
        'size',
        'started_at',
        'settlement_month',
        'expiration_date',
        'status',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }
    public $incrementing = false;

    /**
     * Sets the UUID value for the primary key field.
     */
    protected function setUUID()
    {
        $this->id = preg_replace('/\./', '', uniqid('bpm', true));
    }
}
