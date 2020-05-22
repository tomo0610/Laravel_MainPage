<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Cache;

class CacheController extends Controller
{
  protected $table;
  protected $id;

  public function __construct()
  {
    $this->table = 'users';
  }

  /**
   * キャッシュを全削除する
   */
  public function flush()
  {
    // キャッシュ全削除
    Cache::flush();
  }
}