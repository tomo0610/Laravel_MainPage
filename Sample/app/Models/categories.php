<?php

namespace App\\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $categoryId
 * @property string $name
 * @property integer $displayOrder
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class categories extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'categoryId';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'displayOrder', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

    
    /**
     * カテゴリリストを取得する
     *
     * @param int    $num_per_page 1ページ当たりの表示件数
     * @param string $order        並び順の基準となるカラム
     * @param string $direction    並び順の向き asc or desc
     * @return mixed
     */
    public function getCategoryList(int $num_per_page = 0, string $order = 'display_order', string $direction = 'asc')
    {
        $query = $this->orderBy($order, $direction);
        if ($num_per_page) {
            return $query->paginate($num_per_page);
        }
        return $query->get();
    }

}
