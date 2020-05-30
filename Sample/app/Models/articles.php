<?php

namespace App\\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $articleId
 * @property int $categoryId
 * @property string $postDate
 * @property string $title
 * @property string $body
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class articles extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'articleId';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['categoryId', 'postDate', 'title', 'body', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

}
