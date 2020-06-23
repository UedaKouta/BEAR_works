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
    public const ROOT_PACKAGE_NAME = 'polidog/todo';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'aura/cli' => '2.2.0@d69cfa6d81e94e13d831e38ad9e3d53aa0f08a8b',
  'aura/filter' => '2.3.1@ac33b700379d1cb978a077328425153060a91ab5',
  'aura/html' => '2.5.0@eda14b491f45fe2e1d1fec3364b1c783d7b7da31',
  'aura/input' => '1.2.1@e9805708280c64e72573ccc60c2cd9972a6459b8',
  'aura/installer-default' => '1.0.0@52f8de3670cc1ef45a916f40f732937436d028c8',
  'aura/router' => '3.1.0@52507bc813c92511dbcacc7463f163ef5149ad38',
  'aura/session' => '2.1.0@7d2f7d41ad693970b5b6b83facca0961d3378883',
  'aura/sql' => '2.6.0@16206efbe5ba63603fe3b18ba54a4c5296cd5f3e',
  'aura/sqlquery' => '2.7.1@dd81b57aeb43628180a9c70a4df58d872024d7f2',
  'aws/aws-sdk-php' => '3.142.0@0d1c6f5cc98640af39c0ea77f329ada775b70fe6',
  'bear/app-meta' => '1.6.1@01842581e63991472ec775a04ea413dec1bfaae6',
  'bear/aura-router-module' => '2.1.0@2f4ddd5b6deb0ecf09d03eb2ae31ed00ad0d46cf',
  'bear/package' => '1.9.7@95b050b41fcb1557599a1279c1ae2a1dd35af4e6',
  'bear/query-repository' => '1.6.7@5604d52ee2c28d50ead368684f7ccd7b9580e1bf',
  'bear/resource' => '1.14.2@a1a66b90af2e9e4434340c5b8e503dcc6691cf1e',
  'bear/streamer' => '1.1.0@4ba3b5c083b16416842ad7e354962af848524d84',
  'bear/sunday' => '1.4.0@b52e2575f09bc68522c624d6d6e9e32c3a5eed86',
  'doctrine/annotations' => '1.10.3@5db60a4969eba0e0c197a19c077780aadbc43c5d',
  'doctrine/cache' => '1.10.1@35a4a70cd94e09e2259dfae7488afc6b474ecbd3',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'egulias/email-validator' => '2.1.18@cfa3d44471c7f5bfb684ac2b0da7114283d78441',
  'guzzlehttp/guzzle' => '6.5.4@a4a1b6930528a8f7ee03518e6442ec7a44155d9d',
  'guzzlehttp/promises' => 'v1.3.1@a59da6cf61d80060647ff4d3eb2c03a2bc694646',
  'guzzlehttp/psr7' => '1.6.1@239400de7a173fe9901b9ac7c06497751f00727a',
  'ircmaxell/random-lib' => 'v1.2.0@e9e0204f40e49fa4419946c677eccd3fa25b8cf4',
  'ircmaxell/security-lib' => 'v1.1.0@f3db6de12c20c9bcd1aa3db4353a1bbe0e44e1b5',
  'justinrainbow/json-schema' => '5.2.10@2ba9c8c862ecd5510ed16c6340aa9f6eadb4f31b',
  'koriym/http-constants' => '1.1.5@b8d0b27883b7f68856a5667cf2a2ea80e6610c68',
  'koriym/psr4list' => '1.0.2@9d9dd97730c0b179b5b235280f69ff6698c47767',
  'laminas/laminas-dependency-plugin' => '1.0.4@38bf91861f5b4d49f9a1c530327c997f7a7fb2db',
  'laminas/laminas-diactoros' => '1.8.7p2@6991c1af7c8d2c8efee81b22ba97024781824aaa',
  'laminas/laminas-zendframework-bridge' => '1.0.4@fcd87520e4943d968557803919523772475e8ea3',
  'madapaja/twig-module' => '2.2.1@1bb996eef869b324e9635ff270d3ce95f556813e',
  'mobiledetect/mobiledetectlib' => '2.8.34@6f8113f57a508494ca36acbcfa2dc2d923c7ed5b',
  'monolog/monolog' => '2.1.0@38914429aac460e8e4616c8cb486ecb40ec90bb1',
  'mtdowling/jmespath.php' => '2.5.0@52168cb9472de06979613d365c7f1ab8798be895',
  'nikic/php-parser' => 'v4.5.0@53c2753d756f5adb586dca79c2ec0e2654dd9463',
  'nocarrier/hal' => '0.9.12@08ffddf52733633403e0f4ca6e949b0c7cc186f8',
  'pagerfanta/pagerfanta' => 'v1.1.0@8400ab498e500018cff9a099ac22555e7949aa9a',
  'phpdocumentor/reflection-common' => '2.1.0@6568f4687e5b41b054365f9ae03fcb1ed5f2069b',
  'phpdocumentor/reflection-docblock' => '4.3.4@da3fd972d6bafd628114f7e7e036f45944b62e9c',
  'phpdocumentor/type-resolver' => '1.1.0@7462d5f123dfc080dfdf26897032a6513644fc95',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ray/aop' => '2.9.7@d6db4dff38e7de003807d5b41be56dc41e561c72',
  'ray/aura-session-module' => '1.1.0@858c4c9c43d1bab2bc775477fc84e52ea7ec5567',
  'ray/aura-sql-module' => '1.8.0@399cb5eba79dae1aa1bbd097b881aa977b19c131',
  'ray/compiler' => '1.3.7@8aebda1463f48f9e17b898e67904e6ecd4862d89',
  'ray/di' => '2.10.1@cdad41efdaf7ee4a542f5abb9dc1fa54aa34d57f',
  'ray/web-form-module' => '0.6.0@4b6d33adb4a5c285278a068f3e7a5afdc4e680d9',
  'ray/web-param-module' => '2.0.3@2c127414495bf9fdb2bdb579330793eb4d02a16d',
  'rize/uri-template' => '0.3.2@9e5fdd5c47147aa5adf7f760002ee591ed37b9ca',
  'swiftmailer/swiftmailer' => 'v6.2.3@149cfdf118b169f7840bbe3ef0d4bc795d1780c9',
  'symfony/console' => 'v4.4.9@326b064d804043005526f5a0494cfb49edb59bb0',
  'symfony/http-client' => 'v5.1.0@63342eabdc6fc6c12e6b18506a207d16687aa33f',
  'symfony/http-client-contracts' => 'v2.1.2@f8bed25edc964d015bcd87f1fec5734963931910',
  'symfony/polyfill-ctype' => 'v1.17.0@e94c8b1bbe2bc77507a1056cdb06451c75b427f9',
  'symfony/polyfill-iconv' => 'v1.17.1@ba6c9c18db36235b859cc29b8372d1c01298c035',
  'symfony/polyfill-intl-idn' => 'v1.17.0@3bff59ea7047e925be6b7f2059d60af31bb46d6a',
  'symfony/polyfill-mbstring' => 'v1.17.0@fa79b11539418b02fc5e1897267673ba2c19419c',
  'symfony/polyfill-php72' => 'v1.17.0@f048e612a3905f34931127360bdd2def19a5e582',
  'symfony/polyfill-php73' => 'v1.17.0@a760d8964ff79ab9bf057613a5808284ec852ccc',
  'symfony/polyfill-php80' => 'v1.17.0@5e30b2799bc1ad68f7feb62b60a73743589438dd',
  'symfony/service-contracts' => 'v2.1.2@66a8f0957a3ca54e4f724e49028ab19d75a8918b',
  'tavicu/bootstrap-confirmation' => 'dev-master@21ebf8f858c7655185a63728529ddd20a4418610',
  'twig/twig' => 'v2.12.5@18772e0190734944277ee97a02a9a6c6555fcd94',
  'webmozart/assert' => '1.8.0@ab2cb0b3b559010b75981b1bdce728da3ee90ad6',
  'amphp/amp' => 'v2.4.4@1e58d53e4af390efc7813e36cd215bd82cba4b06',
  'amphp/byte-stream' => 'v1.7.3@b867505edb79dda8f253ca3c3a2bbadae4b16592',
  'bear/qatools' => '1.9.7@22fe6dcd6e8dab18b2337d00efeebcd1aa2f9c3a',
  'composer/semver' => '1.5.1@c6bea70230ef4dd483e6bbcab6005f682ed3a8de',
  'composer/xdebug-handler' => '1.4.1@1ab9842d69e64fb3a01be6b656501032d1b78cb7',
  'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea',
  'felixfbecker/advanced-json-rpc' => 'v3.1.1@0ed363f8de17d284d479ec813c9ad3f6834b5c40',
  'felixfbecker/language-server-protocol' => 'v1.4.0@378801f6139bb74ac215d81cca1272af61df9a9f',
  'friendsofphp/php-cs-fixer' => 'v2.16.3@83baf823a33a1cbd5416c8626935cf3f843c10b0',
  'josegonzalez/dotenv' => '3.2.0@f19174d9d7213a6c20e8e5e268aa7dd042d821ca',
  'm1/env' => '2.2.0@5c296e3e13450a207e12b343f3af1d7ab569f6f3',
  'mayflower/php-codebrowser' => '2.3.1@79342b7b7ba8e1ff194cb511ed080362aa1bd7fb',
  'myclabs/deep-copy' => '1.9.5@b2c28789e80a97badd14145fda39b545d83ca3ef',
  'netresearch/jsonmapper' => 'v2.1.0@e0f1e33a71587aca81be5cffbb9746510e1fe04e',
  'ocramius/package-versions' => '1.8.0@421679846270a5772534828013a93be709fb13df',
  'openlss/lib-array2xml' => '1.0.0@a91f18a8dfc69ffabe5f9b068bc39bb202c81d90',
  'paragonie/random_compat' => 'v9.99.99@84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
  'pdepend/pdepend' => '2.7.1@daba1cf0a6edaf172fa02a17807ae29f4c1c7471',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'php-cs-fixer/diff' => 'v1.3.0@78bb099e9c16361126c86ce82ec4405ebab8e756',
  'phploc/phploc' => '5.0.0@5b714ccb7cb8ca29ccf9caf6eb1aed0131d3a884',
  'phpmd/phpmd' => '2.8.2@714629ed782537f638fe23c4346637659b779a77',
  'phpmetrics/phpmetrics' => 'v2.6.2@67ac2cea23c6f9c5bdfd1c98fc0e55eef16ef59d',
  'phpspec/prophecy' => 'v1.10.3@451c3cd1418cf640de218914901e51b064abb093',
  'phpstan/phpstan' => '0.12.25@9619551d68b2d4c0d681a8df73f3c847c798ee64',
  'phpunit/php-code-coverage' => '7.0.10@f1884187926fbb755a9aaf0b3836ad3165b478bf',
  'phpunit/php-file-iterator' => '2.0.2@050bedf145a257b1ff02746c31894800e5122946',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.2@1038454804406b0b5f5f520358e78c1c2f71501e',
  'phpunit/php-token-stream' => '3.1.1@995192df77f63a59e47f025390d2d1fdf8f425ff',
  'phpunit/phpunit' => '8.5.5@63dda3b212a0025d380a745f91bdb4d8c985adb7',
  'psalm/plugin-phpunit' => '0.10.1@138998ffd32b76a2e69eb1ff94ef2bf110967273',
  'roave/security-advisories' => 'dev-master@de6fda3af9b36c77fdeb62b968157032f7111b09',
  'sebastian/code-unit-reverse-lookup' => '1.0.1@4419fcdb5eabb9caa61a27c7a1db532a6b55dd18',
  'sebastian/comparator' => '3.0.2@5de4fc177adf9bce8df98d8d141a7559d7ccf6da',
  'sebastian/diff' => '3.0.2@720fcc7e9b5cf384ea68d9d930d480907a0c1a29',
  'sebastian/environment' => '4.2.3@464c90d7bdf5ad4e8a6aea15c091fec0603d4368',
  'sebastian/exporter' => '3.1.2@68609e1261d215ea5b21b7987539cbfbe156ec3e',
  'sebastian/finder-facade' => '1.2.3@167c45d131f7fc3d159f56f191a0a22228765e16',
  'sebastian/global-state' => '3.0.0@edf8a461cf1d4005f19fb0b6b8b95a9f7fa0adc4',
  'sebastian/object-enumerator' => '3.0.3@7cfd9e65d11ffb5af41198476395774d4c8a84c5',
  'sebastian/object-reflector' => '1.1.1@773f97c67f28de00d397be301821b06708fca0be',
  'sebastian/phpcpd' => '4.1.0@0d9afa762f2400de077b2192f4a9d127de0bb78e',
  'sebastian/recursion-context' => '3.0.0@5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8',
  'sebastian/resource-operations' => '2.0.1@4d7a795d35b889bf80a0cc04e08d77cedfa917a9',
  'sebastian/type' => '1.1.3@3aaaa15fa71d27650d62a948be022fe3b48541a3',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'squizlabs/php_codesniffer' => '3.5.5@73e2e7f57d958e7228fce50dc0c61f58f017f9f6',
  'symfony/config' => 'v5.1.0@b8623ef3d99fe62a34baf7a111b576216965f880',
  'symfony/dependency-injection' => 'v5.1.0@6a6791e9584273b32eeb01790da4c7446d87a621',
  'symfony/deprecation-contracts' => 'v2.1.2@dd99cb3a0aff6cadd2a8d7d7ed72c2161e218337',
  'symfony/event-dispatcher' => 'v4.4.9@a5370aaa7807c7a439b21386661ffccf3dff2866',
  'symfony/event-dispatcher-contracts' => 'v1.1.7@c43ab685673fb6c8d84220c77897b1d6cdbe1d18',
  'symfony/filesystem' => 'v5.1.0@6e4320f06d5f2cce0d96530162491f4465179157',
  'symfony/finder' => 'v5.1.0@4298870062bfc667cb78d2b379be4bf5dec5f187',
  'symfony/options-resolver' => 'v5.1.0@663f5dd5e14057d1954fe721f9709d35837f2447',
  'symfony/polyfill-php70' => 'v1.17.0@82225c2d7d23d7e70515496d249c0152679b468e',
  'symfony/process' => 'v5.1.0@7f6378c1fa2147eeb1b4c385856ce9de0d46ebd1',
  'symfony/stopwatch' => 'v5.1.0@0f7c58cf81dbb5dd67d423a89d577524a2ec0323',
  'theseer/fdomdocument' => '1.6.6@6e8203e40a32a9c770bcb62fe37e68b948da6dca',
  'theseer/tokenizer' => '1.1.3@11336f6f84e16a720dae9d8e6ed5019efa85a0f9',
  'vimeo/psalm' => '3.11.5@3c60609c218d4d4b3b257728b8089094e5c6c6c2',
  'webmozart/glob' => '4.1.0@3cbf63d4973cf9d780b93d2da8eec7e4a9e63bbe',
  'webmozart/path-util' => '2.3.0@d939f7edc24c9a1bb9c0dee5cb05d8e859490725',
  'polidog/todo' => 'dev-work@f0af8a088897e3292026ce1da1e8e32ae9533700',
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
