<?php

namespace App\Http\Controllers;

use App\articles;
use App\categories;
use config;
use Illuminate\Http\Request;

class Blog extends Controller
{
    /** @var article */
    protected $article;

    /** @var category */
    protected $category;

    const numPerPage = 10;
    
    
    function __construct(articles $article, categories $category)
    {
        $this->article = $article;
        $this->category = $category;
    }

    /**
     * カテゴリ一覧画面
     * 
     * @return view(blog.category)
     */
    public function category()
    {
        $list = $this->category->getCategoryList(self::numPerPage);

        return view('blog.category', compact('list'));
    }

}
