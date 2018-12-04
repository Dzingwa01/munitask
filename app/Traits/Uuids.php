<?php
/**
 * Created by PhpStorm.
 * User: Tongai
 * Date: 2018/12/04
 * Time: 10:43
 */
namespace App\Traits;
use Webpatser\Uuid\Uuid;

trait Uuids
{
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Uuid::generate()->string;
        });
    }
}
