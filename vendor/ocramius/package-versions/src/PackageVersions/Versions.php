<?php

declare(strict_types=1);

namespace PackageVersions;

use OutOfBoundsException;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = 'laravel/laravel';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'asm89/stack-cors' => '1.3.0@b9c31def6a83f84b4d4a40d35996d375755f0e08',
  'brick/math' => '0.8.15@9b08d412b9da9455b210459ff71414de7e6241cd',
  'dnoegel/php-xdg-base-dir' => 'v0.1.1@8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd',
  'doctrine/cache' => '1.10.1@35a4a70cd94e09e2259dfae7488afc6b474ecbd3',
  'doctrine/dbal' => '2.10.2@aab745e7b6b2de3b47019da81e7225e14dcfdac8',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'dragonmantank/cron-expression' => 'v2.3.0@72b6fbf76adb3cf5bc0db68559b33d41219aba27',
  'egulias/email-validator' => '2.1.18@cfa3d44471c7f5bfb684ac2b0da7114283d78441',
  'ezyang/htmlpurifier' => 'v4.12.0@a617e55bc62a87eec73bd456d146d134ad716f03',
  'fideloper/proxy' => '4.4.0@9beebf48a1c344ed67c1d36bb1b8709db7c3c1a8',
  'fruitcake/laravel-cors' => 'v1.0.6@1d127dbec313e2e227d65e0c483765d8d7559bf6',
  'guzzlehttp/guzzle' => '6.5.5@9d4290de1cfd701f38099ef7e183b64b4b7b0c5e',
  'guzzlehttp/promises' => 'v1.3.1@a59da6cf61d80060647ff4d3eb2c03a2bc694646',
  'guzzlehttp/psr7' => '1.6.1@239400de7a173fe9901b9ac7c06497751f00727a',
  'intervention/image' => '2.5.1@abbf18d5ab8367f96b3205ca3c89fb2fa598c69e',
  'laravel/framework' => 'v7.17.2@d16ff3a0a66d98e04163456b39c4b7302cf50a40',
  'laravel/helpers' => 'v1.2.0@1f978fc5dad9f7f906b18242c654252615201de4',
  'laravel/sanctum' => 'v2.4.2@cf07490b92e07ee6206f712d4502e8a2a41f5049',
  'laravel/socialite' => 'v4.4.1@80951df0d93435b773aa00efe1fad6d5015fac75',
  'laravel/tinker' => 'v2.4.0@cde90a7335a2130a4488beb68f4b2141869241db',
  'laravel/ui' => 'v2.0.3@15368c5328efb7ce94f35ca750acde9b496ab1b1',
  'lcobucci/jwt' => '3.3.2@56f10808089e38623345e28af2f2d5e4eb579455',
  'league/commonmark' => '1.5.0@fc33ca12575e98e57cdce7d5f38b2ca5335714b3',
  'league/flysystem' => '1.0.69@7106f78428a344bc4f643c233a94e48795f10967',
  'league/glide' => '1.5.0@a5477e9e822ed57b39861a17092b92553634932d',
  'league/oauth1-client' => '1.7.0@fca5f160650cb74d23fc11aa570dd61f86dcf647',
  'maennchen/zipstream-php' => '2.1.0@c4c5803cc1f93df3d2448478ef79394a5981cc58',
  'mews/purifier' => '3.2.2@75e4d9a0553b31c1fd31aef65f9561c30dbe5e5e',
  'mint/service' => 'dev-master@7292753bce02409bf67eb1bdf5342f5b49e02141',
  'monolog/monolog' => '2.1.0@38914429aac460e8e4616c8cb486ecb40ec90bb1',
  'myclabs/php-enum' => '1.7.6@5f36467c7a87e20fbdc51e524fd8f9d1de80187c',
  'nesbot/carbon' => '2.35.0@4b9bd835261ef23d36397a46a76b496a458305e5',
  'nexmo/client' => '2.0.0@664082abac14f6ab9ceec9abaf2e00aeb7c17333',
  'nexmo/client-core' => '2.1.0@ef7e8a0715c93c5ddc7915e8a29f29331798bb52',
  'nexmo/laravel' => '2.2.0@57b62d985ae59d2f15f970883ea445b7fda56652',
  'nikic/php-parser' => 'v4.5.0@53c2753d756f5adb586dca79c2ec0e2654dd9463',
  'ocramius/package-versions' => '1.9.0@94c9d42a466c57f91390cdd49c81313264f49d85',
  'opis/closure' => '3.5.5@dec9fc5ecfca93f45cd6121f8e6f14457dff372c',
  'paragonie/random_compat' => 'v9.99.99@84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
  'paragonie/sodium_compat' => 'v1.13.0@bbade402cbe84c69b718120911506a3aa2bae653',
  'php-http/guzzle6-adapter' => 'v2.0.1@6074a4b1f4d5c21061b70bab3b8ad484282fe31f',
  'php-http/httplug' => '2.1.0@72d2b129a48f0490d55b7f89be0d6aa0597ffb06',
  'php-http/promise' => 'v1.0.0@dc494cdc9d7160b9a09bd5573272195242ce7980',
  'phpoption/phpoption' => '1.7.4@b2ada2ad5d8a32b89088b8adc31ecd2e3a13baf3',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.0@496a823ef742b632934724bf769560c2a5c7c44e',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.10.4@a8aec1b2981ab66882a01cce36a49b6317dc3560',
  'pusher/pusher-php-server' => 'v4.1.4@e75e5715e3b651ec20dee5844095aadefab81acb',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.0.1@925ad8cf55ba7a3fc92e332c58fd0478ace3e1ca',
  'ramsey/uuid' => '4.0.1@ba8fff1d3abb8bb4d35a135ed22a31c6ef3ede3d',
  'spatie/db-dumper' => '2.16.1@56448e8f41d4e8e83babf701d5708b1e597e8ec6',
  'spatie/image' => '1.7.6@74535b5fd67ace75840c00c408666660843e755e',
  'spatie/image-optimizer' => '1.2.1@9c1d470e34b28b715d25edb539dd6c899461527c',
  'spatie/laravel-activitylog' => '3.14.2@f1261c461ee4a92fd1e72012b516147ba28a91bb',
  'spatie/laravel-backup' => '6.11.1@3ede36961b79b6ea4a6b5f708f2cc60fee74ad6c',
  'spatie/laravel-medialibrary' => '8.3.2@a834a75abc739c8b0181e6eb68073b85b9b419dd',
  'spatie/laravel-permission' => '3.13.0@49b8063fbb9ec52ebef98cc6ec527a80d8853141',
  'spatie/temporary-directory' => '1.2.3@eeb84a7a3543e90759cd852ccb468e3d3340d99d',
  'spatie/valuestore' => '1.2.3@798897f7d571aa0a62786ae531d573d3c6af55d0',
  'swiftmailer/swiftmailer' => 'v6.2.3@149cfdf118b169f7840bbe3ef0d4bc795d1780c9',
  'symfony/console' => 'v5.1.2@34ac555a3627e324b660e318daa07572e1140123',
  'symfony/css-selector' => 'v5.1.2@e544e24472d4c97b2d11ade7caacd446727c6bf9',
  'symfony/deprecation-contracts' => 'v2.1.2@dd99cb3a0aff6cadd2a8d7d7ed72c2161e218337',
  'symfony/error-handler' => 'v5.1.2@7d0b927b9d3dc41d7d46cda38cbfcd20cdcbb896',
  'symfony/event-dispatcher' => 'v5.1.2@cc0d059e2e997e79ca34125a52f3e33de4424ac7',
  'symfony/event-dispatcher-contracts' => 'v2.1.2@405952c4e90941a17e52ef7489a2bd94870bb290',
  'symfony/finder' => 'v5.1.2@4298870062bfc667cb78d2b379be4bf5dec5f187',
  'symfony/http-foundation' => 'v5.1.2@f93055171b847915225bd5b0a5792888419d8d75',
  'symfony/http-kernel' => 'v5.1.2@a18c27ace1ef344ffcb129a5b089bad7643b387a',
  'symfony/mime' => 'v5.1.2@c0c418f05e727606e85b482a8591519c4712cf45',
  'symfony/polyfill-ctype' => 'v1.17.1@2edd75b8b35d62fd3eeabba73b26b8f1f60ce13d',
  'symfony/polyfill-iconv' => 'v1.17.1@ba6c9c18db36235b859cc29b8372d1c01298c035',
  'symfony/polyfill-intl-grapheme' => 'v1.17.1@6e4dbcf5e81eba86e36731f94fe56b1726835846',
  'symfony/polyfill-intl-idn' => 'v1.17.1@a57f8161502549a742a63c09f0a604997bf47027',
  'symfony/polyfill-intl-normalizer' => 'v1.17.1@40309d1700e8f72447bb9e7b54af756eeea35620',
  'symfony/polyfill-mbstring' => 'v1.17.1@7110338d81ce1cbc3e273136e4574663627037a7',
  'symfony/polyfill-php72' => 'v1.17.0@f048e612a3905f34931127360bdd2def19a5e582',
  'symfony/polyfill-php73' => 'v1.17.1@fa0837fe02d617d31fbb25f990655861bb27bd1a',
  'symfony/polyfill-php80' => 'v1.17.1@4a5b6bba3259902e386eb80dd1956181ee90b5b2',
  'symfony/process' => 'v5.1.2@7f6378c1fa2147eeb1b4c385856ce9de0d46ebd1',
  'symfony/routing' => 'v5.1.2@bbd0ba121d623f66d165a55a108008968911f3eb',
  'symfony/service-contracts' => 'v2.1.2@66a8f0957a3ca54e4f724e49028ab19d75a8918b',
  'symfony/string' => 'v5.1.2@ac70459db781108db7c6d8981dd31ce0e29e3298',
  'symfony/translation' => 'v5.1.2@d387f07d4c15f9c09439cf3f13ddbe0b2c5e8be2',
  'symfony/translation-contracts' => 'v2.1.2@e5ca07c8f817f865f618aa072c2fe8e0e637340e',
  'symfony/var-dumper' => 'v5.1.2@46a942903059b0b05e601f00eb64179e05578c0f',
  'tijsverkoyen/css-to-inline-styles' => '2.2.2@dda2ee426acd6d801d5b7fd1001cde9b5f790e15',
  'twilio/sdk' => '6.8.0@1c3c2ac948581d0c1e410374ff6c4155c85f1e10',
  'vlucas/phpdotenv' => 'v4.1.7@db63b2ea280fdcf13c4ca392121b0b2450b51193',
  'voku/portable-ascii' => '1.5.2@618631dc601d8eb6ea0a9fbf654ec82f066c4e97',
  'zendframework/zend-diactoros' => '2.2.1@de5847b068362a88684a55b0dbb40d85986cfa52',
  'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea',
  'facade/flare-client-php' => '1.3.2@db1e03426e7f9472c9ecd1092aff00f56aa6c004',
  'facade/ignition' => '2.0.7@e6bedc1e74507d584fbcb041ebe0f7f215109cf2',
  'facade/ignition-contracts' => '1.0.0@f445db0fb86f48e205787b2592840dd9c80ded28',
  'filp/whoops' => '2.7.3@5d5fe9bb3d656b514d455645b3addc5f7ba7714d',
  'fzaninotto/faker' => 'v1.9.1@fc10d778e4b84d5bd315dad194661e091d307c6f',
  'hamcrest/hamcrest-php' => 'v2.0.0@776503d3a8e85d4f9a1148614f95b7a608b046ad',
  'laravel/telescope' => 'v3.5.0@2e44c32c4e0b2442b118e73116582d1236b621f5',
  'mockery/mockery' => '1.4.0@6c6a7c533469873deacf998237e7649fc6b36223',
  'moontoast/math' => '1.2.1@5f47d34c87767dbcc08b30377a9827df71de91fa',
  'myclabs/deep-copy' => '1.9.5@b2c28789e80a97badd14145fda39b545d83ca3ef',
  'nunomaduro/collision' => 'v5.0.0-BETA4@805929cb4bb6b24ef56a28a4121eb1336803effd',
  'pestphp/pest' => 'v0.1.5@ddc08cf0f9947462ed8bbbe206e72de639e8fcf7',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'phpdocumentor/reflection-common' => '2.1.0@6568f4687e5b41b054365f9ae03fcb1ed5f2069b',
  'phpdocumentor/reflection-docblock' => '5.1.0@cd72d394ca794d3466a3b2fc09d5a6c1dc86b47e',
  'phpdocumentor/type-resolver' => '1.2.0@30441f2752e493c639526b215ed81d54f369d693',
  'phpseclib/bcmath_compat' => '1.0.5@89cbb63742a32730b7187773a60b6b12b9db4479',
  'phpseclib/phpseclib' => '2.0.27@34620af4df7d1988d8f0d7e91f6c8a3bf931d8dc',
  'phpspec/prophecy' => 'v1.10.3@451c3cd1418cf640de218914901e51b064abb093',
  'phpunit/php-code-coverage' => '8.0.2@ca6647ffddd2add025ab3f21644a441d7c146cdc',
  'phpunit/php-file-iterator' => '3.0.2@eba15e538f2bb3fe018b7bbb47d2fe32d404bfd2',
  'phpunit/php-invoker' => '3.0.1@62f696ad0d140e0e513e69eaafdebb674d622b4c',
  'phpunit/php-text-template' => '2.0.1@0c69cbf965d5317ba33f24a352539f354a25db09',
  'phpunit/php-timer' => '5.0.0@b0d089de001ba60ffa3be36b23e1b8150d072238',
  'phpunit/php-token-stream' => '4.0.2@e61c593e9734b47ef462340c24fca8d6a57da14e',
  'phpunit/phpunit' => '9.2.5@ad7cc5ec3ab2597b329880e30442d9054526023b',
  'scrivo/highlight.php' => 'v9.18.1.1@52fc21c99fd888e33aed4879e55a3646f8d40558',
  'sebastian/code-unit' => '1.0.3@d650ef9b1fece15ed4d6eaed6e6b469b7b81183a',
  'sebastian/code-unit-reverse-lookup' => '2.0.1@c771130f0e8669104a4320b7101a81c2cc2963ef',
  'sebastian/comparator' => '4.0.2@266d85ef789da8c41f06af4093c43e9798af2784',
  'sebastian/diff' => '4.0.1@3e523c576f29dacecff309f35e4cc5a5c168e78a',
  'sebastian/environment' => '5.1.1@16eb0fa43e29c33d7f2117ed23072e26fc5ab34e',
  'sebastian/exporter' => '4.0.1@d12fbca85da932d01d941b59e4b71a0d559db091',
  'sebastian/global-state' => '4.0.0@bdb1e7c79e592b8c82cb1699be3c8743119b8a72',
  'sebastian/object-enumerator' => '4.0.1@15f319d67c49fc55ebcdbffb3377433125588455',
  'sebastian/object-reflector' => '2.0.1@14e04b3c25b821cc0702d4837803fe497680b062',
  'sebastian/recursion-context' => '4.0.1@a32789e5f0157c10cf216ce6c5136db12a12b847',
  'sebastian/resource-operations' => '3.0.1@71421c1745788de4facae1b79af923650bd3ec15',
  'sebastian/type' => '2.1.0@bad49207c6f854e7a25cef0ea948ac8ebe3ef9d8',
  'sebastian/version' => '3.0.0@0411bde656dce64202b39c2f4473993a9081d39e',
  'theseer/tokenizer' => '1.1.3@11336f6f84e16a720dae9d8e6ed5019efa85a0f9',
  'webmozart/assert' => '1.9.0@9dc4f203e36f2b486149058bade43c851dd97451',
  'laravel/laravel' => 'No version set (parsed as 1.0.0)@',
);

    private function __construct()
    {
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
