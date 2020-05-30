- [Laravel](#laravel)
  - [導入](#導入)
  - [DBからModelを作成](#dbからmodelを作成)
    - [Eloquent Model Generator をインストールする](#eloquent-model-generator-をインストールする)

# Laravel
## 導入
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

2. 実際に動かす
    コマンドラインで下記のコマンドを実行
    ~~~
    php artisan krlove:generate:model [ModelName] --table-name=[DBTableName] --output-path=Models --namespace=App\\Models --no-timestamps
    ~~~
    上記コマンドのプロパティ説明
    [ModelName] -> プロジェクト上のモデル名
    [DBTableName] -> モデル化したいDB上のテーブル名

    下記のように表示されれば成功です
    ~~~ php
    # php artisan krlove:generate:model Commentmeta --table-name=wp_commentmeta --output-path=Models/Wp --namespace=App\\Models\\Wp --no-timestamps
    Model Commentmeta generated
    ~~~