- [Laravel](#laravel)
  - [導入](#導入)
    - [PHP](#php)
    - [mysql](#mysql)
    - [composer](#composer)
    - [Laravel](#laravel-1)
    - [visual Studio Code](#visual-studio-code)
  - [DBからModelを作成](#dbからmodelを作成)
    - [Eloquent Model Generator をインストールする](#eloquent-model-generator-をインストールする)
    - [Eloquent Model Generator を使用する](#eloquent-model-generator-を使用する)
  - [scssファイルからcssファイルを生成する](#scssファイルからcssファイルを生成する)
    - [composerでscssをインストールする](#composerでscssをインストールする)
    - [scssをcssに変換する](#scssをcssに変換する)
  - [サイトマップ作成](#サイトマップ作成)

# Laravel
## 導入
### PHP
1. PHP 7.4.6
### mysql
1. mysql  Ver 8.0.20 for Win64 on x86_64 (MySQL Community Server - GPL)
### composer
1. Composer version 1.10.6
### Laravel
1. krlove - eloquent-model-generator
2. krlove - code-generator
3. "panique/laravel-sass": "dev-master"
### visual Studio Code
1. Atom One Dark Theme
2. Auto Rename Tag
3. Bookmarks
4. Bracket Pair Colorizer
5. C/C++
6. C#
7. Draw.io Integration
8. Git Graph
9. Highlight Matching Tag
10. indent-rainbow
11. Japanese Language Pack for Visual Studio Code
12. Laravel 5 Snippets
13. Larabel Artisan
14. Laravel Blade Snippets
15. Markdown All in One
16. Markdown TOC
17. Night Owl
18. Path Autocomplete
19. PHP Debug
20. PHP Intelephense
21. Prettier Code formatter
22. Python
23. Text Tables
24. vscode-icons
## DBからModelを作成
### Eloquent Model Generator をインストールする
1. コマンドライン上で下記のコマンドを実行
    ~~~
    composer require krlove/eloquent-model-generator --dev
    ~~~

1. インストール出来ているか確認
   コマンドライン上で下記のコマンドを実行
   ~~~
   php artisan help krlove:generate:model
   ~~~
   ヘルプ情報が出力されれば成功
   ~~~
   Usage:
    krlove:generate:model [options] [--] <class-name>

    Arguments:
      class-name                                Model class name

    Options:
      -b, --backup                              Backup existing model
      -h, --help                                Display this help message
      -q, --quiet                               Do not output any message
      -V, --version                             Display this application    version
          --ansi                                Force ANSI output
          --no-ansi                             Disable ANSI output
      -n, --no-interaction                      Do not ask any interactive  question
          --env[=ENV]                           The environment the command     should run under
      -tn, --table-name[=TABLE-NAME]            Name of the table to use
      -op, --output-path[=OUTPUT-PATH]          Directory to store generated    model
      -ns, --namespace[=NAMESPACE]              Namespace of the model
      -bc, --base-class-name[=BASE-CLASS-NAME]  Model parent class
      -ts, --no-timestamps                      Set timestamps property to  false
      -df, --date-format[=DATE-FORMAT]          dateFormat property
      -cn, --connection[=CONNECTION]            Connection property
      -v|vv|vvv, --verbose                      Increase the verbosity of   messages: 1 for normal output, 2 for more verbose output and 3 for debug
    ~~~

### Eloquent Model Generator を使用する
  - コマンドラインで下記のコマンドを実行
    
    ~~~
    php artisan krlove:generate:model [ModelName] --table-name=[DBTableName] --output-path=Models --namespace=App\\Models  --no-timestamps
    ~~~
    
    上記コマンドのプロパティ説明<br>
    [ModelName] -> プロジェクト上のモデル名<br>
    [DBTableName] -> モデル化したいDB上のテーブル名

  - 下記のように表示されれば成功です
    ~~~ php
    # php artisan krlove:generate:model Commentmeta --table-name=wp_commentmeta --output-path=Models/Wp --namespace=App\\Models\\Wp --no-timestamps
    Model Commentmeta generated
    ~~~
## scssファイルからcssファイルを生成する
### composerでscssをインストールする
1. Laravelプロジェクトフォルダにあるcomposer.jsonに以下のコードを追記する
    ~~~ php
    "require"{
    "panique/laravel-sass": "dev-master"
    }
    ~~~
1. コマンドプロンプト上でcomposer updateを実行する
      ~~~
      composer update
      ~~~
### scssをcssに変換する
  1. index.phpの最終行に以下のコードを追記する
      ~~~ php
      SassCompiler::run("scss/", "css/");
      ~~~
  1. index.blade.phpの場合は以下のコードを追記する
      ~~~ php
      {{ SassCompiler::run("scss/", "css/") }}
      ~~~
  2. publicフォルダに「scss」,「css」フォルダを作成する
  3. 3で作成した「scss」フォルダに変換したい「.scss」ファイルを設置する
  4. index.php(もしくはindex.blade.php)をブラウザから呼び出せば「css」フォルダに変換後のファイルが作成される
## サイトマップ作成
1. 最初の行を変更する

  - 変更前

    ~~~ xml
    <?xml version="1.0" encoding="UTF-8"?>
    ~~~

  - 変更後

    ~~~ php
    <?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
    ~~~