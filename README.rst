Acme\AKB48バンドル (Symfony2)
=============================

Symfony2 の機能を学ぶためのジョークバンドルです。似たものに Perl の `Acme::AKB48 <https://github.com/hidek/Acme-AKB48>` があります。
Acme\AKB48Bundle では、Doctrine2 のモデル機能等を試せるように、メンバーひとりひとりを個別のクラスで実装するのではなく、Member エンティティとし、フィクスチャーにてデータベースにメンバー情報を登録するようにしてあります。


注意
----

Symfony2 Standard Edition BETA3 では、Doctrine ORM 2.0.5 を利用していますが、本バンドルでは 2.0.5 以降に追加されたメソッドを利用していますので、ご注意ください。



インストール
------------

Symfony2 の Standard Edition をインストールした状態で、プロジェクトの `src\Acme` ディレクトリ（なければ作成する）へ `AKB48Bundle` を配置してください。git をお使いであれば、次のコマンドを実行します。

::

    $ git clone git://github.com/Symfonyans/AcmeAKB48Bundle.git src/Acme/AKB48Bundle

git サブモジュールを使う場合は次のようにします。

::

    $ git submodule add -f git://github.com/Symfonyans/AcmeAKB48Bundle.git src/Acme/AKB48Bundle


バンドルのファイルを配置したら、次に `app/autoload.php` ファイルを開き、`Acme` 名前空間の読み込みディレクトリを設定します。

::

    $loader->registerNamespaces(array(
        （・・・・）
        'Acme'                              => __DIR__.'/../src',
        （・・・・）
    ));

Standard Editionの場合は、デフォルトで上のような行が追加されています。

次に、\ `Acme\AKB48Bundle` をカーネルで読み込むようにします。\ `app/AppKernel.php` を開き、\ `registerBundles()` メソッドに以下のように追加します。

::

    public function registerBundles()
    {
        $bundles = array(
            （・・・・）
            new Acme\AKB48Bundle\AcmeAKB48Bundle(),
        );

最後に、Acme\AKB48Bundle へブラウザからアクセスできるように、ルーティングを有効にします。\ `app/config/routing.yml` ファイルを開き、以下のように修正します（他の行は削除してください）。

::

    AKB48:
        resource: "@AcmeAKB48Bundle/Resources/config/routing.yml"


データベースの準備とフィクスチャーの登録
----------------------------------------

Acme\AKB48Bundle では、メンバーのデータをフィクスチャーで管理していますので、動作を確認するためにはデータベースをセットアップし、フィクスチャーを登録する必要があります。


データベースを準備する
~~~~~~~~~~~~~~~~~~~~~~

`app/config/parameters.ini` ファイルを開き、使用するデータベースの情報を設定してください。その後、次のコマンドを実行してデータベースを初期化します。

::

    $ php app/console doctrine:database:create
    $ php app/console doctrine:schema:create

この状態で、dev環境向けのデータベースが作成され、Member テーブルが登録されています。


フィクスチャーを登録する
~~~~~~~~~~~~~~~~~~~~~~~~

フィクスチャーの登録用コマンドを利用するには、あらかじめ DoctrineFixtures バンドルなどをセットアップする必要があります。公式ドキュメントの `How to create Fixtures in Symfony2 <http://symfony.com/doc/current/cookbook/doctrine/doctrine_fixtures.html>`_ を参照してインストールしてください。

ライブラリがセットアップできたら、\ `doctrine:fixtures:load` コマンドを使えるようになりますので、これを実行します。

::

    $ php app/console doctrine:fixtures:load


データが登録されているか確認する
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

次のコマンドを実行すると、登録されたデータを確認できます。

::

    $ php app/console akb48:list


AKB48アプリケーションへのアクセス
---------------------------------

データの準備ができたら、以下の URL へアクセスすると、メンバーの一覧が表示されます。

::

    http://（ホスト・サブディレクトリ）/app_dev.php/


説明
----

あまり複雑なことはしていませんので、コントローラやエンティティ、リポジトリのコードを読んでください。
ただ、特にコントローラのコードを見ていただくと分かりますが、plain な Symfony2 のコントローラコードでは EntityManager の呼び出しコードなどがやや冗長になります。こういった部分は、共通コントローラクラスを作るなど、工夫することでコードがスッキリできます。
Symfony2 の StandardEdition では、Sensio\FrameworkExtraBundle が組み込まれており、これによってアクションメソッドのアノテーションを使ってルーティングや使用するテンプレートを設定できるようになっています。この点は、学習を始める際に注意が必要です。


Tested
------

* Symfony2 beta3
* Symfony2 beta1 (f8cc8a7deba67ac4fc7c76b5b6bac03add3fbb40)


ライセンス
----------

MIT License

