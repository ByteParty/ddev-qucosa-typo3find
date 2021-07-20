<?php
return [
    'BE' => [
        'debug' => true,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$pbkdf2-sha256$25000$mBUjL2/OUPjPlQbJMScPjQ$gZ2EF/NCl6VnuQ4CITTgtupdQOotCexZvUoegri7eJE',
        'loginSecurityLevel' => 'normal',
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'driver' => 'mysqli',
            ],
        ],
    ],
    'EXT' => [
        'extConf' => [
            'backend' => 'a:5:{s:9:"loginLogo";s:0:"";s:19:"loginHighlightColor";s:0:"";s:20:"loginBackgroundImage";s:0:"";s:11:"backendLogo";s:0:"";s:14:"backendFavicon";s:0:"";}',
            'dlf' => 'a:24:{s:15:"metadataFormats";s:1:"0";s:9:"useragent";s:19:"Kitodo.Presentation";s:16:"forceAbsoluteUrl";s:1:"0";s:21:"forceAbsoluteUrlHttps";s:1:"0";s:7:"caching";s:1:"0";s:21:"publishNewCollections";s:1:"1";s:13:"unhideOnIndex";s:1:"0";s:13:"fileGrpImages";s:11:"DEFAULT,MAX";s:13:"fileGrpThumbs";s:6:"THUMBS";s:15:"fileGrpDownload";s:8:"DOWNLOAD";s:15:"fileGrpFulltext";s:8:"FULLTEXT";s:12:"fileGrpAudio";s:5:"AUDIO";s:16:"indexAnnotations";s:1:"0";s:18:"iiifThumbnailWidth";s:3:"150";s:19:"iiifThumbnailHeight";s:3:"150";s:11:"solrConnect";s:1:"0";s:9:"solrHttps";s:1:"0";s:8:"solrHost";s:9:"localhost";s:8:"solrPort";s:4:"8983";s:8:"solrPath";s:1:"/";s:8:"solrUser";s:0:"";s:8:"solrPass";s:0:"";s:11:"solrTimeout";s:2:"10";s:19:"solrAllowCoreDelete";s:1:"0";}',
            'dpf' => 'a:11:{s:9:"swordHost";s:9:"localhost";s:9:"swordUser";s:4:"user";s:13:"swordPassword";s:8:"password";s:24:"swordCollectionNamespace";s:6:"qucosa";s:10:"fedoraHost";s:9:"localhost";s:10:"fedoraUser";s:4:"user";s:14:"fedoraPassword";s:8:"password";s:17:"elasticSearchHost";s:9:"localhost";s:17:"elasticSearchPort";s:4:"9200";s:15:"uploadDirectory";s:14:"uploads/tx_dpf";s:12:"uploadDomain";s:0:"";}',
            'extensionmanager' => 'a:2:{s:21:"automaticInstallation";s:1:"1";s:11:"offlineMode";s:1:"0";}',
            'find' => 'a:0:{}',
            'realurl' => 'a:6:{s:10:"configFile";s:26:"typo3conf/realurl_conf.php";s:14:"enableAutoConf";s:1:"1";s:14:"autoConfFormat";s:1:"0";s:17:"segTitleFieldList";s:0:"";s:12:"enableDevLog";s:1:"0";s:10:"moduleIcon";s:1:"0";}',
            'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
            'rte_ckeditor' => 'a:1:{s:15:"ckeditorVersion";s:6:"latest";}',
            'saltedpasswords' => 'a:2:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\Pbkdf2Salt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\Pbkdf2Salt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}}',
            'scheduler' => 'a:4:{s:11:"maxLifetime";s:4:"1440";s:11:"enableBELog";s:1:"1";s:15:"showSampleTasks";s:1:"1";s:11:"useAtdaemon";s:1:"0";}',
        ],
    ],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [
                'de',
            ],
        ],
    ],
    'FE' => [
        'debug' => true,
        'enableRecordRegistration' => false,
        'loginSecurityLevel' => 'normal',
        'pageNotFoundOnCHashError' => false,
    ],
    'GFX' => [
        'jpg_quality' => '80',
        'processor' => 'ImageMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'sRGB',
        'processor_effects' => 1,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/local/bin/mailhog sendmail test@example.org --smtp-addr 127.0.0.1:1025',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'extbase_object' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
                    'groups' => [
                        'system',
                    ],
                    'options' => [
                        'defaultLifetime' => 0,
                    ],
                ],
            ],
        ],
        'devIPmask' => '*',
        'displayErrors' => 1,
        'enableDeprecationLog' => 'file',
        'encryptionKey' => '6ae180589fed37bbe059ad770b0be4e7d0596772621170f2aa3c836ab1083953f1d26d5f26be124949ac0be688c3ca10',
        'exceptionalErrors' => 28674,
        'isInitialDatabaseImportDone' => true,
        'isInitialInstallationInProgress' => false,
        'sitename' => 'Qucosa mit TYPO3find',
        'sqlDebug' => 1,
        'systemLogLevel' => 0,
    ],
];
