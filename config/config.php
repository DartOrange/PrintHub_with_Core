<?php



return [
        'id'                  => 'app-frontend',
        'basePath'            => dirname(__DIR__),
        'controllerNamespace' => 'frontend\controllers',
        'homeUrl'             => '/',
        'language'            => 'ru',
        'components'          => [
            'urlManager'   => [
                'class'                        => 'codemix\localeurls\UrlManager',
                'enablePrettyUrl'              => true,
                'showScriptName'               => false,
                'enableDefaultLanguageUrlCode' => true,
                'enableLanguagePersistence'    => true,
                // List all supported languages here
                // Make sure, you include your app's default language.
//            'languages'                    => ['uk', 'ru', 'en'],
                'languages'                    => ['ru', 'en','ua'],
                'rules'                        => [
                    // 'search/search'       => 'search',
                    '<controller>/index'                  => '<controller>',
//                '<controller>/<slug:[\w-]+>'   => '<controller>/view',
                    'products/<slug:[\w-]+>'              => 'products/view',
                    'services/<slug:[\w-]+>'              => 'services/view',
                    'posts/<slug:[\w-]+>'                 => 'posts/view',
                    //'search/<slug:[\w-]+>'          => 'search/search',
                    'special-offers/<slug:[\w-]+>'        => 'special-offers/view',
                    'special-offer-service/<slug:[\w-]+>' => 'special-offer-service/view',
//                    'services/<slug:[\w-]+>'              => 'services/view',
                    '<controller>application/form'        => '<controller>',
                    '<controller>tests/form'           => '<controller>'
                	],
        		]
        	]
        ];