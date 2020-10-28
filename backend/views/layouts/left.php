<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../img/github.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Admin Site</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form> -->
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu Utama', 'options' => ['class' => 'header']],
                    [
                        'label' => 'User Manual', 'icon' => 'dashboard', 'url' => ['/'],
                    ],
                    [
                        'label' => 'Daftar Kategori', 'icon' => 'eye', 'url' => ['/category/index'],
                    ],
                    [
                        'label' => 'Daftar Ukuran', 'icon' => 'eye', 'url' => ['/size/index'],
                    ],
                    [
                        'label' => 'Daftar Produk', 'icon' => 'eye', 'url' => ['/product/index'],
                    ],
                    [
                        'label' => 'Daftar Gambar', 'icon' => 'eye', 'url' => ['/images/index'],
                    ],
                    [
                        'label' => 'Daftar Admin', 'icon' => 'eye', 'url' => ['/admin/index'],
                    ],
                    // [
                    //     'label' => 'Menu',
                    //     'icon' => 'share',
                    //     'url' => '#',
                    //     'items' => [
                    //         ['label' => 'Produk', 'icon' => 'eye', 'url' => ['/product/index']],
                    //         ['label' => 'Kategori', 'icon' => 'eye', 'url' => ['/category/index']],
                    //         ['label' => 'Gambar', 'icon' => 'eye', 'url' => ['/images/index']],
                    //         ['label' => 'Ukuran', 'icon' => 'eye', 'url' => ['/size/index']],
                    //     ]
                    // ],
                    // ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    // ['label' => 'Gii', 'icon' => 'plus', 'url' => ['/gii']],
                    // ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    // ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Menu Penambahan', 'options' => ['class' => 'header']],
                    [
                        'label' => 'Tambah',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Tambah Kategori', 'icon' => 'plus', 'url' => ['category/create']],
                            ['label' => 'Tambah Ukuran', 'icon' => 'plus', 'url' => ['size/create']],
                            // ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            // ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Produk',
                                'icon' => 'plus',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Tambah Produk', 'icon' => 'plus', 'url' => ['product/create']],
                                    ['label' => 'Tambah Gambar', 'icon' => 'plus', 'url' => ['images/create']],
                                ],
                            ],
                        ],
                    ],
                    ['label' => '', 'options' => ['class' => 'header']],
                    // [
                    //     'label' => 'Keluar', 'icon' => 'sign-out', 'url' => ['/site/logout'], 
                    //     'template'=>'<a href="{url}" data-method="post">{label}</a>'
                    // ],
                ],
            ]
        ) ?>

    </section>

</aside>
