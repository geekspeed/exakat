.. Annex:

Annex
=====

* Supported Rulesets
* Supported Reports
* Supported PHP Extensions
* Supported Frameworks
* Applications
* Recognized Libraries
* New analyzers
* External services
* PHP Error messages

Supported Rulesets
------------------

Exakat groups analysis by rulesets. This way, analyzing 'Security' runs all possible analysis related to security. One analysis may belong to multiple rulesets.

* All
* Analyze
* Appcontent
* Appinfo
* Calisthenics
* ClassReview
* ClearPHP
* Coding Conventions
* CompatibilityPHP53
* CompatibilityPHP54
* CompatibilityPHP55
* CompatibilityPHP56
* CompatibilityPHP70
* CompatibilityPHP71
* CompatibilityPHP72
* CompatibilityPHP73
* CompatibilityPHP74
* CompatibilityPHP80
* Complete
* Custom
* Dead code
* DefensiveProgrammingTM
* Dismell
* Dump
* First
* Internal
* Inventory
* Level 1
* Level 2
* Level 3
* Level 4
* Level 5
* LintButWontExec
* Newfeatures
* OneFile
* PHP recommendations
* Performances
* Portability
* Preferences
* RadwellCodes
* SOLID
* Security
* Semantics
* Simple
* Stats
* Suggestions
* Top10
* Typechecks
* Unassigned
* Under Work
* php-cs-fixable

Supported Reports
-----------------

Exakat produces various reports. Some are general, covering various aspects in a reference way; others focus on one aspect. 

  * Ambassador
  * Ambassadornomenu
  * Drillinstructor
  * Top10
  * Text
  * Xml
  * Uml
  * Yaml
  * Plantuml
  * None
  * Simplehtml
  * Owasp
  * Perfile
  * Phpconfiguration
  * Phpcompilation
  * Favorites
  * Manual
  * Stubs
  * Inventories
  * Clustergrammer
  * Filedependencies
  * Filedependencieshtml
  * Classdependencies
  * Radwellcode
  * Grade
  * Weekly
  * Scrutinizer
  * Codesniffer
  * Phpcsfixer
  * Facetedjson
  * Json
  * Onepagejson
  * Marmelab
  * Simpletable
  * Exakatyaml
  * Codeflower
  * Dependencywheel
  * Phpcity
  * Sarb


Supported PHP Extensions
------------------------

PHP extensions are used to check for structures usage (classes, interfaces, etc.), to identify dependencies and directives. 

PHP extensions are described with the list of structures they define : functions, classes, constants, traits, variables, interfaces, namespaces, and directives. 

* `ext/amqp <https://github.com/alanxz/rabbitmq-c>`_
* `ext/apache <http://php.net/manual/en/book.apache.php>`_
* `ext/apc <http://php.net/apc>`_
* `ext/apcu <http://www.php.net/manual/en/book.apcu.php>`_
* `ext/array <http://php.net/manual/en/book.array.php>`_
* `ext/php-ast <https://pecl.php.net/package/ast>`_
* `ext/async <https://github.com/concurrent-php/ext-async>`_
* `ext/bcmath <http://www.php.net/bcmath>`_
* `ext/bzip2 <http://php.net/bzip2>`_
* `ext/cairo <https://cairographics.org/>`_
* `ext/calendar <http://www.php.net/manual/en/ref.calendar.php>`_
* `ext/cmark <https://github.com/commonmark/cmark>`_
* `ext/com <http://php.net/manual/en/book.com.php>`_
* `ext/crypto <https://pecl.php.net/package/crypto>`_
* `ext/csprng <http://php.net/manual/en/book.csprng.php>`_
* `ext/ctype <http://php.net/manual/en/ref.ctype.php>`_
* `ext/curl <http://php.net/manual/en/book.curl.php>`_
* `ext/cyrus <http://php.net/manual/en/book.cyrus.php>`_
* `ext/date <http://php.net/manual/en/book.datetime.php>`_
* `ext/db2 <http://php.net/manual/en/book.ibm-db2.php>`_
* `ext/dba <http://php.net/manual/en/book.dba.php>`_
* `ext/decimal <http://php-decimal.io>`_
* `ext/dio <http://php.net/manual/en/refs.fileprocess.file.php>`_
* `ext/dom <http://php.net/manual/en/book.dom.php>`_
* `ext/ds <http://docs.php.net/manual/en/book.ds.php>`_
* `ext/eaccelerator <http://eaccelerator.net/>`_
* `ext/eio <http://software.schmorp.de/pkg/libeio.html>`_
* `ext/enchant <http://php.net/manual/en/book.enchant.php>`_
* `ext/ereg <http://php.net/manual/en/function.ereg.php>`_
* `ext/ev <http://php.net/manual/en/book.ev.php>`_
* `ext/event <http://php.net/event>`_
* `ext/exif <http://php.net/manual/en/book.exif.php>`_
* `ext/expect <http://php.net/manual/en/book.expect.php>`_
* `ext/fam <http://oss.sgi.com/projects/fam/>`_
* `ext/fann <http://php.net/manual/en/book.fann.php>`_
* `ext/fdf <http://www.adobe.com/devnet/acrobat/fdftoolkit.html>`_
* `ext/ffi <https://www.php.net/manual/en/book.ffi.php>`_
* `ext/ffmpeg <http://ffmpeg-php.sourceforge.net/>`_
* `ext/file <http://www.php.net/manual/en/book.filesystem.php>`_
* `ext/fileinfo <http://php.net/manual/en/book.fileinfo.php>`_
* `ext/filter <http://php.net/manual/en/book.filter.php>`_
* `ext/fpm <http://php.net/fpm>`_
* `ext/ftp <http://www.faqs.org/rfcs/rfc959>`_
* `ext/gd <http://php.net/manual/en/book.image.php>`_
* `ext/gearman <http://php.net/manual/en/book.gearman.php>`_
* `ext/gender <http://php.net/manual/en/book.gender.php>`_
* `ext/geoip <http://php.net/manual/en/book.geoip.php>`_
* `ext/gettext <https://www.gnu.org/software/gettext/manual/gettext.html>`_
* `ext/gmagick <http://www.php.net/manual/en/book.gmagick.php>`_
* `ext/gmp <http://php.net/manual/en/book.gmp.php>`_
* `ext/gnupgp <http://www.php.net/manual/en/book.gnupg.php>`_
* `ext/grpc <http://www.grpc.io/>`_
* `ext/hash <http://www.php.net/manual/en/book.hash.php>`_
* `ext/hrtime <http://php.net/manual/en/intro.hrtime.php>`_
* `ext/pecl_http <https://github.com/m6w6/ext-http>`_
* `ext/ibase <http://php.net/manual/en/book.ibase.php>`_
* `ext/iconv <http://php.net/iconv>`_
* `ext/igbinary <https://github.com/igbinary/igbinary/>`_
* `ext/iis <http://www.php.net/manual/en/book.iisfunc.php>`_
* `ext/imagick <http://php.net/manual/en/book.imagick.php>`_
* `ext/imap <http://www.php.net/imap>`_
* `ext/info <http://php.net/manual/en/book.info.php>`_
* `ext/inotify <http://php.net/manual/en/book.inotify.php>`_
* `ext/intl <http://site.icu-project.org/>`_
* `ext/json <http://www.faqs.org/rfcs/rfc7159>`_
* `ext/judy <http://judy.sourceforge.net/>`_
* `ext/kdm5 <http://php.net/manual/en/book.kadm5.php>`_
* `ext/lapack <http://php.net/manual/en/book.lapack.php>`_
* `ext/ldap <http://php.net/manual/en/book.ldap.php>`_
* `ext/leveldb <https://github.com/reeze/php-leveldb>`_
* `ext/libevent <http://www.libevent.org/>`_
* `ext/libsodium <https://github.com/jedisct1/libsodium-php>`_
* `ext/libxml <http://www.php.net/manual/en/book.libxml.php>`_
* `ext/lua <http://php.net/manual/en/book.lua.php>`_
* `ext/lzf <http://php.net/lzf>`_
* `ext/mail <http://www.php.net/manual/en/book.mail.php>`_
* `ext/mailparse <http://www.faqs.org/rfcs/rfc822.html>`_
* `ext/math <http://php.net/manual/en/book.math.php>`_
* `ext/mbstring <http://www.php.net/manual/en/book.mbstring.php>`_
* `ext/mcrypt <http://www.php.net/manual/en/book.mcrypt.php>`_
* `ext/memcache <http://www.php.net/manual/en/book.memcache.php>`_
* `ext/memcached <http://php.net/manual/en/book.memcached.php>`_
* `ext/mhash <http://mhash.sourceforge.net/>`_
* `ext/ming <http://www.libming.org/>`_
* `ext/mongo <http://php.net/mongo>`_
* `ext/mongodb <https://github.com/mongodb/mongo-c-driver>`_
* `ext/msgpack <https://github.com/msgpack/msgpack-php>`_
* `ext/mssql <http://www.php.net/manual/en/book.mssql.php>`_
* `ext/mysql <http://www.php.net/manual/en/book.mysql.php>`_
* `ext/mysqli <http://php.net/manual/en/book.mysqli.php>`_
* `ext/ncurses <http://php.net/manual/en/book.ncurses.php>`_
* `ext/newt <http://people.redhat.com/rjones/ocaml-newt/html/Newt.html>`_
* `ext/nsapi <http://php.net/manual/en/install.unix.sun.php>`_
* `ext/ob <http://php.net/manual/en/book.outcontrol.php>`_
* `ext/oci8 <http://php.net/manual/en/book.oci8.php>`_
* `ext/odbc <http://www.php.net/manual/en/book.uodbc.php>`_
* `ext/opcache <http://www.php.net/manual/en/book.opcache.php>`_
* `ext/opencensus <https://github.com/census-instrumentation/opencensus-php>`_
* `ext/openssl <http://php.net/manual/en/book.openssl.php>`_
* `ext/parle <http://php.net/manual/en/book.parle.php>`_
* `ext/parsekit <http://www.php.net/manual/en/book.parsekit.php>`_
* `ext/password <http://php.net/manual/en/book.password.php>`_
* `ext/pcntl <http://php.net/manual/en/book.pcntl.php>`_
* `ext/pcov <https://github.com/krakjoe/pcov>`_
* `ext/pcre <http://php.net/manual/en/book.pcre.php>`_
* `ext/pdo <http://php.net/manual/en/book.pdo.php>`_
* `ext/pgsql <http://php.net/manual/en/book.pgsql.php>`_
* `ext/phalcon <https://docs.phalconphp.com/en/latest/reference/tutorial.html>`_
* `ext/phar <http://www.php.net/manual/en/book.phar.php>`_
* `ext/posix <https://standards.ieee.org/findstds/standard/1003.1-2008.html>`_
* `ext/proctitle <http://php.net/manual/en/book.proctitle.php>`_
* `ext/pspell <http://php.net/manual/en/book.pspell.php>`_
* `ext/psr <https://www.php-fig.org/psr/psr-3>`_
* `ext/rar <http://php.net/manual/en/book.rar.php>`_
* `ext/rdkafka <https://github.com/arnaud-lb/php-rdkafka>`_
* `ext/readline <http://php.net/manual/en/book.readline.php>`_
* `ext/recode <http://www.php.net/manual/en/book.recode.php>`_
* `ext/redis <https://github.com/phpredis/phpredis/>`_
* `ext/reflection <http://php.net/manual/en/book.reflection.php>`_
* `ext/runkit <http://php.net/manual/en/book.runkit.php>`_
* `ext/sdl <https://github.com/Ponup/phpsdl>`_
* `ext/seaslog <https://github.com/SeasX/SeasLog>`_
* `ext/sem <http://php.net/manual/en/book.sem.php>`_
* `ext/session <http://php.net/manual/en/book.session.php>`_
* `ext/shmop <http://php.net/manual/en/book.sem.php>`_
* `ext/simplexml <http://php.net/manual/en/book.simplexml.php>`_
* `ext/snmp <http://www.net-snmp.org/>`_
* `ext/soap <http://php.net/manual/en/book.soap.php>`_
* `ext/sockets <http://php.net/manual/en/book.sockets.php>`_
* `ext/sphinx <http://php.net/manual/en/book.sphinx.php>`_
* `ext/spl <http://www.php.net/manual/en/book.spl.php>`_
* `ext/sqlite <http://php.net/manual/en/book.sqlite.php>`_
* `ext/sqlite3 <http://php.net/manual/en/book.sqlite3.php>`_
* `ext/sqlsrv <http://php.net/sqlsrv>`_
* `ext/ssh2 <http://php.net/manual/en/book.ssh2.php>`_
* `ext/standard <http://php.net/manual/en/ref.info.php>`_
* `ext/stats <https://people.sc.fsu.edu/~jburkardt/c_src/cdflib/cdflib.html>`_
* `String <http://php.net/manual/en/ref.strings.php>`_
* `ext/suhosin <https://suhosin.org/>`_
* `ext/svm <http://www.php.net/svm>`_
* `ext/swoole <https://www.swoole.com/>`_
* `ext/tidy <http://php.net/manual/en/book.tidy.php>`_
* `ext/tokenizer <http://www.php.net/tokenizer>`_
* `ext/tokyotyrant <http://php.net/manual/en/book.tokyo-tyrant.php>`_
* `ext/trader <https://pecl.php.net/package/trader>`_
* `ext/uopz <https://pecl.php.net/package/uopz>`_
* `ext/uuid <https://linux.die.net/man/3/libuuid>`_
* `ext/v8js <https://bugs.chromium.org/p/v8/issues/list>`_
* `ext/varnish <http://php.net/manual/en/book.varnish.php>`_
* `ext/vips <https://github.com/jcupitt/php-vips-ext>`_
* `ext/wasm <https://github.com/Hywan/php-ext-wasm>`_
* `ext/wddx <http://php.net/manual/en/intro.wddx.php>`_
* `ext/weakref <http://php.net/manual/en/book.weakref.php>`_
* `ext/wikidiff2 <https://www.mediawiki.org/wiki/Extension:Wikidiff2>`_
* `ext/wincache <http://www.php.net/wincache>`_
* `ext/xattr <http://php.net/manual/en/book.xattr.php>`_
* `ext/xcache <https://xcache.lighttpd.net/>`_
* `ext/xdebug <https://xdebug.org/>`_
* `ext/xdiff <http://php.net/manual/en/book.xdiff.php>`_
* `ext/xhprof <http://web.archive.org/web/20110514095512/http://mirror.facebook.net/facebook/xhprof/doc.html>`_
* `ext/xml <http://www.php.net/manual/en/book.xml.php>`_
* `ext/xmlreader <http://www.php.net/manual/en/book.xmlreader.php>`_
* `ext/xmlrpc <http://www.php.net/manual/en/book.xmlrpc.php>`_
* `ext/xmlwriter <http://php.net/manual/en/book.xmlwriter.php>`_
* `ext/xsl <http://php.net/manual/en/intro.xsl.php>`_
* `ext/xxtea <https://pecl.php.net/package/xxtea>`_
* `ext/yaml <http://www.yaml.org/>`_
* `ext/yis <http://www.tldp.org/HOWTO/NIS-HOWTO/index.html>`_
* `ext/zbarcode <https://github.com/mkoppanen/php-zbarcode>`_
* `ext/zend_monitor <http://files.zend.com/help/Zend-Server/content/zendserverapi/zend_monitor-php_api.htm>`_
* `ext/zip <http://php.net/manual/en/book.zip.php>`_
* `ext/zlib <http://php.net/manual/en/book.zlib.php>`_
* `ext/0mq <http://zeromq.org/>`_
* `ext/zookeeper <http://php.net/zookeeper>`_

Supported Frameworks
--------------------

Frameworks, components and libraries are supported via Exakat extensions.

List of extensions : there are 14 extensions

* :ref:`Cakephp <extension-cakephp>`
* :ref:`Codeigniter <extension-codeigniter>`
* :ref:`Drupal <extension-drupal>`
* :ref:`Laravel <extension-laravel>`
* :ref:`Melis <extension-melis>`
* :ref:`Monolog <extension-monolog>`
* :ref:`Pmb <extension-pmb>`
* :ref:`Prestashop <extension-prestashop>`
* :ref:`Shopware <extension-shopware>`
* :ref:`Slim <extension-slim>`
* :ref:`Symfony <extension-symfony>`
* :ref:`Twig <extension-twig>`
* :ref:`Wordpress <extension-wordpress>`
* :ref:`ZendF <extension-zendf>`





Applications
------------

A number of applications were scanned in order to find real life examples of patterns. They are listed here : 

* `ChurchCRM <http://churchcrm.io/>`_
* `Cleverstyle <https://cleverstyle.org/en>`_
* `Contao <https://contao.org/en/>`_
* `Dolibarr <https://www.dolibarr.org/>`_
* `Dolphin <https://www.boonex.com/>`_
* `Edusoho <https://www.edusoho.com/en>`_
* `ExpressionEngine <https://expressionengine.com/>`_
* `FuelCMS <https://www.getfuelcms.com/>`_
* `HuMo-Gen <http://humogen.com/>`_
* `LiveZilla <https://www.livezilla.net/home/en/>`_
* `Magento <https://magento.com/>`_
* `Mautic <https://www.mautic.org/>`_
* `MediaWiki <https://www.mediawiki.org/>`_
* `NextCloud <https://nextcloud.com/>`_
* `OpenConf <https://www.openconf.com/>`_
* `OpenEMR <https://www.open-emr.org/>`_
* `Phinx <https://phinx.org/>`_
* `PhpIPAM <https://phpipam.net/download/>`_
* `Phpdocumentor <https://www.phpdoc.org/>`_
* `Piwigo <https://www.piwigo.org/>`_
* `PrestaShop <https://prestashop.com/>`_
* `SPIP <https://www.spip.net/>`_
* `SugarCrm <https://www.sugarcrm.com/>`_
* `SuiteCrm <https://suitecrm.com/>`_
* `TeamPass <https://teampass.net/>`_
* `Thelia <https://thelia.net/>`_
* `ThinkPHP <http://www.thinkphp.cn/>`_
* `Tikiwiki <https://tiki.org/>`_
* `Tine20 <https://www.tine20.com/>`_
* `Traq <https://traq.io/>`_
* `Typo3 <https://typo3.org/>`_
* `Vanilla <https://open.vanillaforums.com/>`_
* `Woocommerce <https://woocommerce.com/>`_
* `WordPress <https://www.wordpress.org/>`_
* `XOOPS <https://xoops.org/>`_
* `Zencart <https://www.zen-cart.com/>`_
* `Zend-Config <https://docs.zendframework.com/zend-config/>`_
* `Zurmo <http://zurmo.org/>`_
* `opencfp <https://github.com/opencfp/opencfp>`_
* `phpMyAdmin <https://www.phpmyadmin.net/>`_
* `phpadsnew <http://freshmeat.sourceforge.net/projects/phpadsnew>`_
* phpipam
* `shopware <https://www.shopware.com/>`_
* `xataface <http://xataface.com/>`_


Recognized Libraries
--------------------

Libraries that are popular, large and often included in repositories are identified early in the analysis process, and ignored. This prevents Exakat to analysis some code foreign to the current repository : it prevents false positives from this code, and make the analysis much lighter. The whole process is entirely automatic. 

Those libraries, or even some of the, may be included again in the analysis by commenting the ignored_dir[] line, in the projects/<project>/config.ini file. 

* `ADOdb <https://adodb.org/dokuwiki/doku.php/>`_
* `atoum <http://atoum.org/>`_
* `BBQ <https://github.com/eventio/bbq>`_
* `CakePHP <https://cakephp.org/>`_
* `CI xmlRPC <http://apigen.juzna.cz/doc/ci-bonfire/Bonfire/class-CI_Xmlrpc.html>`_
* `CPDF <https://pear.php.net/reference/PhpDocumentor-latest/li_Cpdf.html>`_
* `Codeception <https://codeception.com/>`_
* `DomPDF <https://github.com/dompdf/dompdf>`_
* `FPDF <http://www.fpdf.org/>`_
* `phpGACL <http://phpgacl.sourceforge.net/>`_
* `gettext Reader <http://pivotx.net/dev/docs/trunk/External/PHP-gettext/gettext_reader.html>`_
* `jpGraph <http://jpgraph.net/>`_
* `HTML2PDF <http://sourceforge.net/projects/phphtml2pdf/>`_
* `HTML Purifier <http://htmlpurifier.org/>`_
* http_class
* `IDNA convert <https://github.com/phpWhois/idna-convert>`_
* `lessc <http://leafo.net/lessphp/>`_
* `magpieRSS <http://magpierss.sourceforge.net/>`_
* `MarkDown Parser <http://processwire.com/apigen/class-Markdown_Parser.html>`_
* `Markdown <https://github.com/michelf/php-markdown>`_
* `mpdf <http://www.mpdf1.com/mpdf/index.php>`_
* oauthToken
* passwordHash
* `pChart <http://www.pchart.net/>`_
* `pclZip <http://www.phpconcept.net/pclzip/>`_
* `Propel <http://propelorm.org/>`_
* `phpExecl <https://phpexcel.codeplex.com/>`_
* `phpMailer <https://github.com/PHPMailer/PHPMailer>`_
* `PHPSpec <http://www.phpspec.net/en/latest/>`_
* `PHPUnit <https://www.phpunit.de/>`_
* `qrCode <http://phpqrcode.sourceforge.net/>`_
* `Services_JSON <https://pear.php.net/package/Services_JSON>`_
* `sfYaml <https://github.com/fabpot-graveyard/yaml/blob/master/lib/sfYaml.php>`_
* `SimplePie <http://simplepie.org/>`_
* `SimpleTest <https://github.com/simpletest/simpletest>`_
* `swift <http://swiftmailer.org/>`_
* `Smarty <http://www.smarty.net/>`_
* `Symfony Unit Test <https://symfony.com/doc/current/testing.html>`_
* `tcpdf <http://www.tcpdf.org/>`_
* `text_diff <https://pear.php.net/package/Text_Diff>`_
* `text highlighter <https://pear.php.net/package/Text_Highlighter/>`_
* `tfpdf <http://www.fpdf.org/en/script/script92.php>`_
* `Typo3TestingFramework <https://github.com/TYPO3/testing-framework>`_
* UTF8
* `Xajax <https://github.com/Xajax/Xajax>`_
* `Yii <http://www.yiiframework.com/>`_
* `Zend Framework <http://framework.zend.com/>`_

New analyzers
-------------

List of analyzers, by version of introduction, newest to oldest. In parenthesis, the first element is the analyzer name, used with 'analyze -P' command, and the seconds, if any, are the ruleset, used with the -T option. Rulesets are separated by commas, as the same analysis may be used in several rulesets.


* 1.9.8

  * Cant Implement Traversable (Interfaces/CantImplementTraversable ; Analyze, LintButWontExec)
  * Complete/PropagateCalls (Complete/PropagateCalls)
  * Parameter Hiding (Functions/ParameterHiding ; Semantics)

* 1.9.7

  * Dump/CollectForeachFavorite (Dump/CollectForeachFavorite ; Unassigned)
  * Make Functioncall With Reference (Complete/MakeFunctioncallWithReference ; Unassigned)
  * Too Many Dereferencing (Classes/TooManyDereferencing)
  * Use Url Query Functions (Structures/UseUrlQueryFunctions ; Suggestions)

* 1.9.6

  * Create Magic Method (Complete/CreateMagicMethod ; )
  * Custom/NotInThisList (Custom/NotInThisList ; Unassigned)
  * Dump/CollectLocalVariableCounts (Dump/CollectLocalVariableCounts ; Dump)
  * Dump/CollectParameterCounts (Dump/CollectParameterCounts ; Dump)
  * Dump/DereferencingLevels (Dump/DereferencingLevels ; Dump)
  * Duplicate Literal (Type/DuplicateLiteral ; Semantics)
  * Internet Domains (Type/UdpDomains ; Inventory)
  * No Weak SSL Crypto (Security/NoWeakSSLCrypto ; Security)
  * Non Nullable Getters (Classes/NonNullableSetters)
  * Performances/MbStringInLoop (Performances/MbStringInLoop ; Performances)
  * Use Case Value (Structures/UseCaseValue ; Suggestions)

* 1.9.5

  * Dump/CollectLiterals (Dump/CollectLiterals ; Unassigned)
  * Interfaces Is Not Implemented (Interfaces/IsNotImplemented ; Analyze, ClassReview)
  * Magic Properties (Classes/MagicProperties)
  * No Garantee For Property Constant (Interfaces/NoGaranteeForPropertyConstant ; Analyze, ClassReview)
  * No Literal For Reference (Functions/NoLiteralForReference ; Analyze)
  * Use array_slice() (Performances/UseArraySlice ; Analyze)

* 1.9.4

  * Coalesce And Concat (Structures/CoalesceAndConcat ; Analyze)
  * Constant Comparison (Structures/AlwaysFalse ; Analyze)
  * Cyclomatic Complexity (Dump/CyclomaticComplexity ; Unassigned, Dump)
  * Nested Ternary Without Parenthesis (Php/NestedTernaryWithoutParenthesis ; Appinfo, CompatibilityPHP74)
  * PHP 74 New Directives (Php/Php74NewDirective ; CompatibilityPHP73)
  * Should Use Explode Args (Structures/ShouldUseExplodeArgs ; Analyze)
  * Spread Operator For Array (Php/SpreadOperatorForArray ; Appinfo)
  * Too Many Array Dimensions (Arrays/TooManyDimensions)
  * Use Arrow Functions (Functions/UseArrowFunctions ; Appinfo)

* 1.9.3

  * Complete/SetClassRemoteDefinitionWithParenthesis (Complete/SetClassRemoteDefinitionWithParenthesis ; Complete)
  * Complete/SetClassRemoteDefinitionWithTypehint (Complete/SetClassRemoteDefinitionWithTypehint ; Complete)
  * Environment Variables (Dump/EnvironmentVariables ; )
  * Indentation Levels (Dump/IndentationLevels ; Unassigned, Dump)
  * Max Level Of Nesting (Structures/MaxLevelOfIdentation ; Analyze)
  * No Spread For Hash (Arrays/NoSpreadForHash)
  * PHP 7.4 Constant Deprecation (Php/Php74Deprecation ; CompatibilityPHP74)
  * PHP 7.4 Removed Directives (Php/Php74RemovedDirective ; CompatibilityPHP74)
  * Set Class Method Remote Definition (Complete/SetClassMethodRemoteDefinition ; Complete)
  * Set Class Property Definition With Fluent Interface (Complete/SetClassPropertyDefinitionWithFluentInterface ; Complete)
  * Set Class Property Definition With Typehint (Complete/SetClassPropertyDefinitionWithTypehint ; Complete)
  * Set Class Remote Definition With Global (Complete/SetClassRemoteDefinitionWithGlobal ; Complete)
  * Set Class Remote Definition With Local New (Complete/SetClassRemoteDefinitionWithLocalNew ; Complete)
  * Set Class Remote Definition With Return Typehint (Complete/SetClassRemoteDefinitionWithReturnTypehint ; Complete)
  * Set String Method Definition (Complete/SetStringMethodDefinition ; Complete)
  * SetA rray Class Definition (Complete/SetArrayClassDefinition ; Complete)
  * Use Contravariance (Php/UseContravariance ; Appinfo)
  * Use Covariance (Php/UseCovariance ; Appinfo)
  * openssl_random_pseudo_byte() Second Argument (Structures/OpensslRandomPseudoByteSecondArg ; CompatibilityPHP74)
  * strip_tags Skips Closed Tag (Structures/StripTagsSkipsClosedTag ; Analyze)

* 1.9.2

  * Complete/SetClassRemoteDefinitionWithInjection (Complete/SetClassRemoteDefinitionWithInjection ; Complete)
  * Create Compact Variables (Complete/CreateCompactVariables)
  * Create Default Values (Complete/CreateDefaultValues ; Complete)
  * Create Magic Property (Complete/CreateMagicProperty ; Complete)
  * Follow Closure Definition (Complete/FollowClosureDefinition ; Complete)
  * Make Class Constant Definition (Complete/MakeClassConstantDefinition ; Complete)
  * Make Class Method Definition (Complete/MakeClassMethodDefinition ; Complete)
  * No ENT_IGNORE (Security/NoEntIgnore ; Security)
  * No More Curly Arrays (Php/NoMoreCurlyArrays ; CompatibilityPHP74)
  * Overwritten Constant (Complete/OverwrittenConstants ; Complete)
  * Overwritten Methods (Complete/OverwrittenMethods ; Complete)
  * Overwritten Properties (Complete/OverwrittenProperties ; Complete)
  * PHP 7.4 Reserved Keyword (Php/Php74ReservedKeyword ; CompatibilityPHP74)
  * Propagate Constants (Complete/PropagateConstants ; Complete)
  * Set Class_Alias Definition (Complete/SetClassAliasDefinition ; Complete)
  * Set Clone Link (Complete/SetCloneLink ; Complete)
  * Set Parent Definition (Complete/SetParentDefinition ; Complete)
  * Solve Trait Methods (Complete/SolveTraitMethods ; Complete)
  * Structures/ImplodeArgsOrder (Structures/ImplodeArgsOrder ; Analyze)
  * array_merge() And Variadic (Structures/ArrayMergeAndVariadic ; Analyze)

* 1.9.1

  * Complete/PhpNativeReference (Complete/PhpNativeReference)

* 1.9.0

  * Class Without Parent (Classes/NoParent)
  * Numeric Literal Separator (Php/IntegerSeparatorUsage ; Appinfo, CompatibilityPHP73)
  * PHP 7.4 Removed Functions (Php/Php74RemovedFunctions ; CompatibilityPHP74)
  * Reflection Export() Is Deprecated (Php/ReflectionExportIsDeprecated ; CompatibilityPHP74)
  * Scalar Are Not Arrays (Php/ScalarAreNotArrays ; Analyze, CompatibilityPHP74)
  * Serialize Magic Method (Php/SerializeMagic ; Internal)
  * Similar Integers (Type/SimilarIntegers ; Coding Conventions, Semantics)
  * Structures/MoveInsideFunction (Structures/MoveInsideFunction ; Unassigned)
  * Unbinding Closures (Functions/UnbindingClosures ; CompatibilityPHP74)
  * array_key_exists() Works On Arrays (Php/ArrayKeyExistsWithObjects ; Analyze, CompatibilityPHP74)

* 1.8.9

  * Avoid mb_dectect_encoding() (Php/AvoidMbDectectEncoding ; Analyze)
  * Disconnected Classes (Classes/DisconnectedClasses)
  * Not Or Tilde (Structures/NotOrNot ; Preferences)
  * Overwritten Source And Value (Structures/ForeachSourceValue ; Analyze, OneFile)
  * Php/Php74mbstrrpos3rdArg (Php/Php74mbstrrpos3rdArg ; CompatibilityPHP74)
  * Useless Type Check (Functions/UselessTypeCheck ; Dead code, OneFile)

* 1.8.8

  * Set Aside Code (Structures/SetAside)
  * Use Array Functions (Structures/UseArrayFunctions ; Suggestions)

* 1.8.7

  * Cant Use Function (Functions/CantUse)
  * Generator Cannot Return (Functions/GeneratorCannotReturn ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53)
  * Use DateTimeImmutable Class (Php/UseDateTimeImmutable ; Suggestions)
  * Wrong Returned Type (Functions/WrongReturnedType ; Analyze, ClassReview)

* 1.8.6

  * Classes/UndefinedClassConstants (Classes/UndefinedClassConstants ; Internal)
  * Dependant Abstract Classes (Classes/DependantAbstractClass ; Analyze, ClassReview)
  * Infinite Recursion (Structures/InfiniteRecursion ; Analyze)
  * Modules/IncomingData (Modules/IncomingData ; Internal)
  * Modules/NativeReplacement (Modules/NativeReplacement ; Internal)
  * Null Or Boolean Arrays (Arrays/NullBoolean)

* 1.8.5

  * Could Use Trait (Traits/CouldUseTrait)

* 1.8.4

  * Always Use Function With array_key_exists() (Performances/Php74ArrayKeyExists ; Performances)
  * Complex Dynamic Names (Variables/ComplexDynamicNames ; Suggestions)
  * Could Be Constant (Constants/CouldBeConstant ; Suggestions)
  * New Constants In PHP 7.4 (Php/Php74NewConstants ; CompatibilityPHP74)
  * Regex On Arrays (Performances/RegexOnArrays ; Performances)
  * Unused Class Constant (Classes/UnusedConstant)
  * curl_version() Has No Argument (Structures/CurlVersionNow ; CompatibilityPHP74)

* 1.8.3

  * Autoappend (Performances/Autoappend ; Performances)
  * Make Magic Concrete (Classes/MakeMagicConcrete)
  * Memoize MagicCall (Performances/MemoizeMagicCall ; Analyze, ClassReview)
  * Substr To Trim (Structures/SubstrToTrim ; Suggestions)

* 1.8.2

  * Identical Methods (Classes/IdenticalMethods)
  * No Append On Source (Structures/NoAppendOnSource ; Analyze)

* 1.8.1

  * No Need For get_class() (Structures/NoNeedGetClass)

* 1.8.0

  * Already Parents Trait (Traits/AlreadyParentsTrait ; Analyze)
  * Casting Ternary (Structures/CastingTernary ; Analyze, OneFile)
  * Concat And Addition (Php/ConcatAndAddition ; Analyze, CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53, CompatibilityPHP70, CompatibilityPHP71, CompatibilityPHP72, CompatibilityPHP73, CompatibilityPHP74, Top10, CompatibilityPHP80)
  * Concat Empty String (Structures/ConcatEmpty ; Analyze, OneFile)
  * Minus One On Error (Security/MinusOneOnError ; Security)
  * New Functions In PHP 7.4 (Php/Php74NewFunctions ; CompatibilityPHP74)
  * Unpacking Inside Arrays (Php/UnpackingInsideArrays ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53, CompatibilityPHP70, CompatibilityPHP71, CompatibilityPHP72, CompatibilityPHP73)
  * Useless Argument (Functions/UselessArgument)

* 1.7.9

  * Avoid option arrays in constructors (Classes/AvoidOptionArrays)
  * Trait Not Found (Traits/TraitNotFound ; Analyze, LintButWontExec)
  * Useless Default Argument (Functions/UselessDefault ; Suggestions)
  * ext/ffi (Extensions/Extffi ; Appinfo, Appcontent)
  * ext/uuid (Extensions/Extuuid ; Appinfo)
  * ext/zend_monitor (Extensions/Extzendmonitor ; Appinfo)

* 1.7.8

  * ext/svm (Extensions/Extsvm)

* 1.7.7

  * Implode One Arg (Php/ImplodeOneArg)
  * Incoming Values (Php/IncomingValues ; Internal)
  * Integer Conversion (Security/IntegerConversion ; Security)

* 1.7.6

  * Caught Variable (Exceptions/CatchE)
  * Multiple Unset() (Structures/MultipleUnset ; Suggestions, php-cs-fixable)
  * PHP Overridden Function (Php/OveriddenFunction ; Appinfo)
  * array_merge With Ellipsis (Structures/ArrayMergeWithEllipsis ; )

* 1.7.2

  * Check On __Call Usage (Classes/CheckOnCallUsage)
  * Unsupported Operand Types (Structures/UnsupportedOperandTypes ; )

* 1.7.0

  * Clone With Non-Object (Classes/CloneWithNonObject)
  * Self-Transforming Variables (Variables/SelfTransform ; Internal)
  * Should Deep Clone (Classes/ShouldDeepClone ; Suggestions)
  * Windows Only Constants (Portability/WindowsOnlyConstants ; )

* 1.6.9

  * Inconsistent Variable Usage (Variables/InconsistentUsage ; Under Work)
  * Typehint Must Be Returned (Functions/TypehintMustBeReturned)

* 1.6.8

  * PHP 8.0 Removed Constants (Php/Php80RemovedConstant)
  * PHP 8.0 Removed Functions (Php/Php80RemovedFunctions ; CompatibilityPHP80)

* 1.6.7

  * An OOP Factory (Patterns/Factory ; Appinfo)
  * Constant Dynamic Creation (Constants/DynamicCreation ; Appinfo)
  * Law of Demeter (Classes/DemeterLaw)

* 1.6.6

  * Functions/BadTypehintRelay (Functions/BadTypehintRelay)
  * Insufficient Typehint (Functions/InsufficientTypehint ; Analyze, Typechecks)

* 1.6.5

  * String Initialization (Arrays/StringInitialization)
  * Variable Is Not A Condition (Structures/NoVariableIsACondition ; Analyze)
  * ext/pcov (Extensions/Extpcov ; Appinfo)
  * ext/weakref (Extensions/Extweakref ; Appinfo)

* 1.6.4

  * Defined Classes (Modules/DefinedClasses)
  * Don't Be Too Manual (Structures/DontBeTooManual ; Coding Conventions)
  * Use Coalesce Equal (Structures/UseCoalesceEqual ; )

* 1.6.3

  * Assign And Compare (Structures/AssigneAndCompare)

* 1.6.2

  * Typed Property Usage (Php/TypedPropertyUsage)

* 1.6.1

  * Possible Missing Subpattern (Php/MissingSubpattern ; Analyze, Top10)
  * array_key_exists() Speedup (Performances/ArrayKeyExistsSpeedup)

* 1.5.8

  * Multiple Identical Closure (Functions/MultipleIdenticalClosure)
  * Path lists (Type/Path ; Appinfo)

* 1.5.7

  * Method Could Be Static (Classes/CouldBeStatic)
  * Multiple Usage Of Same Trait (Traits/MultipleUsage ; Suggestions)
  * Self Using Trait (Traits/SelfUsingTrait ; Dead code, ClassReview)
  * ext/wasm (Extensions/Extwasm ; Appinfo)

* 1.5.6

  * Isset() On The Whole Array (Performances/IssetWholeArray ; Performances, Suggestions)
  * Useless Alias (Traits/UselessAlias ; Analyze, LintButWontExec)
  * ext/async (Extensions/Extasync)
  * ext/sdl (Extensions/Extsdl ; Appinfo)

* 1.5.5

  * Directly Use File (Structures/DirectlyUseFile ; Suggestions)
  * Safe HTTP Headers (Security/SafeHttpHeaders ; Security)
  * fputcsv() In Loops (Performances/CsvInLoops)

* 1.5.4

  * Avoid Self In Interface (Interfaces/AvoidSelfInInterface ; ClassReview)
  * Should Have Destructor (Classes/ShouldHaveDestructor)
  * Unreachable Class Constant (Classes/UnreachableConstant ; ClassReview)

* 1.5.3

  * Don't Loop On Yield (Structures/DontLoopOnYield)
  * Variable May Be Non-Global (Structures/VariableMayBeNonGlobal ; Internal)

* 1.5.2

  * PHP Exception (Exceptions/IsPhpException)
  * Should Yield With Key (Functions/ShouldYieldWithKey ; Analyze, Top10)
  * ext/decimal (Extensions/Extdecimal ; Appinfo)
  * ext/psr (Extensions/Extpsr ; Appinfo)

* 1.5.1

  * Use Basename Suffix (Structures/BasenameSuffix)

* 1.5.0

  * Could Use Try (Exceptions/CouldUseTry)
  * Pack Format Inventory (Type/Pack ; Inventory, Appinfo)
  * Printf Format Inventory (Type/Printf ; Inventory, Appinfo)
  * idn_to_ascii() New Default (Php/IdnUts46 ; CompatibilityPHP74)

* 1.4.9

  * Don't Read And Write In One Expression (Structures/DontReadAndWriteInOneExpression ; Analyze, CompatibilityPHP73, CompatibilityPHP74)
  * Invalid Pack Format (Structures/InvalidPackFormat ; Analyze)
  * Named Regex (Structures/NamedRegex ; Suggestions)
  * No Reference For Static Property (Php/NoReferenceForStaticProperty ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53, CompatibilityPHP70, CompatibilityPHP71, CompatibilityPHP72)
  * No Return For Generator (Php/NoReturnForGenerator ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53)
  * Repeated Interface (Interfaces/RepeatedInterface ; Analyze, LintButWontExec)
  * Wrong Access Style to Property (Classes/UndeclaredStaticProperty)

* 1.4.8

  * Direct Call To __clone() (Php/DirectCallToClone)
  * filter_input() As A Source (Security/FilterInputSource ; Security)

* 1.4.6

  * Only Variable For Reference (Functions/OnlyVariableForReference)

* 1.4.5

  * Add Default Value (Functions/AddDefaultValue)

* 1.4.4

  * ext/seaslog (Extensions/Extseaslog)

* 1.4.3

  * Class Could Be Final (Classes/CouldBeFinal)
  * Closure Could Be A Callback (Functions/Closure2String ; Performances, Suggestions)
  * Inconsistent Elseif (Structures/InconsistentElseif ; Analyze)
  * Use json_decode() Options (Structures/JsonWithOption ; Suggestions)

* 1.4.2

  * Method Collision Traits (Traits/MethodCollisionTraits)
  * Undefined Insteadof (Traits/UndefinedInsteadof ; Analyze, LintButWontExec)
  * Undefined Variable (Variables/UndefinedVariable ; Analyze)

* 1.4.1

  * Must Call Parent Constructor (Php/MustCallParentConstructor)

* 1.4.0

  * PHP 7.3 Removed Functions (Php/Php73RemovedFunctions)
  * Trailing Comma In Calls (Php/TrailingComma ; Appinfo, CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53, CompatibilityPHP70, CompatibilityPHP71, CompatibilityPHP72)

* 1.3.9

  * Assert Function Is Reserved (Php/AssertFunctionIsReserved ; Analyze, CompatibilityPHP73)
  * Avoid Real (Php/AvoidReal ; Suggestions, Top10)
  * Case Insensitive Constants (Constants/CaseInsensitiveConstants ; Appinfo, CompatibilityPHP73)
  * Const Or Define Preference (Constants/ConstDefinePreference ; Preferences)
  * Continue Is For Loop (Structures/ContinueIsForLoop ; Analyze, CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53, CompatibilityPHP70, CompatibilityPHP71, CompatibilityPHP72, CompatibilityPHP73)
  * Could Be Abstract Class (Classes/CouldBeAbstractClass)

* 1.3.8

  * Constant Case Preference (Constants/DefineInsensitivePreference)
  * Detect Current Class (Php/DetectCurrentClass ; Suggestions, CompatibilityPHP74)
  * Use is_countable (Php/CouldUseIsCountable ; Suggestions)

* 1.3.7

  * Handle Arrays With Callback (Arrays/WithCallback)

* 1.3.5

  * Locally Used Property In Trait (Traits/LocallyUsedProperty ; Internal)
  * PHP 7.0 Scalar Typehints (Php/PHP70scalartypehints ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53)
  * PHP 7.1 Scalar Typehints (Php/PHP71scalartypehints ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53, CompatibilityPHP70)
  * PHP 7.2 Scalar Typehints (Php/PHP72scalartypehints ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53, CompatibilityPHP70, CompatibilityPHP71)
  * Undefined ::class (Classes/UndefinedStaticclass)
  * ext/lzf (Extensions/Extlzf ; Appinfo)
  * ext/msgpack (Extensions/Extmsgpack ; Appinfo)

* 1.3.4

  * Ambiguous Visibilities (Classes/AmbiguousVisibilities)
  * Hash Algorithms Incompatible With PHP 7.1- (Php/HashAlgos71 ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53, CompatibilityPHP70)
  * Hash Algorithms Incompatible With PHP 7.4- (Php/HashAlgos74 ; CompatibilityPHP74)
  * ext/csprng (Extensions/Extcsprng ; Appinfo)

* 1.3.3

  * Abstract Or Implements (Classes/AbstractOrImplements)
  * Can't Throw Throwable (Exceptions/CantThrow ; Analyze, LintButWontExec)
  * Incompatible Signature Methods (Classes/IncompatibleSignature ; Analyze, LintButWontExec)
  * Incompatible Signature Methods With Covariance (Classes/IncompatibleSignature74 ; Analyze)
  * ext/eio (Extensions/Exteio ; Appinfo)

* 1.3.2

  * > Or < Comparisons (Structures/GtOrLtFavorite ; Preferences)
  * Compared But Not Assigned Strings (Structures/ComparedButNotAssignedStrings ; Under Work)
  * Could Be Static Closure (Functions/CouldBeStaticClosure)
  * Dont Mix ++ (Structures/DontMixPlusPlus ; Analyze)
  * Strict Or Relaxed Comparison (Structures/ComparisonFavorite ; Preferences)
  * move_uploaded_file Instead Of copy (Security/MoveUploadedFile ; Security)

* 1.3.0

  * Check JSON (Structures/CheckJson ; Analyze)
  * Const Visibility Usage (Classes/ConstVisibilityUsage)
  * Should Use Operator (Structures/ShouldUseOperator ; Suggestions)
  * Single Use Variables (Variables/UniqueUsage ; Under Work)

* 1.2.9

  * Compact Inexistant Variable (Php/CompactInexistant ; CompatibilityPHP73, Suggestions)
  * Configure Extract (Security/ConfigureExtract ; Security)
  * Flexible Heredoc (Php/FlexibleHeredoc ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53, CompatibilityPHP70, CompatibilityPHP71, CompatibilityPHP72)
  * Method Signature Must Be Compatible (Classes/MethodSignatureMustBeCompatible)
  * Mismatch Type And Default (Functions/MismatchTypeAndDefault ; Analyze, LintButWontExec)
  * Use The Blind Var (Performances/UseBlindVar ; Performances)

* 1.2.8

  * Cache Variable Outside Loop (Performances/CacheVariableOutsideLoop ; Performances)
  * Cant Instantiate Class (Classes/CantInstantiateClass)
  * Do In Base (Performances/DoInBase ; Performances)
  * Php/FailingAnalysis (Php/FailingAnalysis ; Internal)
  * Typehinted References (Functions/TypehintedReferences ; Analyze)
  * Weak Typing (Classes/WeakType ; Analyze)
  * strpos() Too Much (Performances/StrposTooMuch ; Analyze)

* 1.2.7

  * ext/cmark (Extensions/Extcmark)

* 1.2.6

  * Callback Needs Return (Functions/CallbackNeedsReturn)
  * Could Use array_unique (Structures/CouldUseArrayUnique ; Suggestions)
  * Missing Parenthesis (Structures/MissingParenthesis ; Analyze, Simple, Level 5)
  * One If Is Sufficient (Structures/OneIfIsSufficient ; Suggestions)

* 1.2.5

  * Wrong Range Check (Structures/WrongRange ; Analyze)
  * ext/zookeeper (Extensions/Extzookeeper)

* 1.2.4

  * Processing Collector (Performances/RegexOnCollector)

* 1.2.3

  * Don't Unset Properties (Classes/DontUnsetProperties)
  * Redefined Private Property (Classes/RedefinedPrivateProperty ; Analyze)
  * Strtr Arguments (Php/StrtrArguments ; Analyze)

* 1.2.2

  * Drop Substr Last Arg (Structures/SubstrLastArg)

* 1.2.1

  * Possible Increment (Structures/PossibleIncrement ; Suggestions)
  * Properties Declaration Consistence (Classes/PPPDeclarationStyle)

* 1.1.10

  * Too Many Native Calls (Php/TooManyNativeCalls)

* 1.1.9

  * Should Preprocess Chr (Php/ShouldPreprocess ; Suggestions)
  * Too Many Parameters (Functions/TooManyParameters)

* 1.1.8

  * Mass Creation Of Arrays (Arrays/MassCreation)
  * ext/db2 (Extensions/Extdb2 ; Appinfo)

* 1.1.7

  * Could Use array_fill_keys (Structures/CouldUseArrayFillKeys ; Suggestions)
  * Dynamic Library Loading (Security/DynamicDl ; Security)
  * PHP 7.3 Last Empty Argument (Php/PHP73LastEmptyArgument ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53, CompatibilityPHP70, CompatibilityPHP71, CompatibilityPHP72)
  * Property Could Be Local (Classes/PropertyCouldBeLocal)
  * Use Count Recursive (Structures/UseCountRecursive ; Suggestions)
  * ext/leveldb (Extensions/Extleveldb ; Appinfo)
  * ext/opencensus (Extensions/Extopencensus ; Appinfo)
  * ext/uopz (Extensions/Extuopz ; Appinfo)
  * ext/varnish (Extensions/Extvarnish ; Appinfo)
  * ext/xxtea (Extensions/Extxxtea ; Appinfo)

* 1.1.6

  * Could Use Compact (Structures/CouldUseCompact ; Suggestions)
  * Foreach On Object (Php/ForeachObject)
  * List With Reference (Php/ListWithReference ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53, CompatibilityPHP70, CompatibilityPHP71, CompatibilityPHP72)
  * Test Then Cast (Structures/TestThenCast ; Analyze)

* 1.1.5

  * Possible Infinite Loop (Structures/PossibleInfiniteLoop ; Analyze)
  * Should Use Math (Structures/ShouldUseMath ; Suggestions)
  * ext/hrtime (Extensions/Exthrtime)

* 1.1.4

  * Double array_flip() (Performances/DoubleArrayFlip ; Performances)
  * Fallback Function (Functions/FallbackFunction ; Appinfo)
  * Find Key Directly (Structures/GoToKeyDirectly ; Under Work)
  * Reuse Variable (Structures/ReuseVariable ; Suggestions)
  * Useless Catch (Exceptions/UselessCatch)

* 1.1.3

  * Useless Referenced Argument (Functions/UselessReferenceArgument)

* 1.1.2

  * Local Globals (Variables/LocalGlobals ; )
  * Missing Include (Files/MissingInclude)

* 1.1.1

  * Inclusion Wrong Case (Files/InclusionWrongCase)

* 1.0.11

  * No Net For Xml Load (Security/NoNetForXmlLoad ; Security)
  * Unused Inherited Variable In Closure (Functions/UnusedInheritedVariable)

* 1.0.10

  * Sqlite3 Requires Single Quotes (Security/Sqlite3RequiresSingleQuotes)

* 1.0.8

  * Identical Consecutive Expression (Structures/IdenticalConsecutive ; Analyze)
  * Identical On Both Sides (Structures/IdenticalOnBothSides ; Analyze)
  * Mistaken Concatenation (Arrays/MistakenConcatenation)
  * No Reference For Ternary (Php/NoReferenceForTernary ; Analyze)

* 1.0.7

  * Not A Scalar Type (Php/NotScalarType)
  * Should Use array_filter() (Php/ShouldUseArrayFilter ; Suggestions)

* 1.0.6

  * Never Used Parameter (Functions/NeverUsedParameter ; Analyze, Suggestions)
  * Use Named Boolean In Argument Definition (Functions/AvoidBooleanArgument ; Analyze)
  * ext/igbinary (Extensions/Extigbinary)

* 1.0.5

  * Assigned In One Branch (Structures/AssignedInOneBranch ; Under Work)
  * Environment Variables (Variables/UncommonEnvVar ; Appinfo)
  * Invalid Regex (Structures/InvalidRegex ; Analyze)
  * Parent First (Classes/ParentFirst)
  * Same Variables Foreach (Structures/AutoUnsetForeach ; Analyze)

* 1.0.4

  * Argon2 Usage (Php/Argon2Usage ; Appinfo, Appcontent)
  * Array Index (Type/ArrayIndex ; Inventory, Appinfo)
  * Avoid set_error_handler $context Argument (Php/AvoidSetErrorHandlerContextArg ; CompatibilityPHP72)
  * Can't Count Non-Countable (Structures/CanCountNonCountable ; CompatibilityPHP72)
  * Crypto Usage (Php/CryptoUsage ; Appinfo, Appcontent)
  * Dl() Usage (Php/DlUsage ; Appinfo)
  * Don't Send $this In Constructor (Classes/DontSendThisInConstructor ; Analyze)
  * Hash Will Use Objects (Php/HashUsesObjects ; CompatibilityPHP72)
  * Incoming Variable Index Inventory (Type/GPCIndex ; Inventory, Appinfo, Appcontent)
  * Integer As Property (Classes/IntegerAsProperty ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53, CompatibilityPHP70, CompatibilityPHP71)
  * Missing New ? (Structures/MissingNew ; Analyze)
  * No get_class() With Null (Structures/NoGetClassNull ; Analyze, CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53, CompatibilityPHP70, CompatibilityPHP71, CompatibilityPHP72)
  * Php 7.2 New Class (Php/Php72NewClasses ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53, CompatibilityPHP70, CompatibilityPHP71, CompatibilityPHP72)
  * Php 7.4 New Class (Php/Php74NewClasses ; CompatibilityPHP74)
  * Slice Arrays First (Arrays/SliceFirst)
  * Unknown Pcre2 Option (Php/UnknownPcre2Option ; Analyze, CompatibilityPHP73)
  * Use List With Foreach (Structures/UseListWithForeach ; Suggestions, Top10)
  * Use PHP7 Encapsed Strings (Performances/PHP7EncapsedStrings ; Performances)
  * ext/vips (Extensions/Extvips ; Appinfo, Appcontent)

* 1.0.3

  * Ambiguous Static (Classes/AmbiguousStatic)
  * Drupal Usage (Vendors/Drupal ; Appinfo)
  * FuelPHP Usage (Vendors/Fuel ; Appinfo, Appcontent)
  * Phalcon Usage (Vendors/Phalcon ; Appinfo)

* 1.0.1

  * Could Be Else (Structures/CouldBeElse ; Analyze)
  * Next Month Trap (Structures/NextMonthTrap ; Analyze, Top10)
  * Printf Number Of Arguments (Structures/PrintfArguments ; Analyze)
  * Simple Switch (Performances/SimpleSwitch)
  * Substring First (Performances/SubstrFirst ; Performances, Suggestions, Top10)

* 0.12.17

  * Is A PHP Magic Property (Classes/IsaMagicProperty)

* 0.12.16

  * Cookies Variables (Php/CookiesVariables)
  * Date Formats (Php/DateFormats ; Inventory)
  * Incoming Variables (Php/IncomingVariables ; Inventory)
  * Session Variables (Php/SessionVariables ; Inventory)
  * Too Complex Expression (Structures/ComplexExpression ; Appinfo)
  * Unconditional Break In Loop (Structures/UnconditionLoopBreak ; Analyze, Level 3)

* 0.12.15

  * Always Anchor Regex (Security/AnchorRegex)
  * Is Actually Zero (Structures/IsZero ; Analyze, Level 2)
  * Multiple Type Variable (Structures/MultipleTypeVariable ; Analyze, Level 4)
  * Session Lazy Write (Security/SessionLazyWrite ; Security)

* 0.12.14

  * Regex Inventory (Type/Regex ; Inventory, Appinfo, Appcontent)
  * Switch Fallthrough (Structures/Fallthrough ; Inventory, Security, Stats)
  * Upload Filename Injection (Security/UploadFilenameInjection)

* 0.12.12

  * Use pathinfo() Arguments (Php/UsePathinfoArgs ; Performances)
  * ext/parle (Extensions/Extparle)

* 0.12.11

  * Could Be Protected Class Constant (Classes/CouldBeProtectedConstant ; ClassReview)
  * Could Be Protected Method (Classes/CouldBeProtectedMethod ; ClassReview)
  * Method Could Be Private Method (Classes/CouldBePrivateMethod)
  * Method Used Below (Classes/MethodUsedBelow ; )
  * Pathinfo() Returns May Vary (Php/PathinfoReturns ; Analyze, Level 4)

* 0.12.10

  * Constant Used Below (Classes/ConstantUsedBelow)
  * Could Be Private Class Constant (Classes/CouldBePrivateConstante ; ClassReview)

* 0.12.9

  * Shell Favorite (Php/ShellFavorite)

* 0.12.8

  * ext/fam (Extensions/Extfam)
  * ext/rdkafka (Extensions/Extrdkafka ; Appinfo)

* 0.12.7

  * Should Use Foreach (Structures/ShouldUseForeach)

* 0.12.5

  * Logical To in_array (Performances/LogicalToInArray)
  * No Substr Minus One (Php/NoSubstrMinusOne ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53, CompatibilityPHP70)

* 0.12.4

  * Assign With And (Php/AssignAnd ; Analyze)
  * Avoid Concat In Loop (Performances/NoConcatInLoop ; Performances, Top10)
  * Child Class Removes Typehint (Classes/ChildRemoveTypehint)
  * Isset Multiple Arguments (Php/IssetMultipleArgs ; Suggestions, php-cs-fixable)
  * Logical Operators Favorite (Php/LetterCharsLogicalFavorite ; Preferences, Top10)
  * No Magic With Array (Classes/NoMagicWithArray ; Analyze, Level 4, LintButWontExec)
  * Optional Parameter (Functions/OptionalParameter ; DefensiveProgrammingTM)
  * PHP 7.2 Object Keyword (Php/Php72ObjectKeyword ; CompatibilityPHP72)
  * ext/xattr (Extensions/Extxattr ; Appinfo)

* 0.12.3

  * Group Use Trailing Comma (Php/GroupUseTrailingComma ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53, CompatibilityPHP70, CompatibilityPHP71)
  * Mismatched Default Arguments (Functions/MismatchedDefaultArguments ; Analyze)
  * Mismatched Typehint (Functions/MismatchedTypehint ; Analyze)
  * Scalar Or Object Property (Classes/ScalarOrObjectProperty)

* 0.12.2

  * Mkdir Default (Security/MkdirDefault ; Security)
  * ext/lapack (Extensions/Extlapack)
  * strict_types Preference (Php/DeclareStrict ; Appinfo, Preferences)

* 0.12.1

  * Const Or Define (Structures/ConstDefineFavorite ; Appinfo)
  * Declare strict_types Usage (Php/DeclareStrictType ; Appinfo, Preferences)
  * Encoding Usage (Php/DeclareEncoding)
  * Mismatched Ternary Alternatives (Structures/MismatchedTernary ; Analyze, Suggestions, Level 4)
  * No Return Or Throw In Finally (Structures/NoReturnInFinally ; Security)
  * Ticks Usage (Php/DeclareTicks ; Appinfo, Preferences)

* 0.12.0

  * Avoid Optional Properties (Classes/AvoidOptionalProperties)
  * Heredoc Delimiter (Structures/HeredocDelimiterFavorite ; Coding Conventions)
  * Multiple Functions Declarations (Functions/MultipleDeclarations ; Appinfo)
  * Non Breakable Space In Names (Structures/NonBreakableSpaceInNames ; Appinfo, Appcontent)
  * ext/swoole (Extensions/Extswoole ; Appinfo)

* 0.11.8

  * Cant Inherit Abstract Method (Classes/CantInheritAbstractMethod)
  * Codeigniter usage (Vendors/Codeigniter ; Appinfo)
  * Ez cms usage (Vendors/Ez ; Appinfo)
  * Joomla usage (Vendors/Joomla ; Appinfo, Appcontent)
  * Laravel usage (Vendors/Laravel ; Appinfo, Appcontent)
  * Symfony usage (Vendors/Symfony ; Appinfo)
  * Use session_start() Options (Php/UseSessionStartOptions ; Suggestions)
  * Wordpress usage (Vendors/Wordpress ; Appinfo)
  * Yii usage (Vendors/Yii ; Appinfo, Appcontent)

* 0.11.7

  * Forgotten Interface (Interfaces/CouldUseInterface ; Analyze)
  * Order Of Declaration (Classes/OrderOfDeclaration)

* 0.11.6

  * Concatenation Interpolation Consistence (Structures/ConcatenationInterpolationFavorite ; Preferences)
  * Could Make A Function (Functions/CouldCentralize ; Analyze, Suggestions)
  * Courier Anti-Pattern (Patterns/CourrierAntiPattern ; Appinfo, Appcontent, Dismell)
  * DI Cyclic Dependencies (Classes/TypehintCyclicDependencies ; Dismell)
  * Dependency Injection (Patterns/DependencyInjection ; Appinfo)
  * PSR-13 Usage (Psr/Psr13Usage ; Appinfo)
  * PSR-16 Usage (Psr/Psr16Usage ; Appinfo)
  * PSR-3 Usage (Psr/Psr3Usage ; Appinfo)
  * PSR-6 Usage (Psr/Psr6Usage ; Appinfo)
  * PSR-7 Usage (Psr/Psr7Usage ; Appinfo)
  * Too Many Injections (Classes/TooManyInjections)
  * ext/gender (Extensions/Extgender ; Appinfo)
  * ext/judy (Extensions/Extjudy ; Appinfo)

* 0.11.5

  * Could Typehint (Functions/CouldTypehint ; Suggestions)
  * Implemented Methods Are Public (Classes/ImplementedMethodsArePublic)
  * Mixed Concat And Interpolation (Structures/MixedConcatInterpolation ; Analyze, Coding Conventions)
  * No Reference On Left Side (Structures/NoReferenceOnLeft ; Analyze)
  * PSR-11 Usage (Psr/Psr11Usage ; Appinfo)
  * ext/stats (Extensions/Extstats ; Appinfo)

* 0.11.4

  * No Class As Typehint (Functions/NoClassAsTypehint)
  * Use Browscap (Php/UseBrowscap ; Appinfo)
  * Use Debug (Structures/UseDebug ; Appinfo)

* 0.11.3

  * No Return Used (Functions/NoReturnUsed ; Analyze, Suggestions, Level 4)
  * Only Variable Passed By Reference (Functions/OnlyVariablePassedByReference ; Analyze)
  * Try With Multiple Catch (Php/TryMultipleCatch ; Appinfo)
  * ext/grpc (Extensions/Extgrpc)
  * ext/sphinx (Extensions/Extsphinx ; Appinfo)

* 0.11.2

  * Alternative Syntax Consistence (Structures/AlternativeConsistenceByFile ; Analyze)
  * Randomly Sorted Arrays (Arrays/RandomlySortedLiterals)

* 0.11.1

  * Difference Consistence (Structures/DifferencePreference)
  * No Empty Regex (Structures/NoEmptyRegex ; Analyze)

* 0.11.0

  * Could Use str_repeat() (Structures/CouldUseStrrepeat ; Analyze, Level 1, Top10)
  * Crc32() Might Be Negative (Php/Crc32MightBeNegative ; Analyze, PHP recommendations)
  * Empty Final Element (Arrays/EmptyFinal)
  * Strings With Strange Space (Type/StringWithStrangeSpace ; Analyze)
  * Suspicious Comparison (Structures/SuspiciousComparison ; Analyze, Level 3)

* 0.10.9

  * Displays Text (Php/Prints ; Internal)
  * Method Is Overwritten (Classes/MethodIsOverwritten)
  * No Class In Global (Php/NoClassInGlobal ; Analyze)
  * Repeated Regex (Structures/RepeatedRegex ; Analyze, Level 1)

* 0.10.7

  * Group Use Declaration (Php/GroupUseDeclaration)
  * Missing Cases In Switch (Structures/MissingCases ; Analyze)
  * New Constants In PHP 7.2 (Php/Php72NewConstants ; CompatibilityPHP72)
  * New Functions In PHP 7.2 (Php/Php72NewFunctions ; CompatibilityPHP72)
  * New Functions In PHP 7.3 (Php/Php73NewFunctions ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53, CompatibilityPHP70, CompatibilityPHP71, CompatibilityPHP72, CompatibilityPHP73)

* 0.10.6

  * Check All Types (Structures/CheckAllTypes ; Analyze)
  * Do Not Cast To Int (Php/NoCastToInt ; )
  * Manipulates INF (Php/IsINF)
  * Manipulates NaN (Php/IsNAN ; Appinfo)
  * Set Cookie Safe Arguments (Security/SetCookieArgs ; Security)
  * Should Use SetCookie() (Php/UseSetCookie ; Analyze)
  * Use Cookies (Php/UseCookies ; Appinfo, Appcontent)

* 0.10.5

  * Could Be Typehinted Callable (Functions/CouldBeCallable ; Suggestions)
  * Encoded Simple Letters (Security/EncodedLetters ; Security)
  * Regex Delimiter (Structures/RegexDelimiter ; Preferences)
  * Strange Name For Constants (Constants/StrangeName ; Analyze)
  * Strange Name For Variables (Variables/StrangeName ; Analyze)
  * Too Many Finds (Classes/TooManyFinds)

* 0.10.4

  * No Need For Else (Structures/NoNeedForElse ; Analyze)
  * Should Use session_regenerateid() (Security/ShouldUseSessionRegenerateId ; Security)
  * ext/ds (Extensions/Extds)

* 0.10.3

  * Multiple Alias Definitions Per File (Namespaces/MultipleAliasDefinitionPerFile ; Analyze)
  * Property Used In One Method Only (Classes/PropertyUsedInOneMethodOnly ; Analyze)
  * Used Once Property (Classes/UsedOnceProperty ; Analyze)
  * __DIR__ Then Slash (Structures/DirThenSlash ; Analyze, Level 3)
  * self, parent, static Outside Class (Classes/NoPSSOutsideClass)

* 0.10.2

  * Class Function Confusion (Php/ClassFunctionConfusion ; Semantics)
  * Forgotten Thrown (Exceptions/ForgottenThrown)
  * Should Use array_column() (Php/ShouldUseArrayColumn ; Performances, Suggestions, Level 4)
  * ext/libsodium (Extensions/Extlibsodium ; Appinfo, Appcontent)

* 0.10.1

  * All strings (Type/CharString ; Inventory)
  * SQL queries (Type/Sql ; Inventory, Appinfo)
  * Strange Names For Methods (Classes/StrangeName)

* 0.10.0

  * Error_Log() Usage (Php/ErrorLogUsage ; Appinfo)
  * No Boolean As Default (Functions/NoBooleanAsDefault ; Analyze)
  * Raised Access Level (Classes/RaisedAccessLevel)

* 0.9.9

  * PHP 7.2 Deprecations (Php/Php72Deprecation)
  * PHP 7.2 Removed Functions (Php/Php72RemovedFunctions ; CompatibilityPHP72)

* 0.9.8

  * Assigned Twice (Variables/AssignedTwiceOrMore ; Analyze)
  * New Line Style (Structures/NewLineStyle ; Preferences)
  * New On Functioncall Or Identifier (Classes/NewOnFunctioncallOrIdentifier)

* 0.9.7

  * Avoid Large Array Assignation (Structures/NoAssignationInFunction ; Performances)
  * Could Be Protected Property (Classes/CouldBeProtectedProperty)
  * Long Arguments (Structures/LongArguments ; Analyze)

* 0.9.6

  * Avoid glob() Usage (Performances/NoGlob ; Performances)
  * Fetch One Row Format (Performances/FetchOneRowFormat)

* 0.9.5

  * One Expression Brackets Consistency (Structures/OneExpressionBracketsConsistency ; Preferences)
  * Should Use Function (Php/ShouldUseFunction ; Performances)
  * ext/mongodb (Extensions/Extmongodb)
  * ext/zbarcode (Extensions/Extzbarcode ; Appinfo)

* 0.9.4

  * Class Should Be Final By Ocramius (Classes/FinalByOcramius)
  * String (Extensions/Extstring ; Appinfo, Appcontent)
  * ext/mhash (Extensions/Extmhash ; Appinfo, CompatibilityPHP54, Appcontent)

* 0.9.3

  * Close Tags Consistency (Php/CloseTagsConsistency)
  * Unset() Or (unset) (Php/UnsetOrCast ; Preferences)

* 0.9.2

  * $GLOBALS Or global (Php/GlobalsVsGlobal ; Preferences)
  * Illegal Name For Method (Classes/WrongName)
  * Too Many Local Variables (Functions/TooManyLocalVariables ; Analyze)
  * Use Composer Lock (Composer/UseComposerLock ; Appinfo)
  * ext/ncurses (Extensions/Extncurses ; Appinfo)
  * ext/newt (Extensions/Extnewt ; Appinfo)
  * ext/nsapi (Extensions/Extnsapi ; Appinfo)

* 0.9.1

  * Avoid Using stdClass (Php/UseStdclass ; Analyze, OneFile, Simple, Level 4)
  * Avoid array_push() (Performances/AvoidArrayPush ; Performances, PHP recommendations)
  * Could Return Void (Functions/CouldReturnVoid)
  * Invalid Octal In String (Type/OctalInString ; Inventory, CompatibilityPHP71)

* 0.9.0

  * Getting Last Element (Arrays/GettingLastElement)
  * Rethrown Exceptions (Exceptions/Rethrown ; Dead code)

* 0.8.9

  * Array() / [  ] Consistence (Arrays/ArrayBracketConsistence)
  * Bail Out Early (Structures/BailOutEarly ; Analyze, OneFile, Simple, Level 4)
  * Die Exit Consistence (Structures/DieExitConsistance ; Preferences)
  * Dont Change The Blind Var (Structures/DontChangeBlindKey ; Analyze)
  * More Than One Level Of Indentation (Structures/OneLevelOfIndentation ; Calisthenics)
  * One Dot Or Object Operator Per Line (Structures/OneDotOrObjectOperatorPerLine ; Calisthenics)
  * PHP 7.1 Microseconds (Php/Php71microseconds ; CompatibilityPHP71)
  * Unitialized Properties (Classes/UnitializedProperties ; OneFile, Simple, Suggestions, Level 4, Top10)
  * Useless Check (Structures/UselessCheck ; Analyze, OneFile, Simple, Level 1)

* 0.8.7

  * Don't Echo Error (Security/DontEchoError ; Analyze, Security, Simple, Level 1)
  * No isset() With empty() (Structures/NoIssetWithEmpty ; Analyze, PHP recommendations, OneFile, RadwellCodes, Simple, Level 4)
  * Use Class Operator (Classes/UseClassOperator)
  * Useless Casting (Structures/UselessCasting ; Analyze, PHP recommendations, OneFile, RadwellCodes, Simple, Level 4)
  * ext/rar (Extensions/Extrar ; Appinfo)
  * time() Vs strtotime() (Performances/timeVsstrtotime ; Performances, OneFile, RadwellCodes)

* 0.8.6

  * Drop Else After Return (Structures/DropElseAfterReturn)
  * Modernize Empty With Expression (Structures/ModernEmpty ; Analyze, OneFile, Simple)
  * Use Positive Condition (Structures/UsePositiveCondition ; Analyze, OneFile, Simple)

* 0.8.5

  * Should Make Ternary (Structures/ShouldMakeTernary ; Analyze, OneFile, Simple)
  * Unused Returned Value (Functions/UnusedReturnedValue)

* 0.8.4

  * $HTTP_RAW_POST_DATA Usage (Php/RawPostDataUsage ; Appinfo, CompatibilityPHP56)
  * $this Belongs To Classes Or Traits (Classes/ThisIsForClasses ; Analyze, Simple)
  * $this Is Not An Array (Classes/ThisIsNotAnArray ; Analyze)
  * $this Is Not For Static Methods (Classes/ThisIsNotForStatic ; Analyze)
  * ** For Exponent (Php/NewExponent ; Suggestions, php-cs-fixable)
  * ::class (Php/StaticclassUsage ; CompatibilityPHP54, CompatibilityPHP53)
  * <?= Usage (Php/EchoTagUsage ; Appinfo, Simple)
  * @ Operator (Structures/Noscream ; Analyze, Appinfo, Performances, ClearPHP)
  * Abstract Class Usage (Classes/Abstractclass ; Appinfo, Appcontent)
  * Abstract Methods Usage (Classes/Abstractmethods ; Appinfo, Appcontent)
  * Abstract Static Methods (Classes/AbstractStatic ; Analyze, Simple)
  * Access Protected Structures (Classes/AccessProtected ; Analyze, Simple)
  * Accessing Private (Classes/AccessPrivate ; Analyze, Simple)
  * Adding Zero (Structures/AddZero ; Analyze, OneFile, ClearPHP, Simple, Level 1)
  * Aliases (Namespaces/Alias ; Appinfo)
  * Aliases Usage (Functions/AliasesUsage ; Analyze, OneFile, ClearPHP, Simple, Level 1)
  * All Uppercase Variables (Variables/VariableUppercase ; Coding Conventions)
  * Already Parents Interface (Interfaces/AlreadyParentsInterface ; Analyze, Suggestions, Level 3)
  * Altering Foreach Without Reference (Structures/AlteringForeachWithoutReference ; Analyze, ClearPHP, Simple, Level 1)
  * Alternative Syntax (Php/AlternativeSyntax ; Appinfo)
  * Always Positive Comparison (Structures/NeverNegative ; Analyze, Simple)
  * Ambiguous Array Index (Arrays/AmbiguousKeys)
  * Anonymous Classes (Classes/Anonymous ; Appinfo, CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53)
  * Argument Should Be Typehinted (Functions/ShouldBeTypehinted ; ClearPHP, Suggestions)
  * Array Index (Arrays/Arrayindex ; Appinfo)
  * Arrays Is Modified (Arrays/IsModified ; Internal)
  * Arrays Is Read (Arrays/IsRead ; Internal)
  * Assertions (Php/AssertionUsage ; Appinfo)
  * Assign Default To Properties (Classes/MakeDefault ; Analyze, ClearPHP, Simple, Level 2)
  * Autoloading (Php/AutoloadUsage ; Appinfo)
  * Avoid Parenthesis (Structures/PrintWithoutParenthesis ; Analyze, Simple)
  * Avoid Those Hash Functions (Security/AvoidThoseCrypto ; Security)
  * Avoid array_unique() (Structures/NoArrayUnique ; Performances)
  * Avoid get_class() (Structures/UseInstanceof ; Analyze, Simple)
  * Avoid sleep()/usleep() (Security/NoSleep ; Security)
  * Bad Constants Names (Constants/BadConstantnames ; Analyze, PHP recommendations)
  * Binary Glossary (Type/Binary ; Inventory, Appinfo, CompatibilityPHP53)
  * Blind Variables (Variables/Blind ; )
  * Bracketless Blocks (Structures/Bracketless ; Coding Conventions)
  * Break Outside Loop (Structures/BreakOutsideLoop ; Analyze, CompatibilityPHP70)
  * Break With 0 (Structures/Break0 ; CompatibilityPHP53, OneFile)
  * Break With Non Integer (Structures/BreakNonInteger ; CompatibilityPHP54, OneFile)
  * Buried Assignation (Structures/BuriedAssignation ; Analyze)
  * Calltime Pass By Reference (Structures/CalltimePassByReference ; CompatibilityPHP54)
  * Can't Disable Class (Security/CantDisableClass ; Appinfo)
  * Can't Disable Function (Security/CantDisableFunction ; Appinfo, Appcontent)
  * Can't Extend Final (Classes/CantExtendFinal ; Analyze, Dead code, Simple)
  * Cant Use Return Value In Write Context (Php/CantUseReturnValueInWriteContext ; CompatibilityPHP54, CompatibilityPHP53)
  * Cast To Boolean (Structures/CastToBoolean ; Analyze, OneFile, Simple, Level 1)
  * Cast Usage (Php/CastingUsage ; Appinfo)
  * Catch Overwrite Variable (Structures/CatchShadowsVariable ; Analyze, ClearPHP, Simple)
  * Caught Exceptions (Exceptions/CaughtExceptions ; )
  * Caught Expressions (Php/TryCatchUsage ; Appinfo)
  * Class Const With Array (Php/ClassConstWithArray ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP53)
  * Class Has Fluent Interface (Classes/HasFluentInterface ; )
  * Class Usage (Classes/ClassUsage ; )
  * Class, Interface Or Trait With Identical Names (Classes/CitSameName ; Analyze)
  * Classes Mutually Extending Each Other (Classes/MutualExtension ; LintButWontExec, ClassReview)
  * Classes Names (Classes/Classnames ; Appinfo)
  * Clone Usage (Classes/CloningUsage ; Appinfo)
  * Close Tags (Php/CloseTags ; Coding Conventions)
  * Closure May Use $this (Php/ClosureThisSupport ; CompatibilityPHP53)
  * Closures Glossary (Functions/Closures ; Appinfo)
  * Coalesce (Php/Coalesce ; Appinfo, Appcontent)
  * Common Alternatives (Structures/CommonAlternatives ; Analyze, Simple)
  * Compare Hash (Security/CompareHash ; Security, ClearPHP)
  * Compared Comparison (Structures/ComparedComparison ; Analyze)
  * Composer Namespace (Composer/IsComposerNsname ; Appinfo, Internal)
  * Composer Usage (Composer/UseComposer ; Appinfo)
  * Composer's autoload (Composer/Autoload ; Appinfo)
  * Concrete Visibility (Interfaces/ConcreteVisibility ; Analyze, Simple, LintButWontExec)
  * Conditional Structures (Structures/ConditionalStructures ; )
  * Conditioned Constants (Constants/ConditionedConstants ; Appinfo, Internal)
  * Conditioned Function (Functions/ConditionedFunctions ; Appinfo, Internal)
  * Confusing Names (Variables/CloseNaming ; Under Work)
  * Const With Array (Php/ConstWithArray ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP53)
  * Constant Class (Classes/ConstantClass ; Analyze, Simple)
  * Constant Comparison (Structures/ConstantComparisonConsistance ; Coding Conventions, Preferences)
  * Constant Conditions (Structures/ConstantConditions ; )
  * Constant Definition (Classes/ConstantDefinition ; Appinfo, Stats)
  * Constant Scalar Expression (Php/ConstantScalarExpression ; )
  * Constant Scalar Expressions (Structures/ConstantScalarExpression ; Appinfo, CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP53)
  * Constants (Constants/Constantnames ; Inventory, Stats)
  * Constants Created Outside Its Namespace (Constants/CreatedOutsideItsNamespace ; Analyze)
  * Constants Usage (Constants/ConstantUsage ; Appinfo)
  * Constants With Strange Names (Constants/ConstantStrangeNames ; Analyze, Simple)
  * Constructors (Classes/Constructor ; Internal)
  * Continents (Type/Continents ; )
  * Could Be Class Constant (Classes/CouldBeClassConstant ; ClassReview)
  * Could Be Static (Structures/CouldBeStatic ; Analyze, OneFile, ClassReview)
  * Could Use Alias (Namespaces/CouldUseAlias ; OneFile, Suggestions)
  * Could Use Short Assignation (Structures/CouldUseShortAssignation ; Analyze, Performances, OneFile, Simple)
  * Could Use __DIR__ (Structures/CouldUseDir ; Analyze, Simple, Suggestions, Level 3, php-cs-fixable)
  * Could Use self (Classes/ShouldUseSelf ; Analyze, Simple, Suggestions, Level 3, ClassReview)
  * Custom Class Usage (Classes/AvoidUsing ; Custom)
  * Custom Constant Usage (Constants/CustomConstantUsage ; )
  * Dangling Array References (Structures/DanglingArrayReferences ; Analyze, PHP recommendations, ClearPHP, Simple, Level 1, Top10)
  * Deep Definitions (Functions/DeepDefinitions ; Analyze, Appinfo, Simple)
  * Define With Array (Php/DefineWithArray ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53)
  * Defined Class Constants (Classes/DefinedConstants ; Internal)
  * Defined Exceptions (Exceptions/DefinedExceptions ; Appinfo)
  * Defined Parent MP (Classes/DefinedParentMP ; Internal)
  * Defined Properties (Classes/DefinedProperty ; Internal)
  * Defined static:: Or self:: (Classes/DefinedStaticMP ; Internal)
  * Definitions Only (Files/DefinitionsOnly ; Internal)
  * Dependant Trait (Traits/DependantTrait ; Analyze, Level 3)
  * Deprecated Functions (Php/Deprecated ; Analyze)
  * Dereferencing String And Arrays (Structures/DereferencingAS ; Appinfo, CompatibilityPHP54, CompatibilityPHP53)
  * Direct Injection (Security/DirectInjection ; Security)
  * Directives Usage (Php/DirectivesUsage ; Appinfo)
  * Don't Change Incomings (Structures/NoChangeIncomingVariables ; Analyze)
  * Double Assignation (Structures/DoubleAssignation ; Analyze)
  * Double Instructions (Structures/DoubleInstruction ; Analyze, Simple)
  * Duplicate Calls (Structures/DuplicateCalls ; )
  * Dynamic Calls (Structures/DynamicCalls ; Appinfo, Internal, Stats)
  * Dynamic Class Constant (Classes/DynamicConstantCall ; Appinfo)
  * Dynamic Classes (Classes/DynamicClass ; Appinfo)
  * Dynamic Code (Structures/DynamicCode ; Appinfo)
  * Dynamic Function Call (Functions/Dynamiccall ; Appinfo, Internal, Stats)
  * Dynamic Methodcall (Classes/DynamicMethodCall ; Appinfo)
  * Dynamic New (Classes/DynamicNew ; Appinfo)
  * Dynamic Property (Classes/DynamicPropertyCall ; Appinfo)
  * Dynamically Called Classes (Classes/VariableClasses ; Appinfo, Stats)
  * Echo Or Print (Structures/EchoPrintConsistance ; Coding Conventions, Preferences)
  * Echo With Concat (Structures/EchoWithConcat ; Analyze, Performances, Simple, Suggestions)
  * Ellipsis Usage (Php/EllipsisUsage ; Appinfo, CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP53)
  * Else If Versus Elseif (Structures/ElseIfElseif ; Analyze, Simple, php-cs-fixable)
  * Else Usage (Structures/ElseUsage ; Appinfo, Appcontent, Calisthenics, Stats)
  * Email Addresses (Type/Email ; Inventory, Appinfo)
  * Empty Blocks (Structures/EmptyBlocks ; Analyze, Simple)
  * Empty Classes (Classes/EmptyClass ; Analyze, Simple)
  * Empty Function (Functions/EmptyFunction ; Analyze, Simple)
  * Empty Instructions (Structures/EmptyLines ; Analyze, Dead code, Simple)
  * Empty Interfaces (Interfaces/EmptyInterface ; Analyze, Simple)
  * Empty List (Php/EmptyList ; Analyze, CompatibilityPHP70)
  * Empty Namespace (Namespaces/EmptyNamespace ; Analyze, Dead code, OneFile, Simple)
  * Empty Slots In Arrays (Arrays/EmptySlots ; Coding Conventions)
  * Empty Traits (Traits/EmptyTrait ; Analyze, Simple)
  * Empty Try Catch (Structures/EmptyTryCatch ; Analyze, Level 3)
  * Empty With Expression (Structures/EmptyWithExpression ; OneFile, Suggestions)
  * Error Messages (Structures/ErrorMessages ; Appinfo)
  * Eval() Usage (Structures/EvalUsage ; Analyze, Appinfo, Security, Performances, OneFile, ClearPHP, Simple)
  * Exception Order (Exceptions/AlreadyCaught ; Dead code)
  * Exit() Usage (Structures/ExitUsage ; Analyze, Appinfo, OneFile, ClearPHP)
  * Exit-like Methods (Functions/KillsApp ; Internal)
  * Exponent Usage (Php/ExponentUsage ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP53)
  * External Config Files (Files/Services ; Internal)
  * Failed Substr Comparison (Structures/FailingSubstrComparison ; Analyze, Simple, Level 3, Top10)
  * File Is Component (Files/IsComponent ; Internal)
  * File Uploads (Structures/FileUploadUsage ; Appinfo)
  * File Usage (Structures/FileUsage ; Appinfo)
  * Final Class Usage (Classes/Finalclass ; LintButWontExec, ClassReview)
  * Final Methods Usage (Classes/Finalmethod ; LintButWontExec, ClassReview)
  * Fopen Binary Mode (Portability/FopenMode ; Portability)
  * For Using Functioncall (Structures/ForWithFunctioncall ; Performances, ClearPHP, Simple, Level 1, Top10)
  * Foreach Don't Change Pointer (Php/ForeachDontChangePointer ; CompatibilityPHP70)
  * Foreach Needs Reference Array (Structures/ForeachNeedReferencedSource ; Under Work)
  * Foreach Reference Is Not Modified (Structures/ForeachReferenceIsNotModified ; Analyze, Simple)
  * Foreach With list() (Structures/ForeachWithList ; CompatibilityPHP54, CompatibilityPHP53)
  * Forgotten Visibility (Classes/NonPpp ; Analyze, ClearPHP, Simple, Level 1)
  * Forgotten Whitespace (Structures/ForgottenWhiteSpace ; Analyze)
  * Fully Qualified Constants (Namespaces/ConstantFullyQualified ; Analyze)
  * Function Called With Other Case Than Defined (Functions/FunctionCalledWithOtherCase ; )
  * Function Subscripting (Structures/FunctionSubscripting ; Appinfo, CompatibilityPHP53)
  * Function Subscripting, Old Style (Structures/FunctionPreSubscripting ; Suggestions)
  * Functioncall Is Global (Functions/IsGlobal ; Internal)
  * Functions Glossary (Functions/Functionnames ; Appinfo)
  * Functions In Loop Calls (Functions/LoopCalling ; Under Work)
  * Functions Removed In PHP 5.4 (Php/Php54RemovedFunctions ; CompatibilityPHP54)
  * Functions Removed In PHP 5.5 (Php/Php55RemovedFunctions ; CompatibilityPHP55)
  * Functions Using Reference (Functions/FunctionsUsingReference ; Appinfo, Appcontent)
  * GPRC Aliases (Security/GPRAliases ; Internal)
  * Global Code Only (Files/GlobalCodeOnly ; Internal)
  * Global Import (Namespaces/GlobalImport ; Internal)
  * Global In Global (Structures/GlobalInGlobal ; Appinfo)
  * Global Inside Loop (Structures/GlobalOutsideLoop ; Performances)
  * Global Usage (Structures/GlobalUsage ; Analyze, Appinfo, ClearPHP)
  * Globals (Variables/Globals ; Internal)
  * Goto Names (Php/Gotonames ; Appinfo, ClearPHP)
  * HTTP Status Code (Type/HttpStatus ; Inventory)
  * Hardcoded Passwords (Functions/HardcodedPasswords ; Analyze, Security, OneFile, Simple, Level 3)
  * Has Magic Property (Classes/HasMagicProperty ; Internal)
  * Has Variable Arguments (Functions/VariableArguments ; Appinfo, Internal)
  * Hash Algorithms (Php/HashAlgos ; Analyze, Level 4)
  * Hash Algorithms Incompatible With PHP 5.3 (Php/HashAlgos53 ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53, CompatibilityPHP70, CompatibilityPHP71, CompatibilityPHP72)
  * Hash Algorithms Incompatible With PHP 5.4/5.5 (Php/HashAlgos54 ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP70, CompatibilityPHP71, CompatibilityPHP72)
  * Heredoc Delimiter Glossary (Type/Heredoc ; Appinfo)
  * Hexadecimal Glossary (Type/Hexadecimal ; Inventory, Appinfo)
  * Hexadecimal In String (Type/HexadecimalString ; Inventory, CompatibilityPHP70, CompatibilityPHP71)
  * Hidden Use Expression (Namespaces/HiddenUse ; Analyze, OneFile, Simple)
  * Htmlentities Calls (Structures/Htmlentitiescall ; Analyze, Simple)
  * Http Headers (Type/HttpHeader ; Inventory)
  * Identical Conditions (Structures/IdenticalConditions ; Analyze, Simple)
  * If With Same Conditions (Structures/IfWithSameConditions ; Analyze, Simple)
  * Iffectations (Structures/Iffectation ; Analyze)
  * Implement Is For Interface (Classes/ImplementIsForInterface ; Analyze, Simple)
  * Implicit Global (Structures/ImplicitGlobal ; Analyze)
  * Implied If (Structures/ImpliedIf ; Analyze, ClearPHP, Simple)
  * Inclusions (Structures/IncludeUsage ; Appinfo)
  * Incompilable Files (Php/Incompilable ; Analyze, Appinfo, ClearPHP, Simple)
  * Inconsistent Concatenation (Structures/InconsistentConcatenation ; Internal)
  * Indices Are Int Or String (Structures/IndicesAreIntOrString ; Analyze, OneFile, Simple)
  * Indirect Injection (Security/IndirectInjection ; Security)
  * Instantiating Abstract Class (Classes/InstantiatingAbstractClass ; Analyze, Simple)
  * Interface Arguments (Variables/InterfaceArguments ; )
  * Interface Methods (Interfaces/InterfaceMethod ; )
  * Interfaces Glossary (Interfaces/Interfacenames ; Appinfo)
  * Interfaces Usage (Interfaces/InterfaceUsage ; )
  * Internally Used Properties (Classes/PropertyUsedInternally ; )
  * Internet Ports (Type/Ports ; Inventory)
  * Interpolation (Type/StringInterpolation ; Coding Conventions)
  * Invalid Constant Name (Constants/InvalidName ; Analyze, Simple)
  * Is An Extension Class (Classes/IsExtClass ; )
  * Is An Extension Constant (Constants/IsExtConstant ; Internal, First)
  * Is An Extension Function (Functions/IsExtFunction ; Internal, First)
  * Is An Extension Interface (Interfaces/IsExtInterface ; Internal, First)
  * Is CLI Script (Files/IsCliScript ; Appinfo, Internal)
  * Is Composer Class (Composer/IsComposerClass ; Internal)
  * Is Composer Interface (Composer/IsComposerInterface ; Internal)
  * Is Extension Trait (Traits/IsExtTrait ; Internal, First)
  * Is Generator (Functions/IsGenerator ; Appinfo, Internal)
  * Is Global Constant (Constants/IsGlobalConstant ; Internal)
  * Is Interface Method (Classes/IsInterfaceMethod ; Internal)
  * Is Library (Project/IsLibrary ; )
  * Is Not Class Family (Classes/IsNotFamily ; Internal)
  * Is PHP Constant (Constants/IsPhpConstant ; Internal)
  * Is Upper Family (Classes/IsUpperFamily ; Internal)
  * Joining file() (Performances/JoinFile ; Performances)
  * Labels (Php/Labelnames ; Appinfo)
  * Linux Only Files (Portability/LinuxOnlyFiles ; Portability)
  * List Short Syntax (Php/ListShortSyntax ; Appinfo, CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, Internal, CompatibilityPHP53, CompatibilityPHP70)
  * List With Appends (Php/ListWithAppends ; CompatibilityPHP70)
  * List With Keys (Php/ListWithKeys ; Appinfo, CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, Appcontent, CompatibilityPHP53, CompatibilityPHP70)
  * Locally Unused Property (Classes/LocallyUnusedProperty ; Dead code, Simple)
  * Locally Used Property (Classes/LocallyUsedProperty ; Internal)
  * Logical Mistakes (Structures/LogicalMistakes ; Analyze, Simple, Level 1)
  * Logical Should Use Symbolic Operators (Php/LogicalInLetters ; Analyze, OneFile, ClearPHP, Simple, Suggestions, Level 2, Top10, php-cs-fixable)
  * Lone Blocks (Structures/LoneBlock ; Analyze, Simple, Level 4)
  * Lost References (Variables/LostReferences ; Analyze, Simple)
  * Magic Constant Usage (Constants/MagicConstantUsage ; Appinfo)
  * Magic Methods (Classes/MagicMethod ; Appinfo)
  * Magic Visibility (Classes/toStringPss ; CompatibilityPHP70, Simple)
  * Mail Usage (Structures/MailUsage ; Appinfo)
  * Make Global A Property (Classes/MakeGlobalAProperty ; Analyze, Simple)
  * Make One Call With Array (Performances/MakeOneCall ; Performances)
  * Malformed Octal (Type/MalformedOctal ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53)
  * Mark Callable (Functions/MarkCallable ; Appinfo, Internal, First)
  * Md5 Strings (Type/Md5String ; Inventory, Appinfo)
  * Method Has Fluent Interface (Functions/HasFluentInterface ; )
  * Method Has No Fluent Interface (Functions/HasNotFluentInterface ; )
  * Methodcall On New (Php/MethodCallOnNew ; CompatibilityPHP53)
  * Methods Without Return (Functions/WithoutReturn ; Analyze)
  * Mime Types (Type/MimeType ; Inventory)
  * Mixed Keys Arrays (Arrays/MixedKeys ; CompatibilityPHP54, CompatibilityPHP53)
  * Multidimensional Arrays (Arrays/Multidimensional ; Appinfo)
  * Multiple Alias Definitions (Namespaces/MultipleAliasDefinitions ; Analyze, Simple)
  * Multiple Catch (Structures/MultipleCatch ; Appinfo, Internal)
  * Multiple Class Declarations (Classes/MultipleDeclarations ; Analyze, Simple)
  * Multiple Classes In One File (Classes/MultipleClassesInFile ; Appinfo, Coding Conventions)
  * Multiple Constant Definition (Constants/MultipleConstantDefinition ; Analyze, Simple)
  * Multiple Definition Of The Same Argument (Functions/MultipleSameArguments ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53, OneFile, ClearPHP, Simple)
  * Multiple Exceptions Catch() (Exceptions/MultipleCatch ; Appinfo, CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53, CompatibilityPHP70)
  * Multiple Identical Trait Or Interface (Classes/MultipleTraitOrInterface ; Analyze, OneFile, Simple)
  * Multiple Index Definition (Arrays/MultipleIdenticalKeys ; Analyze, OneFile, Simple)
  * Multiple Returns (Functions/MultipleReturn ; )
  * Multiples Identical Case (Structures/MultipleDefinedCase ; Analyze, OneFile, ClearPHP, Simple, Level 1)
  * Multiply By One (Structures/MultiplyByOne ; Analyze, OneFile, ClearPHP, Simple, Level 1)
  * Must Return Methods (Functions/MustReturn ; Analyze, Simple, Level 2, LintButWontExec)
  * Namespaces (Namespaces/NamespaceUsage ; Appinfo)
  * Namespaces Glossary (Namespaces/Namespacesnames ; Appinfo)
  * Negative Power (Structures/NegativePow ; Analyze, OneFile, Simple, Level 3)
  * Nested Ifthen (Structures/NestedIfthen ; Analyze, RadwellCodes)
  * Nested Loops (Structures/NestedLoops ; Appinfo)
  * Nested Ternary (Structures/NestedTernary ; Analyze, ClearPHP, Simple, Level 1)
  * Never Used Properties (Classes/PropertyNeverUsed ; Analyze, Simple)
  * New Functions In PHP 5.4 (Php/Php54NewFunctions ; CompatibilityPHP53)
  * New Functions In PHP 5.5 (Php/Php55NewFunctions ; CompatibilityPHP54, CompatibilityPHP53)
  * New Functions In PHP 5.6 (Php/Php56NewFunctions ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP53)
  * New Functions In PHP 7.0 (Php/Php70NewFunctions ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53)
  * New Functions In PHP 7.1 (Php/Php71NewFunctions ; CompatibilityPHP71)
  * No Choice (Structures/NoChoice ; Analyze, Simple, Level 2, Top10)
  * No Count With 0 (Performances/NotCountNull ; Performances)
  * No Direct Access (Structures/NoDirectAccess ; Appinfo)
  * No Direct Call To Magic Method (Classes/DirectCallToMagicMethod ; Analyze, Level 2)
  * No Direct Usage (Structures/NoDirectUsage ; Analyze, Simple)
  * No Hardcoded Hash (Structures/NoHardcodedHash ; Analyze, Security, Simple)
  * No Hardcoded Ip (Structures/NoHardcodedIp ; Analyze, Security, ClearPHP, Simple)
  * No Hardcoded Path (Structures/NoHardcodedPath ; Analyze, ClearPHP, Simple)
  * No Hardcoded Port (Structures/NoHardcodedPort ; Analyze, Security, ClearPHP, Simple)
  * No List With String (Php/NoListWithString ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53)
  * No Parenthesis For Language Construct (Structures/NoParenthesisForLanguageConstruct ; Analyze, ClearPHP, RadwellCodes, Simple, Suggestions, Level 2)
  * No Plus One (Structures/PlusEgalOne ; Coding Conventions, OneFile)
  * No Public Access (Classes/NoPublicAccess ; Analyze)
  * No Real Comparison (Type/NoRealComparison ; Analyze, Simple, Level 2, Top10)
  * No Self Referencing Constant (Classes/NoSelfReferencingConstant ; Analyze, Simple, LintButWontExec, ClassReview)
  * No String With Append (Php/NoStringWithAppend ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53)
  * No Substr() One (Structures/NoSubstrOne ; Analyze, Performances, CompatibilityPHP71, Simple, Suggestions, Level 2, Top10)
  * No array_merge() In Loops (Performances/ArrayMergeInLoops ; Analyze, Performances, ClearPHP, Simple, Level 2, Top10)
  * Non Ascii Variables (Variables/VariableNonascii ; Analyze)
  * Non Static Methods Called In A Static (Classes/NonStaticMethodsCalledStatic ; Analyze, CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53, Simple)
  * Non-constant Index In Array (Arrays/NonConstantArray ; Analyze, Simple)
  * Non-lowercase Keywords (Php/UpperCaseKeyword ; Coding Conventions, RadwellCodes)
  * Normal Methods (Classes/NormalMethods ; Appcontent)
  * Normal Property (Classes/NormalProperty ; Under Work)
  * Not Definitions Only (Files/NotDefinitionsOnly ; Appinfo)
  * Not Not (Structures/NotNot ; Analyze, OneFile, Simple, php-cs-fixable)
  * Not Same Name As File (Classes/NotSameNameAsFile ; )
  * Not Same Name As File (Classes/SameNameAsFile ; Internal)
  * Nowdoc Delimiter Glossary (Type/Nowdoc ; Appinfo)
  * Null Coalesce (Php/NullCoalesce ; )
  * Null On New (Classes/NullOnNew ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53, OneFile, Simple)
  * Objects Don't Need References (Structures/ObjectReferences ; Analyze, OneFile, ClearPHP, Simple, Level 2, Top10)
  * Octal Glossary (Type/Octal ; Appinfo)
  * Old Style Constructor (Classes/OldStyleConstructor ; Analyze, Appinfo, OneFile, ClearPHP, Simple)
  * Old Style __autoload() (Php/oldAutoloadUsage ; Analyze, OneFile, ClearPHP, Simple)
  * One Letter Functions (Functions/OneLetterFunctions ; Coding Conventions, Semantics)
  * One Object Operator Per Line (Classes/OneObjectOperatorPerLine ; Calisthenics)
  * One Variable String (Type/OneVariableStrings ; Analyze, RadwellCodes, Simple)
  * Only Static Methods (Classes/OnlyStaticMethods ; Internal)
  * Only Variable Returned By Reference (Structures/OnlyVariableReturnedByReference ; Analyze, Simple)
  * Or Die (Structures/OrDie ; Analyze, OneFile, ClearPHP, Simple)
  * Overwriting Variable (Variables/Overwriting ; )
  * Overwritten Class Const (Classes/OverwrittenConst ; Appinfo)
  * Overwritten Exceptions (Exceptions/OverwriteException ; Analyze, Simple, Suggestions, Level 4)
  * Overwritten Literals (Variables/OverwrittenLiterals ; Analyze)
  * PHP 7.0 New Classes (Php/Php70NewClasses ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53)
  * PHP 7.0 New Interfaces (Php/Php70NewInterfaces ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53)
  * PHP 7.0 Removed Directives (Php/Php70RemovedDirective ; CompatibilityPHP70, CompatibilityPHP71)
  * PHP 7.0 Removed Functions (Php/Php70RemovedFunctions ; CompatibilityPHP70, CompatibilityPHP71)
  * PHP 7.1 Removed Directives (Php/Php71RemovedDirective ; CompatibilityPHP71)
  * PHP Arrays Index (Arrays/Phparrayindex ; Appinfo)
  * PHP Bugfixes (Php/MiddleVersion ; Appinfo, Appcontent)
  * PHP Constant Usage (Constants/PhpConstantUsage ; Appinfo)
  * PHP Handlers Usage (Php/SetHandlers ; )
  * PHP Interfaces (Interfaces/Php ; )
  * PHP Keywords As Names (Php/ReservedNames ; Analyze, Simple)
  * PHP Sapi (Type/Sapi ; Internal)
  * PHP Variables (Variables/VariablePhp ; )
  * PHP5 Indirect Variable Expression (Variables/Php5IndirectExpression ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53)
  * PHP7 Dirname (Structures/PHP7Dirname ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53, Suggestions, php-cs-fixable)
  * Parent, Static Or Self Outside Class (Classes/PssWithoutClass ; Analyze, Simple)
  * Parenthesis As Parameter (Php/ParenthesisAsParameter ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53)
  * Pear Usage (Php/PearUsage ; Appinfo, Appcontent)
  * Perl Regex (Type/Pcre ; Inventory)
  * Php 7 Indirect Expression (Variables/Php7IndirectExpression ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53, CompatibilityPHP70)
  * Php 7.1 New Class (Php/Php71NewClasses ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53, CompatibilityPHP70)
  * Php7 Relaxed Keyword (Php/Php7RelaxedKeyword ; Appinfo, CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53)
  * Phpinfo (Structures/PhpinfoUsage ; Security, OneFile, Simple)
  * Pre-increment (Performances/PrePostIncrement ; Analyze, Performances, Simple, Level 4)
  * Preprocess Arrays (Arrays/ShouldPreprocess ; Suggestions)
  * Preprocessable (Structures/ShouldPreprocess ; Analyze)
  * Print And Die (Structures/PrintAndDie ; Analyze, Simple)
  * Property Could Be Private Property (Classes/CouldBePrivate ; ClassReview)
  * Property Is Modified (Classes/IsModified ; Internal)
  * Property Is Read (Classes/IsRead ; Internal)
  * Property Names (Classes/PropertyDefinition ; Internal)
  * Property Used Above (Classes/PropertyUsedAbove ; Internal)
  * Property Used Below (Classes/PropertyUsedBelow ; Internal)
  * Property Variable Confusion (Structures/PropertyVariableConfusion ; Analyze, Semantics)
  * Queries In Loops (Structures/QueriesInLoop ; Analyze, OneFile, Simple, Level 1, Top10)
  * Random Without Try (Structures/RandomWithoutTry ; Security)
  * Real Functions (Functions/RealFunctions ; Appcontent, Stats)
  * Real Variables (Variables/RealVariables ; Appcontent, Stats)
  * Recursive Functions (Functions/Recursive ; Appinfo)
  * Redeclared PHP Functions (Functions/RedeclaredPhpFunction ; Analyze, Appinfo, Simple)
  * Redefined Class Constants (Classes/RedefinedConstants ; Analyze, Simple)
  * Redefined Default (Classes/RedefinedDefault ; Analyze, Simple)
  * Redefined Methods (Classes/RedefinedMethods ; Appinfo)
  * Redefined PHP Traits (Traits/Php ; Appinfo)
  * Redefined Property (Classes/RedefinedProperty ; ClassReview)
  * References (Variables/References ; Appinfo)
  * Register Globals (Security/RegisterGlobals ; Security)
  * Relay Function (Functions/RelayFunction ; Analyze)
  * Repeated print() (Structures/RepeatedPrint ; Analyze, Simple, Suggestions, Level 3, Top10)
  * Reserved Keywords In PHP 7 (Php/ReservedKeywords7 ; CompatibilityPHP70)
  * Resources Usage (Structures/ResourcesUsage ; Appinfo)
  * Results May Be Missing (Structures/ResultMayBeMissing ; Analyze, Simple)
  * Return True False (Structures/ReturnTrueFalse ; Analyze, Simple, Level 1)
  * Return Typehint Usage (Php/ReturnTypehintUsage ; Appinfo, Internal)
  * Return With Parenthesis (Php/ReturnWithParenthesis ; Coding Conventions, PHP recommendations)
  * Return void  (Structures/ReturnVoid ; )
  * Safe Curl Options (Security/CurlOptions ; Security)
  * Same Conditions In Condition (Structures/SameConditions ; Analyze, Simple)
  * Scalar Typehint Usage (Php/ScalarTypehintUsage ; Appinfo)
  * Sensitive Argument (Security/SensitiveArgument ; Internal)
  * Sequences In For (Structures/SequenceInFor ; )
  * Setlocale() Uses Constants (Structures/SetlocaleNeedsConstants ; CompatibilityPHP70)
  * Several Instructions On The Same Line (Structures/OneLineTwoInstructions ; Analyze)
  * Shell Usage (Structures/ShellUsage ; Appinfo)
  * Short Open Tags (Php/ShortOpenTagRequired ; Analyze, Simple)
  * Short Syntax For Arrays (Arrays/ArrayNSUsage ; Appinfo, CompatibilityPHP53)
  * Should Be Single Quote (Type/ShouldBeSingleQuote ; Coding Conventions, ClearPHP)
  * Should Chain Exception (Structures/ShouldChainException ; Analyze, Simple)
  * Should Make Alias (Namespaces/ShouldMakeAlias ; Analyze, OneFile, Simple)
  * Should Typecast (Type/ShouldTypecast ; Analyze, OneFile, Simple)
  * Should Use Coalesce (Php/ShouldUseCoalesce ; Analyze, Simple, Suggestions, Level 3)
  * Should Use Constants (Functions/ShouldUseConstants ; Analyze, Simple)
  * Should Use Local Class (Classes/ShouldUseThis ; Analyze, ClearPHP, Simple)
  * Should Use Prepared Statement (Security/ShouldUsePreparedStatement ; Analyze, Security, Simple)
  * Silently Cast Integer (Type/SilentlyCastInteger ; Analyze, Simple)
  * Simple Global Variable (Php/GlobalWithoutSimpleVariable ; CompatibilityPHP70)
  * Simplify Regex (Structures/SimplePreg ; Performances)
  * Slow Functions (Performances/SlowFunctions ; Performances, OneFile)
  * Special Integers (Type/SpecialIntegers ; Inventory)
  * Static Loop (Structures/StaticLoop ; Analyze, Simple, Level 4)
  * Static Methods (Classes/StaticMethods ; Appinfo)
  * Static Methods Called From Object (Classes/StaticMethodsCalledFromObject ; Analyze, Simple)
  * Static Methods Can't Contain $this (Classes/StaticContainsThis ; Analyze, ClearPHP, Simple, Level 1)
  * Static Properties (Classes/StaticProperties ; Appinfo)
  * Static Variables (Variables/StaticVariables ; Appinfo)
  * Strict Comparison With Booleans (Structures/BooleanStrictComparison ; Analyze, Simple, Suggestions, Level 2)
  * String May Hold A Variable (Type/StringHoldAVariable ; Analyze, Simple)
  * String glossary (Type/String ; )
  * Strpos()-like Comparison (Structures/StrposCompare ; Analyze, PHP recommendations, ClearPHP, Simple, Level 2, Top10)
  * Super Global Usage (Php/SuperGlobalUsage ; Appinfo)
  * Super Globals Contagion (Security/SuperGlobalContagion ; Internal)
  * Switch To Switch (Structures/SwitchToSwitch ; Analyze, RadwellCodes, Simple)
  * Switch With Too Many Default (Structures/SwitchWithMultipleDefault ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53, ClearPHP, Simple)
  * Switch Without Default (Structures/SwitchWithoutDefault ; Analyze, ClearPHP, Simple)
  * Ternary In Concat (Structures/TernaryInConcat ; Analyze, Simple, Level 3)
  * Test Class (Classes/TestClass ; Appinfo)
  * Throw (Php/ThrowUsage ; Appinfo)
  * Throw Functioncall (Exceptions/ThrowFunctioncall ; Analyze, Simple, Level 1)
  * Throw In Destruct (Classes/ThrowInDestruct ; Analyze, Simple)
  * Thrown Exceptions (Exceptions/ThrownExceptions ; Appinfo)
  * Throws An Assignement (Structures/ThrowsAndAssign ; Analyze, Simple)
  * Timestamp Difference (Structures/TimestampDifference ; Analyze, Simple, Level 3)
  * Too Many Children (Classes/TooManyChildren ; Suggestions)
  * Trait Methods (Traits/TraitMethod ; )
  * Trait Names (Traits/Traitnames ; Appinfo)
  * Traits Usage (Traits/TraitUsage ; Appinfo)
  * Trigger Errors (Php/TriggerErrorUsage ; Appinfo)
  * True False Inconsistant Case (Constants/InconsistantCase ; Preferences)
  * Try With Finally (Structures/TryFinally ; Appinfo, Internal)
  * Typehints (Functions/Typehints ; Appinfo)
  * URL List (Type/Url ; Inventory, Appinfo)
  * Uncaught Exceptions (Exceptions/UncaughtExceptions ; Analyze)
  * Unchecked Resources (Structures/UncheckedResources ; Analyze, ClearPHP, Simple, Level 2)
  * Undefined Caught Exceptions (Exceptions/CaughtButNotThrown ; Dead code)
  * Undefined Class Constants (Classes/UndefinedConstants ; Analyze)
  * Undefined Classes (Classes/UndefinedClasses ; Analyze)
  * Undefined Constants (Constants/UndefinedConstants ; Analyze, CompatibilityPHP72, Simple)
  * Undefined Functions (Functions/UndefinedFunctions ; Analyze)
  * Undefined Interfaces (Interfaces/UndefinedInterfaces ; Analyze)
  * Undefined Parent (Classes/UndefinedParentMP ; Analyze, Simple)
  * Undefined Properties (Classes/UndefinedProperty ; Analyze, ClearPHP, Simple)
  * Undefined Trait (Traits/UndefinedTrait ; Analyze, LintButWontExec)
  * Undefined static:: Or self:: (Classes/UndefinedStaticMP ; Analyze, Simple)
  * Unicode Blocks (Type/UnicodeBlock ; Inventory)
  * Unicode Escape Partial (Php/UnicodeEscapePartial ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53)
  * Unicode Escape Syntax (Php/UnicodeEscapeSyntax ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53)
  * Unknown Directive Name (Php/DirectiveName ; Internal)
  * Unkown Regex Options (Structures/UnknownPregOption ; Analyze, Simple)
  * Unpreprocessed Values (Structures/Unpreprocessed ; Analyze, OneFile, ClearPHP, Simple)
  * Unreachable Code (Structures/UnreachableCode ; Dead code, OneFile, ClearPHP, Simple, Suggestions, Level 3)
  * Unresolved Catch (Classes/UnresolvedCatch ; Dead code, ClearPHP)
  * Unresolved Classes (Classes/UnresolvedClasses ; Analyze)
  * Unresolved Instanceof (Classes/UnresolvedInstanceof ; Analyze, Dead code, ClearPHP, Simple, Top10)
  * Unresolved Use (Namespaces/UnresolvedUse ; Analyze, ClearPHP, Simple)
  * Unserialize Second Arg (Security/UnserializeSecondArg ; Security)
  * Unset Arguments (Functions/UnsetOnArguments ; OneFile)
  * Unset In Foreach (Structures/UnsetInForeach ; Analyze, Dead code, OneFile, Simple)
  * Unthrown Exception (Exceptions/Unthrown ; Analyze, Dead code, ClearPHP, Simple)
  * Unused Arguments (Functions/UnusedArguments ; Analyze, Simple)
  * Unused Classes (Classes/UnusedClass ; Analyze, Dead code, Simple)
  * Unused Constants (Constants/UnusedConstants ; Dead code, Simple)
  * Unused Functions (Functions/UnusedFunctions ; Dead code, Simple)
  * Unused Global (Structures/UnusedGlobal ; Analyze, Simple)
  * Unused Interfaces (Interfaces/UnusedInterfaces ; Dead code, Simple, Suggestions, Level 2)
  * Unused Label (Structures/UnusedLabel ; Dead code, Simple)
  * Unused Methods (Classes/UnusedMethods ; Dead code, Simple)
  * Unused Private Methods (Classes/UnusedPrivateMethod ; Dead code, OneFile, Simple)
  * Unused Private Properties (Classes/UnusedPrivateProperty ; Dead code, OneFile, Simple)
  * Unused Protected Methods (Classes/UnusedProtectedMethods ; Dead code)
  * Unused Traits (Traits/UnusedTrait ; Simple)
  * Unused Use (Namespaces/UnusedUse ; Dead code, ClearPHP, Simple)
  * Unusual Case For PHP Functions (Php/UpperCaseFunction ; Coding Conventions)
  * Usage Of class_alias() (Classes/ClassAliasUsage ; Appinfo)
  * Use === null (Php/IsnullVsEqualNull ; Analyze, OneFile, RadwellCodes, Simple, php-cs-fixable)
  * Use Cli (Php/UseCli ; Appinfo)
  * Use Const And Functions (Namespaces/UseFunctionsConstants ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP53)
  * Use Constant (Structures/UseConstant ; Analyze, PHP recommendations, php-cs-fixable)
  * Use Constant As Arguments (Functions/UseConstantAsArguments ; Analyze, Simple)
  * Use Instanceof (Classes/UseInstanceof ; Analyze, Simple)
  * Use Lower Case For Parent, Static And Self (Php/CaseForPSS ; CompatibilityPHP54, CompatibilityPHP53)
  * Use Nullable Type (Php/UseNullableType ; Appinfo, CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53, CompatibilityPHP70)
  * Use PHP Object API (Php/UseObjectApi ; Analyze, ClearPHP, Simple)
  * Use Pathinfo (Php/UsePathinfo ; Analyze, Simple, Level 3)
  * Use System Tmp (Structures/UseSystemTmp ; Analyze, Simple, Level 3)
  * Use This (Classes/UseThis ; Internal)
  * Use Web (Php/UseWeb ; Appinfo)
  * Use With Fully Qualified Name (Namespaces/UseWithFullyQualifiedNS ; Analyze, Coding Conventions, PHP recommendations, Simple)
  * Use const (Constants/ConstRecommended ; Analyze, Coding Conventions, Top10)
  * Use password_hash() (Php/Password55 ; CompatibilityPHP55)
  * Use random_int() (Php/BetterRand ; Analyze, Security, CompatibilityPHP71, Simple, Level 2)
  * Used Classes (Classes/UsedClass ; Internal)
  * Used Functions (Functions/UsedFunctions ; Internal)
  * Used Interfaces (Interfaces/UsedInterfaces ; Internal)
  * Used Methods (Classes/UsedMethods ; Internal)
  * Used Once Variables (In Scope) (Variables/VariableUsedOnceByContext ; Analyze, OneFile, ClearPHP, Simple, Level 4)
  * Used Once Variables (Variables/VariableUsedOnce ; Analyze, OneFile, Simple, Top10)
  * Used Private Methods (Classes/UsedPrivateMethod ; Internal)
  * Used Protected Method (Classes/UsedProtectedMethod ; )
  * Used Static Properties (Classes/UsedPrivateProperty ; Internal)
  * Used Trait (Traits/UsedTrait ; Internal)
  * Used Use (Namespaces/UsedUse ; )
  * Useless Abstract Class (Classes/UselessAbstract ; Analyze, Simple)
  * Useless Brackets (Structures/UselessBrackets ; Analyze, RadwellCodes, Simple)
  * Useless Constructor (Classes/UselessConstructor ; Analyze, Simple, Level 3)
  * Useless Final (Classes/UselessFinal ; Analyze, OneFile, ClearPHP, Simple)
  * Useless Global (Structures/UselessGlobal ; Analyze, OneFile, Simple, Level 2)
  * Useless Instructions (Structures/UselessInstruction ; Analyze, OneFile, ClearPHP, Simple, Level 1)
  * Useless Interfaces (Interfaces/UselessInterfaces ; Analyze, ClearPHP, Simple, ClassReview, Typechecks)
  * Useless Parenthesis (Structures/UselessParenthesis ; Analyze, Simple)
  * Useless Return (Functions/UselessReturn ; Analyze, OneFile, Simple, Level 4)
  * Useless Switch (Structures/UselessSwitch ; Analyze, Simple)
  * Useless Unset (Structures/UselessUnset ; Analyze, OneFile, ClearPHP, Simple, Level 2)
  * Uses Default Values (Functions/UsesDefaultArguments ; Analyze, Simple)
  * Uses Environment (Php/UsesEnv ; Appinfo, Appcontent)
  * Using $this Outside A Class (Classes/UsingThisOutsideAClass ; Analyze, CompatibilityPHP71, Simple, LintButWontExec)
  * Using Short Tags (Structures/ShortTags ; Appinfo)
  * Usort Sorting In PHP 7.0 (Php/UsortSorting ; CompatibilityPHP70)
  * Var Keyword (Classes/OldStyleVar ; Analyze, OneFile, ClearPHP, Simple, Level 1)
  * Variable Constants (Constants/VariableConstant ; Appinfo, Stats)
  * Variable Is Modified (Variables/IsModified ; Internal)
  * Variable Is Read (Variables/IsRead ; Internal)
  * Variables Variables (Variables/VariableVariables ; Appinfo, Stats)
  * Variables With Long Names (Variables/VariableLong ; Appinfo)
  * Variables With One Letter Names (Variables/VariableOneLetter ; Semantics)
  * While(List() = Each()) (Structures/WhileListEach ; Analyze, Performances, OneFile, Simple, Suggestions, Level 2)
  * Written Only Variables (Variables/WrittenOnlyVariable ; Analyze, OneFile, Simple)
  * Wrong Class Name Case (Classes/WrongCase ; Coding Conventions, RadwellCodes, Simple)
  * Wrong Function Name Case (Functions/WrongCase ; Coding Conventions)
  * Wrong Number Of Arguments (Functions/WrongNumberOfArguments ; Analyze, OneFile, Simple)
  * Wrong Number Of Arguments In Methods (Functions/WrongNumberOfArgumentsMethods ; Under Work)
  * Wrong Optional Parameter (Functions/WrongOptionalParameter ; Analyze, Simple, Level 1)
  * Wrong Parameter Type (Php/InternalParameterType ; Analyze, OneFile, Simple)
  * Wrong fopen() Mode (Php/FopenMode ; Analyze)
  * Yield From Usage (Php/YieldFromUsage ; Appinfo, Appcontent)
  * Yield Usage (Php/YieldUsage ; Appinfo, Appcontent)
  * Yoda Comparison (Structures/YodaComparison ; Coding Conventions)
  * __debugInfo() Usage (Php/debugInfoUsage ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP53)
  * __halt_compiler (Php/Haltcompiler ; Appinfo)
  * __toString() Throws Exception (Structures/toStringThrowsException ; Analyze, OneFile, Simple)
  * crypt() Without Salt (Structures/CryptWithoutSalt ; CompatibilityPHP54)
  * error_reporting() With Integers (Structures/ErrorReportingWithInteger ; Analyze, Simple)
  * eval() Without Try (Structures/EvalWithoutTry ; Analyze, Security, Simple, Level 3)
  * ext/0mq (Extensions/Extzmq ; Appinfo)
  * ext/amqp (Extensions/Extamqp ; Appinfo)
  * ext/apache (Extensions/Extapache ; Appinfo)
  * ext/apc (Extensions/Extapc ; Appinfo, CompatibilityPHP55)
  * ext/apcu (Extensions/Extapcu ; Appinfo)
  * ext/array (Extensions/Extarray ; Appinfo)
  * ext/bcmath (Extensions/Extbcmath ; Appinfo)
  * ext/bzip2 (Extensions/Extbzip2 ; Appinfo)
  * ext/cairo (Extensions/Extcairo ; Appinfo)
  * ext/calendar (Extensions/Extcalendar ; Appinfo)
  * ext/com (Extensions/Extcom ; Appinfo)
  * ext/crypto (Extensions/Extcrypto ; Appinfo)
  * ext/ctype (Extensions/Extctype ; Appinfo)
  * ext/curl (Extensions/Extcurl ; Appinfo)
  * ext/cyrus (Extensions/Extcyrus ; Appinfo)
  * ext/date (Extensions/Extdate ; Appinfo)
  * ext/dba (Extensions/Extdba ; Appinfo, CompatibilityPHP53)
  * ext/dio (Extensions/Extdio ; Appinfo)
  * ext/dom (Extensions/Extdom ; Appinfo)
  * ext/eaccelerator (Extensions/Exteaccelerator ; Appinfo)
  * ext/enchant (Extensions/Extenchant ; Appinfo)
  * ext/ereg (Extensions/Extereg ; Appinfo, CompatibilityPHP70)
  * ext/ev (Extensions/Extev ; Appinfo)
  * ext/event (Extensions/Extevent ; Appinfo)
  * ext/exif (Extensions/Extexif ; Appinfo)
  * ext/expect (Extensions/Extexpect ; Appinfo)
  * ext/fann (Extensions/Extfann ; Appinfo)
  * ext/fdf (Extensions/Extfdf ; Appinfo, CompatibilityPHP53)
  * ext/ffmpeg (Extensions/Extffmpeg ; Appinfo)
  * ext/file (Extensions/Extfile ; Appinfo)
  * ext/fileinfo (Extensions/Extfileinfo ; Appinfo)
  * ext/filter (Extensions/Extfilter ; Appinfo)
  * ext/fpm (Extensions/Extfpm ; Appinfo)
  * ext/ftp (Extensions/Extftp ; Appinfo)
  * ext/gd (Extensions/Extgd ; Appinfo)
  * ext/gearman (Extensions/Extgearman ; Appinfo)
  * ext/geoip (Extensions/Extgeoip ; Appinfo)
  * ext/gettext (Extensions/Extgettext ; Appinfo)
  * ext/gmagick (Extensions/Extgmagick ; Appinfo)
  * ext/gmp (Extensions/Extgmp ; Appinfo)
  * ext/gnupgp (Extensions/Extgnupg ; Appinfo)
  * ext/hash (Extensions/Exthash ; Appinfo)
  * ext/ibase (Extensions/Extibase ; Appinfo)
  * ext/iconv (Extensions/Exticonv ; Appinfo)
  * ext/iis (Extensions/Extiis ; Appinfo, Portability)
  * ext/imagick (Extensions/Extimagick ; Appinfo)
  * ext/imap (Extensions/Extimap ; Appinfo)
  * ext/info (Extensions/Extinfo ; Appinfo)
  * ext/inotify (Extensions/Extinotify ; Appinfo)
  * ext/intl (Extensions/Extintl ; Appinfo)
  * ext/json (Extensions/Extjson ; Appinfo)
  * ext/kdm5 (Extensions/Extkdm5 ; Appinfo)
  * ext/ldap (Extensions/Extldap ; Appinfo)
  * ext/libevent (Extensions/Extlibevent ; Appinfo)
  * ext/libxml (Extensions/Extlibxml ; Appinfo)
  * ext/lua (Extensions/Extlua ; Appinfo)
  * ext/mail (Extensions/Extmail ; Appinfo)
  * ext/mailparse (Extensions/Extmailparse ; Appinfo)
  * ext/math (Extensions/Extmath ; Appinfo)
  * ext/mbstring (Extensions/Extmbstring ; Appinfo)
  * ext/mcrypt (Extensions/Extmcrypt ; Appinfo, CompatibilityPHP71)
  * ext/memcache (Extensions/Extmemcache ; Appinfo)
  * ext/memcached (Extensions/Extmemcached ; Appinfo)
  * ext/ming (Extensions/Extming ; Appinfo, CompatibilityPHP53)
  * ext/mongo (Extensions/Extmongo ; Appinfo)
  * ext/mssql (Extensions/Extmssql ; Appinfo)
  * ext/mysql (Extensions/Extmysql ; Appinfo, CompatibilityPHP55)
  * ext/mysqli (Extensions/Extmysqli ; Appinfo)
  * ext/ob (Extensions/Extob ; Appinfo)
  * ext/oci8 (Extensions/Extoci8 ; Appinfo)
  * ext/odbc (Extensions/Extodbc ; Appinfo)
  * ext/opcache (Extensions/Extopcache ; Appinfo)
  * ext/openssl (Extensions/Extopenssl ; Appinfo)
  * ext/parsekit (Extensions/Extparsekit ; Appinfo)
  * ext/password (Extensions/Extpassword ; Appinfo, Appcontent)
  * ext/pcntl (Extensions/Extpcntl ; Appinfo)
  * ext/pcre (Extensions/Extpcre ; Appinfo)
  * ext/pdo (Extensions/Extpdo ; Appinfo)
  * ext/pecl_http (Extensions/Exthttp ; Appinfo, Appcontent)
  * ext/pgsql (Extensions/Extpgsql ; Appinfo)
  * ext/phalcon (Extensions/Extphalcon ; Appinfo)
  * ext/phar (Extensions/Extphar ; Appinfo)
  * ext/php-ast (Extensions/Extast ; Appinfo)
  * ext/posix (Extensions/Extposix ; Appinfo)
  * ext/proctitle (Extensions/Extproctitle ; Appinfo)
  * ext/pspell (Extensions/Extpspell ; Appinfo)
  * ext/readline (Extensions/Extreadline ; Appinfo)
  * ext/recode (Extensions/Extrecode ; Appinfo, Portability)
  * ext/redis (Extensions/Extredis ; Appinfo)
  * ext/reflection (Extensions/Extreflection ; Appinfo)
  * ext/runkit (Extensions/Extrunkit ; Appinfo)
  * ext/sem (Extensions/Extsem ; Appinfo)
  * ext/session (Extensions/Extsession ; Appinfo)
  * ext/shmop (Extensions/Extshmop ; Appinfo)
  * ext/simplexml (Extensions/Extsimplexml ; Appinfo)
  * ext/snmp (Extensions/Extsnmp ; Appinfo)
  * ext/soap (Extensions/Extsoap ; Appinfo)
  * ext/sockets (Extensions/Extsockets ; Appinfo)
  * ext/spl (Extensions/Extspl ; Appinfo)
  * ext/sqlite (Extensions/Extsqlite ; Appinfo)
  * ext/sqlite3 (Extensions/Extsqlite3 ; Appinfo)
  * ext/sqlsrv (Extensions/Extsqlsrv ; Appinfo)
  * ext/ssh2 (Extensions/Extssh2 ; Appinfo)
  * ext/standard (Extensions/Extstandard ; Appinfo)
  * ext/suhosin (Extensions/Extsuhosin ; Appinfo)
  * ext/tidy (Extensions/Exttidy ; Appinfo)
  * ext/tokenizer (Extensions/Exttokenizer ; Appinfo)
  * ext/tokyotyrant (Extensions/Exttokyotyrant ; Appinfo)
  * ext/trader (Extensions/Exttrader ; Appinfo)
  * ext/v8js (Extensions/Extv8js ; Appinfo)
  * ext/wddx (Extensions/Extwddx ; Appinfo)
  * ext/wikidiff2 (Extensions/Extwikidiff2 ; Appinfo)
  * ext/wincache (Extensions/Extwincache ; Appinfo, Portability)
  * ext/xcache (Extensions/Extxcache ; Appinfo)
  * ext/xdebug (Extensions/Extxdebug ; Appinfo)
  * ext/xdiff (Extensions/Extxdiff ; Appinfo)
  * ext/xhprof (Extensions/Extxhprof ; Appinfo)
  * ext/xml (Extensions/Extxml ; Appinfo)
  * ext/xmlreader (Extensions/Extxmlreader ; Appinfo)
  * ext/xmlrpc (Extensions/Extxmlrpc ; Appinfo)
  * ext/xmlwriter (Extensions/Extxmlwriter ; Appinfo)
  * ext/xsl (Extensions/Extxsl ; Appinfo)
  * ext/yaml (Extensions/Extyaml ; Appinfo)
  * ext/yis (Extensions/Extyis ; Appinfo)
  * ext/zip (Extensions/Extzip ; Appinfo)
  * ext/zlib (Extensions/Extzlib ; Appinfo)
  * func_get_arg() Modified (Functions/funcGetArgModified ; Analyze, CompatibilityPHP70, Simple)
  * include_once() Usage (Structures/OnceUsage ; Analyze, Appinfo)
  * isset() With Constant (Structures/IssetWithConstant ; CompatibilityPHP54, CompatibilityPHP55, CompatibilityPHP56, CompatibilityPHP53)
  * list() May Omit Variables (Structures/ListOmissions ; Analyze, Simple, Suggestions, Level 3)
  * mcrypt_create_iv() With Default Values (Structures/McryptcreateivWithoutOption ; CompatibilityPHP70)
  * parse_str() Warning (Security/parseUrlWithoutParameters ; Security)
  * preg_match_all() Flag (Php/PregMatchAllFlag ; Simple, Suggestions)
  * preg_replace With Option e (Structures/pregOptionE ; Analyze, Security, CompatibilityPHP70, CompatibilityPHP71, CompatibilityPHP72, Simple)
  * set_exception_handler() Warning (Php/SetExceptionHandlerPHP7 ; CompatibilityPHP70)
  * var_dump()... Usage (Structures/VardumpUsage ; Analyze, Security, ClearPHP)

* 0.8.3

  * Variable Global (Structures/VariableGlobal)




PHP Error messages
------------------

Exakat helps reduce the amount of error and warning that code is producing by reporting pattern that are likely to emit errors.

81 PHP error message detailled : 

* :ref:` Cannot use parent when current class scope has no parent <class-without-parent>`
* :ref:` array_merge() expects at least 1 parameter, 0 given <array\_merge()-and-variadic>`
* :ref:`"continue" targeting switch is equivalent to "break". Did you mean to use "continue 2"? <continue-is-for-loop>`
* :ref:`Access level to Bar\:\:$publicProperty must be public (as in class Foo) <raised-access-level>`
* :ref:`Access level to c\:\:iPrivate() must be public (as in class i)  <concrete-visibility>`
* :ref:`Access level to x\:\:foo() must be public (as in class i) <implemented-methods-are-public>`
* :ref:`Access level to xx\:\:$x must be public (as in class x) <redefined-property>`
* :ref:`Access to undeclared static property <wrong-access-style-to-property>`
* :ref:`Accessing static property aa\:\:$a as non static <wrong-access-style-to-property>`
* :ref:`An alias (%s) was defined for method %s(), but this method does not exist <undefined-insteadof>`
* :ref:`Argument 1 passed to foo() must be of the type integer, string given <mismatch-type-and-default>`
* :ref:`Array and string offset access syntax with curly braces is deprecated <no-more-curly-arrays>`
* :ref:`Call to undefined function <throw-functioncall>`
* :ref:`Call to undefined method theParent\:\:bar() <undefined-parent>`
* :ref:`Can't inherit abstract function A\:\:bar() <cant-inherit-abstract-method>`
* :ref:`Cannot access parent\:\: when current class scope has no parent <avoid-self-in-interface>`
* :ref:`Cannot access parent\:\: when current class scope has no parent <undefined-parent>`
* :ref:`Cannot access private const  <unreachable-class-constant>`
* :ref:`Cannot access static\:\: when no class scope is active <self,-parent,-static-outside-class>`
* :ref:`Cannot override final method Foo\:\:Bar() <final-class-usage>`
* :ref:`Cannot override final method Foo\:\:FooBar() <final-methods-usage>`
* :ref:`Cannot pass parameter 1 by reference <only-variable-for-reference>`
* :ref:`Cannot unpack array with string keys <no-spread-for-hash>`
* :ref:`Cannot use "parent" when no class scope is active <self,-parent,-static-outside-class>`
* :ref:`Cannot use "self" when no class scope is active <self,-parent,-static-outside-class>`
* :ref:`Cannot use "static" when no class scope is active <self,-parent,-static-outside-class>`
* :ref:`Cannot use a scalar value as an array <string-initialization>`
* :ref:`Cannot use isset() on the result of an expression (you can use "null !== expression" instead) <isset()-with-constant>`
* :ref:`Cannot use object of type Foo as array <$this-is-not-an-array>`
* :ref:`Case-insensitive constants are deprecated. The correct casing for this constant is "A" <constant-case-preference>`
* :ref:`Class 'PARENT' not found <use-lower-case-for-parent,-static-and-self>`
* :ref:`Class 'x' not found <undefined-\:\:class>`
* :ref:`Class BA contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (A\:\:aFoo) <abstract-or-implements>`
* :ref:`Class b cannot implement previously implemented interface i <cant-implement-traversable>`
* :ref:`Class b cannot implement previously implemented interface i <repeated-interface>`
* :ref:`Class fooThrowable cannot implement interface Throwable, extend Exception or Error instead <can't-throw-throwable>`
* :ref:`Class x contains 2 abstract methods and must therefore be declared abstract or implement the remaining methods (x\:\:m1, x\:\:m2) <interfaces-is-not-implemented>`
* :ref:`Class x must implement interface Traversable as part of either Iterator or IteratorAggregate <cant-implement-traversable>`
* :ref:`Could not check compatibility between xx\:\:bar(B $a) and foo\:\:bar(A $a), because class A is not available <incompatible-signature-methods-with-covariance>`
* :ref:`Creating default object from empty value <undefined-variable>`
* :ref:`Declaration of FooParent\:\:Bar() must be compatible with FooChildren\:\:Bar() <method-signature-must-be-compatible>`
* :ref:`Declaration of ab\:\:foo($a) must be compatible with a\:\:foo($a = 1)  <incompatible-signature-methods-with-covariance>`
* :ref:`Declaration of ab\:\:foo($a) must be compatible with a\:\:foo($a = 1)  <incompatible-signature-methods>`
* :ref:`Declaration of ab\:\:foo($a) should be compatible with a\:\:foo($a = 1)  <incompatible-signature-methods-with-covariance>`
* :ref:`Declaration of ab\:\:foo($a) should be compatible with a\:\:foo($a = 1)  <incompatible-signature-methods>`
* :ref:`Defining a custom assert() function is deprecated, as the function has special semantics <assert-function-is-reserved>`
* :ref:`Delimiter must not be alphanumeric or backslash  <no-empty-regex>`
* :ref:`Generators cannot return values using "return"  <generator-cannot-return>`
* :ref:`Generators cannot return values using "return" <no-return-for-generator>`
* :ref:`Invalid numeric literal <malformed-octal>`
* :ref:`Methods with the same name as their class will not be constructors in a future version of PHP; %s has a deprecated constructor <old-style-constructor>`
* :ref:`Non-static method A\:\:B() should not be called statically <non-static-methods-called-in-a-static>`
* :ref:`Old style constructors are DEPRECATED in PHP 7.0, and will be removed in a future version. You should always use ``__construct()`` in new code. <old-style-constructor>`
* :ref:`Only variable references should be returned by reference <no-reference-for-ternary>`
* :ref:`Only variables can be passed by reference <only-variable-for-reference>`
* :ref:`Only variables should be passed by reference <typehinted-references>`
* :ref:`Return value of foo() must be an instance of Bar, none returned  <typehint-must-be-returned>`
* :ref:`The (real) cast is deprecated, use (float) instead <avoid-real>`
* :ref:`The behavior of unparenthesized expressions containing both '.' and '+'/'-' will change in PHP 8: '+'/'-' will take a higher precedence <concat-and-addition>`
* :ref:`The behavior of unparenthesized expressions containing both '.' and '>>'/'<<' will change in PHP 8: '<<'/'>>' will take a higher precedence <concat-and-addition>`
* :ref:`The each() function is deprecated. This message will be suppressed on further calls <php-7.2-removed-functions>`
* :ref:`The parent constructor was not called: the object is in an invalid state <must-call-parent-constructor>`
* :ref:`Too few arguments to function foo(), 1 passed and exactly 2 expected <wrong-number-of-arguments>`
* :ref:`Trait 'T' not found <undefined-trait>`
* :ref:`Trait 'a' not found  <trait-not-found>`
* :ref:`Trait method M has not been applied, because there are collisions with other trait methods on C <method-collision-traits>`
* :ref:`Trait method f has not been applied, because there are collisions with other trait methods on x <useless-alias>`
* :ref:`Trying to access array offset on value of type null <scalar-are-not-arrays>`
* :ref:`Uncaught ArgumentCountError: Too few arguments to function, 0 passed <wrong-number-of-arguments>`
* :ref:`Undefined class constant <avoid-self-in-interface>`
* :ref:`Undefined function <undefined-functions>`
* :ref:`Undefined variable:  <undefined-variable>`
* :ref:`Unparenthesized `a ? b : c ? d : e` is deprecated. Use either `(a ? b : c) ? d : e` or `a ? b : (c ? d : e)` <nested-ternary-without-parenthesis>`
* :ref:`Unsupported operand types <unsupported-operand-types>`
* :ref:`Using $this when not in object context <$this-belongs-to-classes-or-traits>`
* :ref:`__autoload() is deprecated, use spl_autoload_register() instead <old-style-\_\_autoload()>`
* :ref:`__clone method called on non-object <clone-with-non-object>`
* :ref:`define(): Declaration of case-insensitive constants is deprecated <case-insensitive-constants>`
* :ref:`pack(): Type t: unknown format code <invalid-pack-format>`
* :ref:`syntax error, unexpected '-', expecting '=' <invalid-constant-name>`
* :ref:`unpack(): Type t: unknown format code <invalid-pack-format>`




External services
-----------------

List of external services whose configuration files has been commited in the code.

* `Apache <http://www.apache.org/>`_ - .htaccess
* `Apple <http://www.apple.com/>`_ - .DS_Store
* `appveyor <http://www.appveyor.com/>`_ - appveyor.yml, .appveyor.yml
* `ant <https://ant.apache.org/>`_ - build.xml
* `apigen <http://apigen.github.io/ApiGen/>`_ - apigen.yml, apigen.neon
* `arcunit <https://www.archunit.org/>`_ - .arcunit
* `artisan <http://laravel.com/docs/5.1/artisan>`_ - artisan
* `atoum <http://atoum.org/>`_ - .bootstrap.atoum.php, .atoum.php, .atoum.bootstrap.php
* `arcanist <https://secure.phabricator.com/book/phabricator/article/arcanist_lint/>`_ - .arclint, .arcconfig
* `bazaar <http://bazaar.canonical.com/en/>`_ - .bzr
* `babeljs <https://babeljs.io/>`_ - .babel.rc, .babel.js, .babelrc
* `behat <http://docs.behat.org/en/v2.5/>`_ - behat.yml.dist
* `box2 <https://github.com/box-project/box2>`_ - box.json
* `bower <http://bower.io/>`_ - bower.json, .bowerrc
* `circleCI <https://circleci.com/>`_ - circle.yml, .circleci
* `codacy <http://www.codacy.com/>`_ - .codacy.json
* `codeception <https://codeception.com/>`_ - codeception.yml, codeception.dist.yml
* `codecov <https://codecov.io/>`_ - .codecov.yml, codecov.yml
* `codeclimate <http://www.codeclimate.com/>`_ - .codeclimate.yml
* `composer <https://getcomposer.org/>`_ - composer.json, composer.lock, vendor
* `couscous <http://couscous.io/>`_ - couscous.yml
* `Code Sniffer <https://github.com/squizlabs/PHP_CodeSniffer>`_ - .php_cs, .php_cs.dist, .phpcs.xml, php_cs.dist
* `coveralls <https://coveralls.zendesk.com/>`_ - .coveralls.yml
* `cvs <http://savannah.nongnu.org/projects/cvs>`_ - CVS
* `docker <http://www.docker.com/>`_ - .dockerignore, .docker, docker-compose.yml, Dockerfile
* `drone <http://docs.drone.io/>`_ - .dockerignore, .docker
* `editorconfig <https://editorconfig.org/>`_ - .drone.yml
* `eslint <http://eslint.org/>`_ - .eslintrc, .eslintignore, eslintrc.js, .eslintrc.js, .eslintrc.json
* `flintci <https://flintci.io/>`_ - .flintci.yml
* `git <https://git-scm.com/>`_ - .git, .gitignore, .gitattributes, .gitmodules, .mailmap, .githooks
* `github <https://www.github.com/>`_ - .github
* `gitlab <https://www.gitlab.com/>`_ - .gitlab-ci.yml
* `gulpfile <http://gulpjs.com/>`_ - .js
* `grumphp <https://github.com/phpro/grumphp>`_ - grumphp.yml.dist, grumphp.yml
* `gush <https://github.com/gushphp/gush>`_ - .gush.yml
* `humbug <https://github.com/humbug/box.git>`_ - humbug.json.dist, humbug.json
* `infection <https://infection.github.io/>`_ - infection.yml, .infection.yml
* `insight <https://insight.sensiolabs.com/>`_ - .sensiolabs.yml
* `jetbrains <https://www.jetbrains.com/phpstorm/>`_ - .idea
* `jshint <http://jshint.com/>`_ - .jshintrc, .jshintignore
* `mercurial <https://www.mercurial-scm.org/>`_ - .hg, .hgtags, .hgignore, .hgeol
* `mkdocs <http://www.mkdocs.org>`_ - mkdocs.yml
* `npm <https://www.npmjs.com/>`_ - package.json, .npmignore, .npmrc
* `openshift <https://www.openshift.com/>`_ - .openshift
* `phan <https://github.com/etsy/phan>`_ - .phan
* `pharcc <https://github.com/cbednarski/pharcc>`_ - .pharcc.yml
* `phalcon <https://phalconphp.com/>`_ - .phalcon
* `phpbench <https://github.com/phpbench/phpbench>`_ - phpbench.json
* `phpci <https://www.phptesting.org/>`_ - phpci.yml
* `Phpdocumentor <https://www.phpdoc.org/>`_ - .phpdoc.xml
* `phpdox <https://github.com/theseer/phpdox>`_ - phpdox.xml.dist, phpdox.xml
* `phinx <https://phinx.org/>`_ - phinx.yml
* `phpformatter <https://github.com/mmoreram/php-formatter>`_ - .formatter.yml
* `phpmetrics <http://www.phpmetrics.org/>`_ - .phpmetrics.yml.dist
* `phpsa <https://github.com/ovr/phpsa>`_ - .phpsa.yml
* `phpspec <http://www.phpspec.net/en/latest/>`_ - phpspec.yml, .phpspec, phpspec.yml.dist
* `phpstan <https://github.com/phpstan>`_ - phpstan.neon, .phpstan.neon
* `phpswitch <https://github.com/jubianchi/phpswitch>`_ - .phpswitch.yml
* `PHPUnit <https://www.phpunit.de/>`_ - phpunit.xml.dist
* `prettier <https://prettier.io/>`_ - .prettierrc, .prettierignore
* `psalm <https://getpsalm.org/>`_ - psalm.xml
* `puppet <https://puppet.com/>`_ - .puppet
* `rmt <https://github.com/liip/RMT>`_ - .rmt.yml
* `robo <https://robo.li/>`_ - RoboFile.php
* `scrutinizer <https://scrutinizer-ci.com/>`_ - .scrutinizer.yml
* `semantic versioning <http://semver.org/>`_ - .semver
* `SPIP <https://www.spip.net/>`_ - paquet.xml
* `stickler <https://stickler-ci.com/docs>`_ - .stickler.yml
* `storyplayer <https://datasift.github.io/storyplayer/>`_ - storyplayer.json.dist
* `styleci <https://styleci.io/>`_ - .styleci.yml
* `stylelint <https://stylelint.io/>`_ - .stylelintrc
* `sublimelinter <http://www.sublimelinter.com/en/latest/>`_ - .csslintrc
* `svn <https://subversion.apache.org/>`_ - svn.revision, .svn, .svnignore
* `transifex <https://www.transifex.com/>`_ - .tx
* `Robots.txt <http://www.robotstxt.org/>`_ - robots.txt
* `travis <https://travis-ci.org/>`_ - .travis.yml, .env.travis, .travis, .travis.php.ini, .travis.coverage.sh, .travis.ini
* `varci <https://var.ci/>`_ - .varci, .varci.yml
* `Vagrant <https://www.vagrantup.com/>`_ - Vagrantfile
* `visualstudio <https://code.visualstudio.com/>`_ - .vscode
* `Zend_Tool <https://framework.zend.com/>`_ - zfproject.xml

External links
--------------

List of external links mentionned in this documentation.

* `#QuandLeDevALaFleme <https://twitter.com/bsmt_nevers/status/949238391769653249>`_
* `$_ENV <http://php.net/reserved.variables.environment.php>`_
* `$GLOBALS <http://php.net/manual/en/reserved.variables.globals.php>`_
* `$HTTP_RAW_POST_DATA variable <http://php.net/manual/en/reserved.variables.httprawpostdata.php>`_
* `.exakat.ini` or `.exakat.yaml` file. See `Add Exakat To Your CI Pipeline <https://www.exakat.io/add-exakat-to-your-ci-pipeline/>`_
* `.phar` from the exakat.io website : `www.exakat.io <http://www.exakat.io/versions/>`_
* `10 GitHub Security Best Practices <https://snyk.io/blog/ten-git-hub-security-best-practices/>`_
* `1003.1-2008 - IEEE Standard for Information Technology - Portable Operating System Interface (POSIX(R)) <https://standards.ieee.org/findstds/standard/1003.1-2008.html>`_
* `[blog] array_column() <https://benramsey.com/projects/array-column/>`_
* `[CVE-2017-6090] <https://cxsecurity.com/issue/WLB-2017100031>`_
* `[HttpFoundation] Make sessions secure and lazy #24523 <https://github.com/symfony/symfony/pull/24523>`_
* `__autoload <http://php.net/autoload>`_
* `__get performance questions with PHP <https://stackoverflow.com/questions/3330852/get-set-call-performance-questions-with-php>`_
* `A PHP extension for Redis <https://github.com/phpredis/phpredis/>`_
* `Add array_key_exists to the list of specialy compiled functions <https://bugs.php.net/bug.php?id=76148>`_
* `Allow a trailing comma in function calls <https://wiki.php.net/rfc/trailing-comma-function-calls>`_
* `Alternative PHP Cache <http://php.net/apc>`_
* `Alternative syntax <http://php.net/manual/en/control-structures.alternative-syntax.php>`_
* `Anonymous functions <http://php.net/manual/en/functions.anonymous.php>`_
* `ansible <http://docs.ansible.com/ansible/intro_installation.html>`_
* `APCU <http://www.php.net/manual/en/book.apcu.php>`_
* `Argon2 Password Hash <https://wiki.php.net/rfc/argon2_password_hash>`_
* `Arithmetic Operators <http://php.net/manual/en/language.operators.arithmetic.php>`_
* `Aronduby Dump <https://github.com/aronduby/dump>`_
* `Array <http://php.net/manual/en/language.types.array.php>`_
* `array <http://php.net/manual/en/language.types.array.php>`_
* `Array Functions <https://www.php.net/manual/en/ref.array.php>`_
* `array_fill_keys <http://php.net/array_fill_keys>`_
* `array_filter <https://php.net/array_filter>`_
* `array_key_exists() with objects <https://wiki.php.net/rfc/deprecations_php_7_4#array_key_exists_with_objects>`_
* `array_map <http://php.net/array_map>`_
* `array_search <http://php.net/array_search>`_
* `array_slice <http://www.php.net/array_slice>`_
* `array_unique <http://php.net/array_unique>`_
* `ArrayAccess <http://php.net/manual/en/class.arrayaccess.php>`_
* `Arrays <http://php.net/manual/en/book.array.php>`_
* `Arrays syntax <http://php.net/manual/en/language.types.array.php>`_
* `assert <http://php.net/assert>`_
* `Assignation Operators <http://php.net/manual/en/language.operators.assignment.php>`_
* `Autoloading Classe <http://php.net/manual/en/language.oop5.autoload.php>`_
* `Avoid Else, Return Early <http://blog.timoxley.com/post/47041269194/avoid-else-return-early>`_
* `Avoid nesting too deeply and return early (part 1) <https://github.com/jupeter/clean-code-php#avoid-nesting-too-deeply-and-return-early-part-1>`_
* `Avoid option arrays in constructors <http://bestpractices.thecodingmachine.com/php/design_beautiful_classes_and_methods.html#avoid-option-arrays-in-constructors>`_
* `Avoid optional services as much as possible <http://bestpractices.thecodingmachine.com/php/design_beautiful_classes_and_methods.html#avoid-optional-services-as-much-as-possible>`_
* `Backward incompatible changes <http://php.net/manual/en/migration71.incompatible.php>`_
* `Backward incompatible changes PHP 7.0 <http://php.net/manual/en/migration70.incompatible.php>`_
* `basename <http://www.php.net/basename>`_
* `bazaar <http://bazaar.canonical.com/en/>`_
* `BC Math Functions <http://www.php.net/bcmath>`_
* `Benoit Burnichon <https://twitter.com/BenoitBurnichon>`_
* `Bitmask Constant Arguments in PHP <https://medium.com/@liamhammett/bitmask-constant-arguments-in-php-cf32bf35c73>`_
* `Bitwise Operators <https://www.php.net/manual/en/language.operators.bitwise.php>`_
* `Brandon Savage <https://twitter.com/BrandonSavage>`_
* `browscap <http://browscap.org/>`_
* `Bug #50887 preg_match , last optional sub-patterns ignored when empty <https://bugs.php.net/bug.php?id=50887>`_
* `Bzip2 Functions <http://php.net/bzip2>`_
* `Cairo Graphics Library <https://cairographics.org/>`_
* `Calendar Functions <http://www.php.net/manual/en/ref.calendar.php>`_
* `Callback / callable <http://php.net/manual/en/language.types.callable.php>`_
* `Can you spot the vulnerability? (openssl_verify) <https://twitter.com/ripstech/status/1124325237967994880>`_
* `Cant Use Return Value In Write Context <https://stackoverflow.com/questions/1075534/cant-use-method-return-value-in-write-context>`_
* `cat: write error: Broken pipe <https://askubuntu.com/questions/421663/cat-write-error-broken-pipe>`_
* `Change the precedence of the concatenation operator <https://wiki.php.net/rfc/concatenation_precedence>`_
* `Changes to variable handling <http://php.net/manual/en/migration70.incompatible.php>`_
* `Class Abstraction <http://php.net/abstract>`_
* `Class Constant <http://php.net/manual/en/language.oop5.constants.php>`_
* `Class Constants <http://php.net/manual/en/language.oop5.constants.php>`_
* `class_alias <http://php.net/class_alias>`_
* `Classes abstraction <http://php.net/abstract>`_
* `Closure class <http://php.net/closure>`_
* `Closure::bind <http://php.net/manual/en/closure.bind.php>`_
* `Cmark <https://github.com/commonmark/cmark>`_
* `Codeigniter <https://codeigniter.com/>`_
* `COM and .Net (Windows) <http://php.net/manual/en/book.com.php>`_
* `compact <http://www.php.net/compact>`_
* `Comparison Operators <http://php.net/manual/en/language.operators.comparison.php>`_
* `composer <https://getcomposer.org/>`_
* `Conflict resolution <http://php.net/manual/en/language.oop5.traits.php#language.oop5.traits.conflict>`_
* `Constant definition <http://php.net/const>`_
* `Constant Scalar Expressions <https://wiki.php.net/rfc/const_scalar_exprs>`_
* `constant() <http://php.net/constant>`_
* `Constants <http://php.net/manual/en/language.constants.php>`_
* `Constructors and Destructors <http://php.net/manual/en/language.oop5.decon.php>`_
* `Cookies <http://php.net/manual/en/features.cookies.php>`_
* `count <http://php.net/count>`_
* `Courier Anti-pattern <https://r.je/oop-courier-anti-pattern.html>`_
* `Covariant Returns and Contravariant Parameters <https://wiki.php.net/rfc/covariant-returns-and-contravariant-parameters>`_
* `crc32() <http://www.php.net/crc32>`_
* `Cross-Site Scripting (XSS) <https://phpsecurity.readthedocs.io/en/latest/Cross-Site-Scripting-(XSS).html>`_
* `crypt <http://www.php.net/crypt>`_
* `Cryptography Extensions <http://php.net/manual/en/refs.crypto.php>`_
* `CSPRNG <http://php.net/manual/en/book.csprng.php>`_
* `Ctype funtions <http://php.net/manual/en/ref.ctype.php>`_
* `curl <http://www.php.net/curl>`_
* `Curl for PHP <http://php.net/manual/en/book.curl.php>`_
* `curl_version <https://www.php.net/manual/en/function.curl-version.php>`_
* `CWE-484: Omitted Break Statement in Switch <https://cwe.mitre.org/data/definitions/484.html>`_
* `CWE-625: Permissive Regular Expression <https://cwe.mitre.org/data/definitions/625.html>`_
* `Cyrus <http://php.net/manual/en/book.cyrus.php>`_
* `Data filtering <http://php.net/manual/en/book.filter.php>`_
* `Data structures <http://docs.php.net/manual/en/book.ds.php>`_
* `Database (dbm-style) Abstraction Layer <http://php.net/manual/en/book.dba.php>`_
* `Date and Time <http://php.net/manual/en/book.datetime.php>`_
* `DCDFLIB <https://people.sc.fsu.edu/~jburkardt/c_src/cdflib/cdflib.html>`_
* `declare <http://php.net/manual/en/control-structures.declare.php>`_
* `define <http://php.net/manual/en/function.define.php>`_
* `Dependency Injection Smells <http://seregazhuk.github.io/2017/05/04/di-smells/>`_
* `Deprecate and remove continue targeting switch <https://wiki.php.net/rfc/continue_on_switch_deprecation>`_
* `Deprecate and remove INTL_IDNA_VARIANT_2003 <https://wiki.php.net/rfc/deprecate-and-remove-intl_idna_variant_2003>`_
* `Deprecate curly brace syntax <https://derickrethans.nl/phpinternalsnews-19.html>`_
* `Deprecated features in PHP 5.4.x <http://php.net/manual/en/migration54.deprecated.php>`_
* `Deprecated features in PHP 5.5.x <http://php.net/manual/fr/migration55.deprecated.php>`_
* `Deprecated features in PHP 7.2.x <http://php.net/manual/en/migration72.deprecated.php>`_
* `Deprecation allow_url_include <https://wiki.php.net/rfc/deprecations_php_7_4#allow_url_include>`_
* `Deprecations for PHP 7.2 <https://wiki.php.net/rfc/deprecations_php_7_2>`_
* `Destructor <http://php.net/manual/en/language.oop5.decon.php#language.oop5.decon.destructor>`_
* `DIO <http://php.net/manual/en/refs.fileprocess.file.php>`_
* `Dir predefined constants <http://php.net/manual/en/dir.constants.php>`_
* `directive error_reporting <http://php.net/manual/en/errorfunc.configuration.php#ini.error-reporting>`_
* `Directly calling __clone is allowed <https://wiki.php.net/rfc/abstract_syntax_tree#directly_calling_clone_is_allowed>`_
* `dirname <http://php.net/dirname>`_
* `dist.exakat.io <http://dist.exakat.io/>`_
* `dl <http://www.php.net/dl>`_
* `Do your objects talk to strangers? <https://www.brandonsavage.net/do-your-objects-talk-to-strangers/>`_
* `Docker <http://www.docker.com/>`_
* `Docker image <https://hub.docker.com/r/exakat/exakat/>`_
* `Document Object Model <http://php.net/manual/en/book.dom.php>`_
* `Don't pass this out of a constructor <http://www.javapractices.com/topic/TopicAction.do?Id=252>`_
* `Don't repeat yourself (DRY) <https://en.wikipedia.org/wiki/Don%27t_repeat_yourself>`_
* `Don’t turn off CURLOPT_SSL_VERIFYPEER, fix your PHP configuration <https://www.saotn.org/dont-turn-off-curlopt_ssl_verifypeer-fix-php-configuration/>`_
* `dotdeb instruction <https://www.dotdeb.org/instructions/>`_
* `Double quoted <http://php.net/manual/en/language.types.string.php#language.types.string.syntax.double>`_
* `download <https://www.exakat.io/download-exakat/>`_
* `Drupal <http://www.drupal.org/>`_
* `Dynamically Access PHP Object Properties with $this <https://drupalize.me/blog/201508/dynamically-access-php-object-properties>`_
* `E_WARNING for invalid container read array-access <https://wiki.php.net/rfc/notice-for-non-valid-array-container>`_
* `Eaccelerator <http://eaccelerator.net/>`_
* `elseif/else if <http://php.net/manual/en/control-structures.elseif.php>`_
* `empty <http://www.php.net/empty>`_
* `Empty Catch Clause <http://wiki.c2.com/?EmptyCatchClause>`_
* `Empty interfaces are bad practice <https://r.je/empty-interfaces-bad-practice.html>`_
* `empty() <http://www.php.net/empty>`_
* `Enchant spelling library <http://php.net/manual/en/book.enchant.php>`_
* `Ereg <http://php.net/manual/en/function.ereg.php>`_
* `Error Control Operators <http://php.net/manual/en/language.operators.errorcontrol.php>`_
* `Error reporting <https://php.earth/docs/security/intro#error-reporting>`_
* `Escape sequences <http://php.net/manual/en/regexp.reference.escape.php>`_
* `Ev <http://php.net/manual/en/book.ev.php>`_
* `eval <http://www.php.net/eval>`_
* `Event <http://php.net/event>`_
* `Exakat <http://www.exakat.io/>`_
* `Exakat cloud <https://www.exakat.io/exakat-cloud/>`_
* `Exakat SAS <https://www.exakat.io/get-php-expertise/>`_
* `exakat/exakat <https://hub.docker.com/r/exakat/exakat/>`_
* `Exception::__construct <http://php.net/manual/en/exception.construct.php>`_
* `Exceptions <http://php.net/manual/en/language.exceptions.php>`_
* `Exchangeable image information <http://php.net/manual/en/book.exif.php>`_
* `Execution Operators <http://php.net/manual/en/language.operators.execution.php>`_
* `EXP30-C. Do not depend on the order of evaluation for side effects <https://wiki.sei.cmu.edu/confluence/display/c/EXP30-C.+Do+not+depend+on+the+order+of+evaluation+for+side+effects>`_
* `expect <http://php.net/manual/en/book.expect.php>`_
* `explode <https://www.php.net/manual/en/function.explode.php>`_
* `ext-async <https://github.com/concurrent-php/ext-async>`_
* `ext-http <https://github.com/m6w6/ext-http>`_
* `ext/ast <https://pecl.php.net/package/ast>`_
* `ext/gender manual <http://php.net/manual/en/book.gender.php>`_
* `ext/hash extension <http://www.php.net/manual/en/book.hash.php>`_
* `ext/hrtime manual <http://php.net/manual/en/intro.hrtime.php>`_
* `ext/inotify manual <http://php.net/manual/en/book.inotify.php>`_
* `ext/leveldb on Github <https://github.com/reeze/php-leveldb>`_
* `ext/lua manual <http://php.net/manual/en/book.lua.php>`_
* `ext/memcached manual <http://php.net/manual/en/book.memcached.php>`_
* `ext/OpenSSL <http://php.net/manual/en/book.openssl.php>`_
* `ext/readline <http://php.net/manual/en/book.readline.php>`_
* `ext/recode <http://www.php.net/manual/en/book.recode.php>`_
* `ext/SeasLog on Github <https://github.com/SeasX/SeasLog>`_
* `ext/sqlite <http://php.net/manual/en/book.sqlite.php>`_
* `ext/sqlite3 <http://php.net/manual/en/book.sqlite3.php>`_
* `ext/uopz <https://pecl.php.net/package/uopz>`_
* `ext/varnish <http://php.net/manual/en/book.varnish.php>`_
* `ext/zookeeper <http://php.net/zookeeper>`_
* `Extension Apache <http://php.net/manual/en/book.apache.php>`_
* `extension FANN <http://php.net/manual/en/book.fann.php>`_
* `extension mcrypt <http://www.php.net/manual/en/book.mcrypt.php>`_
* `extract <http://php.net/extract>`_
* `Ez <https://ez.no/>`_
* `Factory (object-oriented programming) <https://en.wikipedia.org/wiki/Factory_(object-oriented_programming)>`_
* `FAM <http://oss.sgi.com/projects/fam/>`_
* `FastCGI Process Manager <http://php.net/fpm>`_
* `FDF <http://www.adobe.com/devnet/acrobat/fdftoolkit.html>`_
* `ffmpeg-php <http://ffmpeg-php.sourceforge.net/>`_
* `file_get_contents <http://php.net/file_get_contents>`_
* `filesystem <http://www.php.net/manual/en/book.filesystem.php>`_
* `Filinfo <http://php.net/manual/en/book.fileinfo.php>`_
* `Final Keyword <http://php.net/manual/en/language.oop5.final.php>`_
* `Firebase / Interbase <http://php.net/manual/en/book.ibase.php>`_
* `Flag Argument <https://martinfowler.com/bliki/FlagArgument.html>`_
* `FlagArgument <https://www.martinfowler.com/bliki/FlagArgument.html>`_
* `Floating point numbers <http://php.net/manual/en/language.types.float.php#language.types.float>`_
* `Floats <http://php.net/manual/en/language.types.float.php>`_
* `Fluent Interfaces in PHP <http://mikenaberezny.com/2005/12/20/fluent-interfaces-in-php/>`_
* `foreach <http://php.net/manual/en/control-structures.foreach.php>`_
* `Foreign Function Interface <https://www.php.net/manual/en/book.ffi.php>`_
* `Frederic Bouchery <https://twitter.com/FredBouchery/>`_
* `From assumptions to assertions <https://rskuipers.com/entry/from-assumptions-to-assertions>`_
* `FuelPHP <https://fuelphp.com>`_
* `Function arguments <http://php.net/manual/en/functions.arguments.php>`_
* `Functions <http://php.net/manual/en/language.functions.php>`_
* `Gearman on PHP <http://php.net/manual/en/book.gearman.php>`_
* `Generalize support of negative string offsets <https://wiki.php.net/rfc/negative-string-offsets>`_
* `Generator delegation via yield from <http://php.net/manual/en/language.generators.syntax.php#control-structures.yield.from>`_
* `Generator Syntax <http://php.net/manual/en/language.generators.syntax.php>`_
* `Generators overview <http://php.net/manual/en/language.generators.overview.php>`_
* `GeoIP <http://php.net/manual/en/book.geoip.php>`_
* `get_class <http://php.net/get_class>`_
* `Gettext <https://www.gnu.org/software/gettext/manual/gettext.html>`_
* `git <https://git-scm.com/>`_
* `Github.com/exakat/exakat <https://github.com/exakat/exakat>`_
* `GMP <http://php.net/manual/en/book.gmp.php>`_
* `Gnupg Function for PHP <http://www.php.net/manual/en/book.gnupg.php>`_
* `Goto <http://php.net/manual/en/control-structures.goto.php>`_
* `Group Use Declaration RFC <https://wiki.php.net/rfc/group_use_declarations>`_
* `GRPC <http://www.grpc.io/>`_
* `Handling file uploads <http://php.net/manual/en/features.file-upload.php>`_
* `Hardening Your HTTP Security Headers <https://www.keycdn.com/blog/http-security-headers>`_
* `hash <http://www.php.net/hash>`_
* `HASH Message Digest Framework <http://www.php.net/manual/en/book.hash.php>`_
* `hash_algos <http://php.net/hash_algos>`_
* `hash_file <http://php.net/manual/en/function.hash-file.php>`_
* `Heredoc <http://php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc>`_
* `hg <https://www.mercurial-scm.org/>`_
* `Holger Woltersdorf <https://twitter.com/hollodotme>`_
* `How to fix Headers already sent error in PHP <http://stackoverflow.com/questions/8028957/how-to-fix-headers-already-sent-error-in-php>`_
* `How to pick bad function and variable names <http://mojones.net/how-to-pick-bad-function-and-variable-names.html>`_
* `htmlentities <http://www.php.net/htmlentities>`_
* `htmlspecialchars <https://www.php.net/htmlspecialchars>`_
* `https://www.exakat.io/ <https://www.exakat.io/>`_
* `https://www.exakat.io/index.php?file=latest <https://www.exakat.io/index.php?file=latest>`_
* `IBM Db2 <http://php.net/manual/en/book.ibm-db2.php>`_
* `Iconv <http://php.net/iconv>`_
* `ICU <http://site.icu-project.org/>`_
* `Ideal regex delimiters in PHP <http://codelegance.com/ideal-regex-delimiters-in-php/>`_
* `idn_to_ascii <http://php.net/manual/en/function.idn-to-ascii.php>`_
* `IERS <https://www.iers.org/IERS/EN/Home/home_node.html>`_
* `igbinary <https://github.com/igbinary/igbinary/>`_
* `IIS Administration <http://www.php.net/manual/en/book.iisfunc.php>`_
* `Image Processing and GD <http://php.net/manual/en/book.image.php>`_
* `Imagick for PHP <http://php.net/manual/en/book.imagick.php>`_
* `IMAP <http://www.php.net/imap>`_
* `Implement ZEND_ARRAY_KEY_EXISTS opcode to speed up array_key_exists() <https://github.com/php/php-src/pull/3360>`_
* `implode <http://php.net/implode>`_
* `In a PHP5 class, when does a private constructor get called? <https://stackoverflow.com/questions/26079/in-a-php5-class-when-does-a-private-constructor-get-called>`_
* `in_array() <http://www.php.net/in_array>`_
* `include <http://php.net/manual/en/function.include.php>`_
* `include_once <http://php.net/manual/en/function.include-once.php>`_
* `Incrementing/Decrementing Operators <http://php.net/manual/en/language.operators.increment.php>`_
* `Info Predefined Constants <http://php.net/manual/en/info.constants.php>`_
* `Instanceof <http://php.net/manual/en/language.operators.type.php>`_
* `Integer overflow <http://php.net/manual/en/language.types.integer.php#language.types.integer.overflow>`_
* `Integer Syntax <http://php.net/manual/en/language.types.integer.php#language.types.integer.syntax>`_
* `Integers <http://php.net/manual/en/language.types.integer.php>`_
* `Interfaces <http://php.net/manual/en/language.oop5.interfaces.php#language.oop5.interfaces>`_
* `Internal Constructor Behavior <https://wiki.php.net/rfc/internal_constructor_behaviour>`_
* `Is it a bad practice to have multiple classes in the same file? <https://stackoverflow.com/questions/360643/is-it-a-bad-practice-to-have-multiple-classes-in-the-same-file>`_
* `Isset <http://www.php.net/isset>`_
* `Isset Ternary <https://wiki.php.net/rfc/isset_ternary>`_
* `It is the 31st again <https://twitter.com/rasmus/status/925431734128197632>`_
* `iterable pseudo-type <http://php.net/manual/en/migration71.new-features.php#migration71.new-features.iterable-pseudo-type>`_
* `Joomla <http://www.joomla.org/>`_
* `json_decode <http://php.net/json_decode>`_
* `Judy C library <http://judy.sourceforge.net/>`_
* `Kafka client for PHP <https://github.com/arnaud-lb/php-rdkafka>`_
* `Kerberos V <http://php.net/manual/en/book.kadm5.php>`_
* `Lapack <http://php.net/manual/en/book.lapack.php>`_
* `Laravel <http://www.lavarel.com/>`_
* `Late Static Bindings <http://php.net/manual/en/language.oop5.late-static-bindings.php>`_
* `libeio <http://software.schmorp.de/pkg/libeio.html>`_
* `libevent <http://www.libevent.org/>`_
* `libmongoc <https://github.com/mongodb/mongo-c-driver>`_
* `libuuid <https://linux.die.net/man/3/libuuid>`_
* `libxml <http://www.php.net/manual/en/book.libxml.php>`_
* `Lightweight Directory Access Protocol <http://php.net/manual/en/book.ldap.php>`_
* `list <http://php.net/manual/en/function.list.php>`_
* `List of function aliases <http://php.net/manual/en/aliases.php>`_
* `List of HTTP header fields <https://en.wikipedia.org/wiki/List_of_HTTP_header_fields>`_
* `List of HTTP status codes <https://en.wikipedia.org/wiki/List_of_HTTP_status_codes>`_
* `List of Keywords <http://php.net/manual/en/reserved.keywords.php>`_
* `List of other reserved words <http://php.net/manual/en/reserved.other-reserved-words.php>`_
* `List of TCP and UDP port numbers <https://en.wikipedia.org/wiki/List_of_TCP_and_UDP_port_numbers>`_
* `list() Reference Assignment <https://wiki.php.net/rfc/list_reference_assignment>`_
* `Logical Expressions in C/C++. Mistakes Made by Professionals <http://www.viva64.com/en/b/0390/>`_
* `Logical Operators <http://php.net/manual/en/language.operators.logical.php>`_
* `Loosening Reserved Word Restrictions <http://php.net/manual/en/migration70.other-changes.php#migration70.other-changes.loosening-reserved-words>`_
* `lzf <http://php.net/lzf>`_
* `Magic Constants <http://php.net/manual/en/language.constants.predefined.php>`_
* `Magic Hashes <https://blog.whitehatsec.com/magic-hashes/>`_
* `Magic Method <http://php.net/manual/en/language.oop5.magic.php>`_
* `Magic Methods <http://php.net/manual/en/language.oop5.magic.php>`_
* `Magic methods <http://php.net/manual/en/language.oop5.magic.php>`_
* `mail <http://php.net/mail>`_
* `Mail related functions <http://www.php.net/manual/en/book.mail.php>`_
* `Marco Pivetta tweet <https://twitter.com/Ocramius/status/811504929357660160>`_
* `Math predefined constants <http://php.net/manual/en/math.constants.php>`_
* `Mathematical Functions <http://php.net/manual/en/book.math.php>`_
* `mb_encoding_detect <https://php.net/mb-encoding-detect>`_
* `mb_str_split <http://php.net/mb_str_split>`_
* `Mbstring <http://www.php.net/manual/en/book.mbstring.php>`_
* `mcrypt_create_iv() <http://php.net/manual/en/function.mcrypt-create-iv.php>`_
* `MD5 <http://php.net/md5>`_
* `Media Type <https://en.wikipedia.org/wiki/Media_type>`_
* `Memcache on PHP <http://www.php.net/manual/en/book.memcache.php>`_
* `Method overloading <http://php.net/manual/en/language.oop5.overloading.php#object.call>`_
* `mhash <http://mhash.sourceforge.net/>`_
* `Microsoft SQL Server <http://www.php.net/manual/en/book.mssql.php>`_
* `Microsoft SQL Server Driver <http://php.net/sqlsrv>`_
* `Ming (flash) <http://www.libming.org/>`_
* `MongoDB driver <http://php.net/mongo>`_
* `move_uploaded_file <http://php.net/move_uploaded_file>`_
* `msgpack for PHP <https://github.com/msgpack/msgpack-php>`_
* `MySQL Improved Extension <http://php.net/manual/en/book.mysqli.php>`_
* `mysqli <http://php.net/manual/en/book.mysqli.php>`_
* `Ncurses Terminal Screen Control <http://php.net/manual/en/book.ncurses.php>`_
* `Negative architecture, and assumptions about code <https://matthiasnoback.nl/2018/08/negative-architecture-and-assumptions-about-code/>`_
* `Nested Ternaries are Great <https://medium.com/javascript-scene/nested-ternaries-are-great-361bddd0f340>`_
* `Net SNMP <http://www.net-snmp.org/>`_
* `net_get_interfaces <http://php.net/net_get_interfaces>`_
* `New Classes and Interfaces <http://php.net/manual/en/migration70.classes.php>`_
* `New custom object serialization mechanism <https://wiki.php.net/rfc/custom_object_serialization>`_
* `New features <http://php.net/manual/en/migration56.new-features.php>`_
* `New global constants in 7.2 <http://php.net/manual/en/migration72.constants.php>`_
* `New global constants in 7.4 <http://php.net/manual/en/migration74.constants.php>`_
* `New object type <http://php.net/manual/en/migration72.new-features.php#migration72.new-features.iterable-pseudo-type>`_
* `Newt <http://people.redhat.com/rjones/ocaml-newt/html/Newt.html>`_
* `No Dangling Reference <https://github.com/dseguy/clearPHP/blob/master/rules/no-dangling-reference.md>`_
* `Nowdoc <http://php.net/manual/en/language.types.string.php#language.types.string.syntax.nowdoc>`_
* `Null and True <https://twitter.com/Chemaclass/status/1144588647464951808>`_
* `Null Coalescing Assignment Operator <https://wiki.php.net/rfc/null_coalesce_equal_operator>`_
* `Null Coalescing Operator <http://php.net/manual/en/language.operators.comparison.php#language.operators.comparison.coalesce>`_
* `Null Object Pattern <https://en.wikipedia.org/wiki/Null_Object_pattern#PHP>`_
* `Object Calisthenics, rule # 2 <http://williamdurand.fr/2013/06/03/object-calisthenics/>`_
* `Object Calisthenics, rule # 5 <http://williamdurand.fr/2013/06/03/object-calisthenics/#one-dot-per-line>`_
* `Object cloning <http://php.net/manual/en/language.oop5.cloning.php>`_
* `Object Inheritance <http://www.php.net/manual/en/language.oop5.inheritance.php>`_
* `Object interfaces <http://php.net/manual/en/language.oop5.interfaces.php>`_
* `Object Interfaces <http://php.net/manual/en/language.oop5.interfaces.php>`_
* `Objects and references <http://php.net/manual/en/language.oop5.references.php>`_
* `ODBC (Unified) <http://www.php.net/manual/en/book.uodbc.php>`_
* `online <https://www.exakat.io/top-10-php-classic-traps/>`_
* `OPcache functions <http://www.php.net/manual/en/book.opcache.php>`_
* `opencensus <https://github.com/census-instrumentation/opencensus-php>`_
* `openssl_random_pseudo_byte <https://www.php.net/openssl_random_pseudo_bytes>`_
* `Operator Precedence <http://php.net/manual/en/language.operators.precedence.php>`_
* `Operators Precedence <http://php.net/manual/en/language.operators.precedence.php>`_
* `Optimization: How I made my PHP code run 100 times faster <https://mike42.me/blog/2018-06-how-i-made-my-php-code-run-100-times-faster>`_
* `Optimize array_unique() <https://github.com/php/php-src/commit/6c2c7a023da4223e41fea0225c51a417fc8eb10d>`_
* `Option to make json_encode and json_decode throw exceptions on errors <https://ayesh.me/Upgrade-PHP-7.3#json-exceptions>`_
* `Oracle OCI8 <http://php.net/manual/en/book.oci8.php>`_
* `original idea <https://twitter.com/b_viguier/status/940173951908700161>`_
* `Original MySQL API <http://www.php.net/manual/en/book.mysql.php>`_
* `Output Buffering Control <http://php.net/manual/en/book.outcontrol.php>`_
* `Overload <http://php.net/manual/en/language.oop5.overloading.php#object.get>`_
* `pack <http://php.net/pack>`_
* `Packagist <https://packagist.org/>`_
* `parent <http://php.net/manual/en/keyword.parent.php>`_
* `Parsekit <http://www.php.net/manual/en/book.parsekit.php>`_
* `Parsing and Lexing <http://php.net/manual/en/book.parle.php>`_
* `Passing arguments by reference <http://php.net/manual/en/functions.arguments.php#functions.arguments.by-reference>`_
* `Passing by reference <http://php.net/manual/en/language.references.pass.php>`_
* `Password hashing <http://php.net/manual/en/book.password.php>`_
* `Password Hashing <http://php.net/manual/en/book.password.php>`_
* `Pattern Modifiers <http://php.net/manual/en/reference.pcre.pattern.modifiers.php>`_
* `PCOV <https://github.com/krakjoe/pcov>`_
* `PCRE <http://php.net/pcre>`_
* `PEAR <http://pear.php.net/>`_
* `pecl crypto <https://pecl.php.net/package/crypto>`_
* `PECL ext/xxtea <https://pecl.php.net/package/xxtea>`_
* `pg_last_error <http://php.net/manual/en/function.pg-last-error.php>`_
* `Phalcon <https://phalconphp.com/>`_
* `phar <http://www.php.net/manual/en/book.phar.php>`_
* `PHP - Fatal error: Unsupported operand types [duplicate] <https://stackoverflow.com/questions/2108875/php-fatal-error-unsupported-operand-types>`_
* `PHP 7 performance improvements (3/5): Encapsed strings optimization <https://blog.blackfire.io/php-7-performance-improvements-encapsed-strings-optimization.html>`_
* `PHP 7.0 Backward incompatible changes <http://php.net/manual/en/migration70.incompatible.php>`_
* `PHP 7.0 Removed Functions <http://php.net/manual/en/migration70.incompatible.php#migration70.incompatible.removed-functions>`_
* `PHP 7.1 no longer converts string to arrays the first time a value is assigned with square bracket notation <https://www.drupal.org/project/adaptivetheme/issues/2832900>`_
* `PHP 7.2's "switch" optimisations <https://derickrethans.nl/php7.2-switch.html>`_
* `PHP 7.2's switch optimisations <https://derickrethans.nl/php7.2-switch.html>`_
* `PHP 7.3 Removed Functions <http://php.net/manual/en/migration73.incompatible.php#migration70.incompatible.removed-functions>`_
* `PHP 7.3 UPGRADE NOTES <https://github.com/php/php-src/blob/3b6e1ee4ee05678b5d717cd926a35ffdc1335929/UPGRADING#L66-L81>`_
* `PHP 7.4 Removed Functions <http://php.net/manual/en/migration74.incompatible.php#migration70.incompatible.removed-functions>`_
* `PHP class name constant case sensitivity and PSR-11 <https://gist.github.com/bcremer/9e8d6903ae38a25784fb1985967c6056>`_
* `PHP Classes containing only constants <https://stackoverflow.com/questions/16838266/php-classes-containing-only-constants>`_
* `PHP Clone and Shallow vs Deep Copying <http://jacob-walker.com/blog/php-clone-and-shallow-vs-deep-copying.html>`_
* `PHP Constants <http://php.net/manual/en/language.constants.php>`_
* `PHP Data Object <http://php.net/manual/en/book.pdo.php>`_
* `PHP Decimal <http://php-decimal.io>`_
* `PHP extension for libsodium <https://github.com/jedisct1/libsodium-php>`_
* `PHP gmagick <http://www.php.net/manual/en/book.gmagick.php>`_
* `PHP Options And Information <http://php.net/manual/en/book.info.php>`_
* `PHP Options/Info Functions <http://php.net/manual/en/ref.info.php>`_
* `PHP RFC: Allow a trailing comma in function calls <https://wiki.php.net/rfc/trailing-comma-function-calls>`_
* `PHP RFC: Allow abstract function override <https://wiki.php.net/rfc/allow-abstract-function-override>`_
* `PHP RFC: Arrow Functions <https://wiki.php.net/rfc/arrow_functions>`_
* `PHP RFC: Convert numeric keys in object/array casts <https://wiki.php.net/rfc/convert_numeric_keys_in_object_array_casts>`_
* `PHP RFC: Deprecate and Remove Bareword (Unquoted) Strings <https://wiki.php.net/rfc/deprecate-bareword-strings>`_
* `PHP RFC: Deprecate left-associative ternary operator <https://wiki.php.net/rfc/ternary_associativity>`_
* `PHP RFC: Deprecations for PHP 7.2 : Each() <https://wiki.php.net/rfc/deprecations_php_7_2#each>`_
* `PHP RFC: Deprecations for PHP 7.4 <https://wiki.php.net/rfc/deprecations_php_7_4>`_
* `PHP RFC: is_countable <https://wiki.php.net/rfc/is-countable>`_
* `PHP RFC: Numeric Literal Separator <https://wiki.php.net/rfc/numeric_literal_separator>`_
* `PHP RFC: Scalar Type Hints <https://wiki.php.net/rfc/scalar_type_hints>`_
* `PHP RFC: Syntax for variadic functions <https://wiki.php.net/rfc/variadics>`_
* `PHP RFC: Unicode Codepoint Escape Syntax <https://wiki.php.net/rfc/unicode_escape>`_
* `PHP Tags <http://php.net/manual/en/language.basic-syntax.phptags.php>`_
* `PHP why pi() and M_PI <https://stackoverflow.com/questions/42021176/php-why-pi-and-m-pi>`_
* `PHP-cs-fixer <https://github.com/FriendsOfPHP/PHP-CS-Fixer>`_
* `php-ext-wasm <https://github.com/Hywan/php-ext-wasm>`_
* `php-vips-ext <https://github.com/jcupitt/php-vips-ext>`_
* `php-zbarcode <https://github.com/mkoppanen/php-zbarcode>`_
* `PHP: When is /tmp not /tmp? <https://www.the-art-of-web.com/php/where-is-tmp/>`_
* `phpsdl <https://github.com/Ponup/phpsdl>`_
* `PHPUnit <https://www.phpunit.de/>`_
* `plantuml <http://plantuml.com/>`_
* `PMB <https://www.sigb.net/>`_
* `PostgreSQL <http://php.net/manual/en/book.pgsql.php>`_
* `Predefined Constants <http://php.net/manual/en/reserved.constants.php>`_
* `Predefined Exceptions <http://php.net/manual/en/reserved.exceptions.php>`_
* `Predefined Variables <http://php.net/manual/en/reserved.variables.php>`_
* `preg_filter <https://php.net/preg_filter>`_
* `Prepare for PHP 7 error messages (part 3) <https://www.exakat.io/prepare-for-php-7-error-messages-part-3/>`_
* `Prepared Statements <https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php>`_
* `printf <http://php.net/printf>`_
* `Process Control <http://php.net/manual/en/book.pcntl.php>`_
* `proctitle <http://php.net/manual/en/book.proctitle.php>`_
* `Properties <http://php.net/manual/en/language.oop5.properties.php>`_
* `Property overloading <http://php.net/manual/en/language.oop5.overloading.php#language.oop5.overloading.members>`_
* `Pspell <http://php.net/manual/en/book.pspell.php>`_
* `PSR-11 : Dependency injection container <https://github.com/container-interop/fig-standards/blob/master/proposed/container.md>`_
* `PSR-13 : Link definition interface <http://www.php-fig.org/psr/psr-13/>`_
* `PSR-16 : Common Interface for Caching Libraries <http://www.php-fig.org/psr/psr-16/>`_
* `PSR-3 : Logger Interface <http://www.php-fig.org/psr/psr-3/>`_
* `PSR-3 <https://www.php-fig.org/psr/psr-3>`_
* `PSR-6 : Caching <http://www.php-fig.org/psr/psr-6/>`_
* `Putting glob to the test <https://www.phparch.com/2010/04/putting-glob-to-the-test/>`_
* `RabbitMQ AMQP client library <https://github.com/alanxz/rabbitmq-c>`_
* `Rar archiving <http://php.net/manual/en/book.rar.php>`_
* `References <http://php.net/references>`_
* `Reflection <http://php.net/manual/en/book.reflection.php>`_
* `Reflection export() methods <https://wiki.php.net/rfc/deprecations_php_7_4#reflection_export_methods>`_
* `Regular Expressions (Perl-Compatible) <http://php.net/manual/en/book.pcre.php>`_
* `resources <http://php.net/manual/en/language.types.resource.php>`_
* `return <https://www.php.net/manual/en/function.return.php>`_
* `Return Inside Finally Block <https://www.owasp.org/index.php/Return_Inside_Finally_Block>`_
* `Return Type Declaration <http://php.net/manual/en/functions.returning-values.php#functions.returning-values.type-declaration>`_
* `Returning values <http://php.net/manual/en/functions.returning-values.php>`_
* `RFC 7159 <http://www.faqs.org/rfcs/rfc7159>`_
* `RFC 7230 <https://tools.ietf.org/html/rfc7230>`_
* `RFC 822 (MIME) <http://www.faqs.org/rfcs/rfc822.html>`_
* `RFC 959 <http://www.faqs.org/rfcs/rfc959>`_
* `RFC : Arrow functions <https://wiki.php.net/rfc/arrow_functions>`_
* `RFC Preload <https://wiki.php.net/rfc/preload>`_
* `RFC: Return Type Declarations <https://wiki.php.net/rfc/return_types>`_
* `runkit <http://php.net/manual/en/book.runkit.php>`_
* `Salted Password Hashing - Doing it Right <https://crackstation.net/hashing-security.htm>`_
* `SARB <https://github.com/DaveLiddament/sarb>`_
* `Scalar type declarations <http://php.net/manual/en/migration70.new-features.php#migration70.new-features.scalar-type-declarations>`_
* `Scope Resolution Operator (::) <http://php.net/manual/en/language.oop5.paamayim-nekudotayim.php>`_
* `Secure Hash Algorithms <https://en.wikipedia.org/wiki/Secure_Hash_Algorithms>`_
* `Semaphore, Shared Memory and IPC <http://php.net/manual/en/book.sem.php>`_
* `Session <http://php.net/manual/en/book.session.php>`_
* `session_regenerateid() <http://php.net/session_regenerate_id>`_
* `Sessions <http://php.net/manual/en/book.session.php>`_
* `Set-Cookie <https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie>`_
* `set_error_handler <http://www.php.net/set_error_handler>`_
* `setcookie <http://www.php.net/setcookie>`_
* `setlocale <http://php.net/setlocale>`_
* `shell_exec <http://www.php.net/shell_exec>`_
* `SimpleXML <http://php.net/manual/en/book.simplexml.php>`_
* `Single Function Exit Point <http://wiki.c2.com/?SingleFunctionExitPoint>`_
* `SOAP <http://php.net/manual/en/book.soap.php>`_
* `Sockets <http://php.net/manual/en/book.sockets.php>`_
* `Specification pattern <https://en.wikipedia.org/wiki/Specification_pattern>`_
* `Sphinx Client <http://php.net/manual/en/book.sphinx.php>`_
* `Spread Operator in Array Expression  <https://wiki.php.net/rfc/spread_operator_for_array>`_
* `Spread Operator in Array Expression <https://wiki.php.net/rfc/spread_operator_for_array>`_
* `sqlite3 <http://www.php.net/sqlite3>`_
* `SQLite3::escapeString <http://php.net/manual/en/sqlite3.escapestring.php>`_
* `SSH2 functions <http://php.net/manual/en/book.ssh2.php>`_
* `Standard PHP Library (SPL) <http://www.php.net/manual/en/book.spl.php>`_
* `Static Keyword <http://php.net/manual/en/language.oop5.static.php>`_
* `Strict typing <http://php.net/manual/en/functions.arguments.php#functions.arguments.type-declaration.strict>`_
* `String functions <http://php.net/manual/en/ref.strings.php>`_
* `Strings <http://php.net/manual/en/language.types.string.php>`_
* `strip_tags <https://www.php.net/manual/en/function.strip-tags.php>`_
* `strpos not working correctly <https://bugs.php.net/bug.php?id=52198>`_
* `strtr <http://www.php.net/strtr>`_
* `Structuring PHP Exceptions <https://www.alainschlesser.com/structuring-php-exceptions/>`_
* `Subpatterns <http://php.net/manual/en/regexp.reference.subpatterns.php>`_
* `substr <http://www.php.net/substr>`_
* `Suhosin.org <https://suhosin.org/>`_
* `Sun, iPlanet and Netscape servers on Sun Solaris <http://php.net/manual/en/install.unix.sun.php>`_
* `Superglobals <http://php.net/manual/en/language.variables.superglobals.php>`_
* `Supported PHP Extensions <http://exakat.readthedocs.io/en/latest/Annex.html#supported-php-extensions>`_
* `SVM <http://www.php.net/svm>`_
* `svn <https://subversion.apache.org/>`_
* `Swoole <https://www.swoole.com/>`_
* `Symfony <http://www.symfony.com/>`_
* `Syntax <http://php.net/manual/en/language.constants.syntax.php>`_
* `Ternary Operator <http://php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary>`_
* `tetraweb/php <https://hub.docker.com/r/tetraweb/php/>`_
* `The 2018 Guide to Building Secure PHP Software <https://paragonie.com/blog/2017/12/2018-guide-building-secure-php-software>`_
* `The basics of Fluent interfaces in PHP <https://tournasdimitrios1.wordpress.com/2011/04/11/the-basics-of-fluent-interfaces-in-php/>`_
* `The Closure Class <http://php.net/manual/en/class.closure.php>`_
* `The Linux NIS(YP)/NYS/NIS+ HOWTO <http://www.tldp.org/HOWTO/NIS-HOWTO/index.html>`_
* `The list function & practical uses of array destructuring in PHP <https://sebastiandedeyne.com/the-list-function-and-practical-uses-of-array-destructuring-in-php>`_
* `The main PPA for PHP (7.4, 7.3, 7.2, 7.1, 7.0, 5.6)  <https://launchpad.net/~ondrej/+archive/ubuntu/php>`_
* `Throwable <http://php.net/manual/en/class.throwable.php>`_
* `Tidy <http://php.net/manual/en/book.tidy.php>`_
* `tokenizer <http://www.php.net/tokenizer>`_
* `tokyo_tyrant <http://php.net/manual/en/book.tokyo-tyrant.php>`_
* `trader <https://pecl.php.net/package/trader>`_
* `Trailing Commas In List Syntax <https://wiki.php.net/rfc/list-syntax-trailing-commas>`_
* `Traits <http://php.net/manual/en/language.oop5.traits.php>`_
* `Traversable <https://www.php.net/manual/en/class.traversable.php>`_
* `trigger_error <http://php.net/trigger_error>`_
* `trim <https://www.php.net/manual/en/function.trim.php>`_
* `Tutorial 1: Let’s learn by example <https://docs.phalconphp.com/en/latest/reference/tutorial.html>`_
* `Type array <http://php.net/manual/en/language.types.array.php>`_
* `Type Casting <https://php.net/manual/en/language.types.type-juggling.php#language.types.typecasting>`_
* `Type declarations <http://php.net/manual/en/functions.arguments.php#functions.arguments.type-declaration>`_
* `Type Declarations <http://php.net/manual/en/functions.arguments.php#functions.arguments.type-declaration>`_
* `Type hinting for interfaces <http://phpenthusiast.com/object-oriented-php-tutorials/type-hinting-for-interfaces>`_
* `Type Juggling <http://php.net/manual/en/language.types.type-juggling.php>`_
* `Type juggling <http://php.net/manual/en/language.types.type-juggling.php>`_
* `Type Juggling Authentication Bypass Vulnerability in CMS Made Simple <https://www.netsparker.com/blog/web-security/type-juggling-authentication-bypass-cms-made-simple/>`_
* `Type Operators <http://php.net/manual/en/language.operators.type.php#language.operators.type>`_
* `Typed Properties 2.0 <https://wiki.php.net/rfc/typed_properties_v2>`_
* `Unbinding $this from non-static closures <https://wiki.php.net/rfc/deprecations_php_7_4#unbinding_this_from_non-static_closures>`_
* `Understanding Dependency Injection <http://php-di.org/doc/understanding-di.html>`_
* `Unicode block <https://en.wikipedia.org/wiki/Unicode_block>`_
* `Unicode spaces <https://www.cs.tut.fi/~jkorpela/chars/spaces.html>`_
* `unserialize() <http://www.php.net/unserialize>`_
* `unset <http://php.net/unset>`_
* `UPGRADING 7.3 <https://github.com/php/php-src/blob/PHP-7.3/UPGRADING#L83-L95>`_
* `Use of Hardcoded IPv4 Addresses <https://docs.microsoft.com/en-us/windows/desktop/winsock/use-of-hardcoded-ipv4-addresses-2>`_
* `Using namespaces: Aliasing/Importing <http://php.net/manual/en/language.namespaces.importing.php>`_
* `Using namespaces: fallback to global function/constant <http://php.net/manual/en/language.namespaces.fallback.php>`_
* `Using non-breakable spaces in test method names <http://mnapoli.fr/using-non-breakable-spaces-in-test-method-names/>`_
* `Using single characters for variable names in loops/exceptions <https://softwareengineering.stackexchange.com/questions/71710/using-single-characters-for-variable-names-in-loops-exceptions?utm_medium=organic&utm_source=google_rich_qa&utm_campaign=google_rich_qa/>`_
* `Using static variables <http://php.net/manual/en/language.variables.scope.php#language.variables.scope.static>`_
* `V8 Javascript Engine <https://bugs.chromium.org/p/v8/issues/list>`_
* `Vagrant file <https://github.com/exakat/exakat-vagrant>`_
* `vagrant installation <https://www.vagrantup.com/docs/installation/>`_
* `Variable basics <http://php.net/manual/en/language.variables.basics.php>`_
* `Variable functions <http://php.net/manual/en/functions.variable-functions.php>`_
* `Variable scope <http://php.net/manual/en/language.variables.scope.php>`_
* `Variable Scope <http://php.net/manual/en/language.variables.scope.php>`_
* `Variable variables <http://php.net/manual/en/language.variables.variable.php>`_
* `Variable-length argument lists <https://www.php.net/manual/en/functions.arguments.php#functions.variable-arg-list>`_
* `Variables <http://php.net/manual/en/language.variables.basics.php>`_
* `Visibility <http://php.net/manual/en/language.oop5.visibility.php>`_
* `Vladimir Reznichenko <https://twitter.com/kalessil>`_
* `Void functions <http://php.net/manual/en/migration71.new-features.php#migration71.new-features.void-functions>`_
* `Warn when counting non-countable types <http://php.net/manual/en/migration72.incompatible.php#migration72.incompatible.warn-on-non-countable-types>`_
* `Wddx on PHP <http://php.net/manual/en/intro.wddx.php>`_
* `Weak references <http://php.net/manual/en/book.weakref.php>`_
* `What are the best practices for catching and re-throwing exceptions? <https://stackoverflow.com/questions/5551668/what-are-the-best-practices-for-catching-and-re-throwing-exceptions>`_
* `What's all this 'immutable date' stuff, anyway? <https://medium.com/@codebyjeff/whats-all-this-immutable-date-stuff-anyway-72d4130af8ce>`_
* `When to declare classes final <http://ocramius.github.io/blog/when-to-declare-classes-final/>`_
* `Why 777 Folder Permissions are a Security Risk <https://www.spiralscripts.co.uk/Blog/why-777-folder-permissions-are-a-security-risk.html>`_
* `Why does PHP 5.2+ disallow abstract static class methods? <https://stackoverflow.com/questions/999066/why-does-php-5-2-disallow-abstract-static-class-methods>`_
* `Why, php? WHY??? <https://gist.github.com/everzet/4215537>`_
* `wikidiff2 <https://www.mediawiki.org/wiki/Extension:Wikidiff2>`_
* `Wincache extension for PHP <http://www.php.net/wincache>`_
* `Wordpress <https://www.wordpress.org/>`_
* `xattr <http://php.net/manual/en/book.xattr.php>`_
* `xcache <https://xcache.lighttpd.net/>`_
* `Xdebug <https://xdebug.org/>`_
* `xdiff <http://php.net/manual/en/book.xdiff.php>`_
* `XHprof Documentation <http://web.archive.org/web/20110514095512/http://mirror.facebook.net/facebook/xhprof/doc.html>`_
* `XML External Entity <https://github.com/swisskyrepo/PayloadsAllTheThings/tree/master/XXE%20injection>`_
* `XML Parser <http://www.php.net/manual/en/book.xml.php>`_
* `XML-RPC <http://www.php.net/manual/en/book.xmlrpc.php>`_
* `xmlreader <http://www.php.net/manual/en/book.xmlreader.php>`_
* `XMLWriter <http://php.net/manual/en/book.xmlwriter.php>`_
* `XSL extension <http://php.net/manual/en/intro.xsl.php>`_
* `YAML Ain't Markup Language <http://www.yaml.org/>`_
* `Yii <http://www.yiiframework.com/>`_
* `Yoda Conditions <https://en.wikipedia.org/wiki/Yoda_conditions>`_
* `Zend Monitor - PHP API <http://files.zend.com/help/Zend-Server/content/zendserverapi/zend_monitor-php_api.htm>`_
* `ZeroMQ <http://zeromq.org/>`_
* `Zip <http://php.net/manual/en/book.zip.php>`_
* `Zlib <http://php.net/manual/en/book.zlib.php>`_


Ruleset configurations
----------------------

INI configuration for built-in rulesets. Copy them in config/themes.ini, and make your owns.

21 rulesets detailled here : 

* `Analyze <ruleset_ini_analyze>`_
* `ClassReview <ruleset_ini_classreview>`_
* `Coding Conventions <ruleset_ini_coding conventions>`_
* `CompatibilityPHP53 <ruleset_ini_compatibilityphp53>`_
* `CompatibilityPHP54 <ruleset_ini_compatibilityphp54>`_
* `CompatibilityPHP55 <ruleset_ini_compatibilityphp55>`_
* `CompatibilityPHP56 <ruleset_ini_compatibilityphp56>`_
* `CompatibilityPHP70 <ruleset_ini_compatibilityphp70>`_
* `CompatibilityPHP71 <ruleset_ini_compatibilityphp71>`_
* `CompatibilityPHP72 <ruleset_ini_compatibilityphp72>`_
* `CompatibilityPHP73 <ruleset_ini_compatibilityphp73>`_
* `CompatibilityPHP74 <ruleset_ini_compatibilityphp74>`_
* `CompatibilityPHP80 <ruleset_ini_compatibilityphp80>`_
* `Dead code <ruleset_ini_dead code>`_
* `LintButWontExec <ruleset_ini_lintbutwontexec>`_
* `Performances <ruleset_ini_performances>`_
* `Security <ruleset_ini_security>`_
* `Semantics <ruleset_ini_semantics>`_
* `Suggestions <ruleset_ini_suggestions>`_
* `Top10 <ruleset_ini_top10>`_
* `Typechecks <ruleset_ini_typechecks>`_



.. _ruleset_ini_analyze:

Analyze
This ruleset centralizes a large number of classic trap and pitfalls when writing PHP.
_______

| [Analyze]
|   analyzer[] = "Arrays/AmbiguousKeys";
|   analyzer[] = "Arrays/MultipleIdenticalKeys";
|   analyzer[] = "Arrays/NoSpreadForHash";
|   analyzer[] = "Arrays/NonConstantArray";
|   analyzer[] = "Arrays/NullBoolean";
|   analyzer[] = "Arrays/RandomlySortedLiterals";
|   analyzer[] = "Arrays/TooManyDimensions";
|   analyzer[] = "Classes/AbstractOrImplements";
|   analyzer[] = "Classes/AbstractStatic";
|   analyzer[] = "Classes/AccessPrivate";
|   analyzer[] = "Classes/AccessProtected";
|   analyzer[] = "Classes/AmbiguousStatic";
|   analyzer[] = "Classes/AmbiguousVisibilities";
|   analyzer[] = "Classes/AvoidOptionArrays";
|   analyzer[] = "Classes/AvoidOptionalProperties";
|   analyzer[] = "Classes/CantExtendFinal";
|   analyzer[] = "Classes/CantInstantiateClass";
|   analyzer[] = "Classes/CheckOnCallUsage";
|   analyzer[] = "Classes/CitSameName";
|   analyzer[] = "Classes/CloneWithNonObject";
|   analyzer[] = "Classes/ConstantClass";
|   analyzer[] = "Classes/CouldBeAbstractClass";
|   analyzer[] = "Classes/CouldBeFinal";
|   analyzer[] = "Classes/CouldBeStatic";
|   analyzer[] = "Classes/DependantAbstractClass";
|   analyzer[] = "Classes/DirectCallToMagicMethod";
|   analyzer[] = "Classes/DontSendThisInConstructor";
|   analyzer[] = "Classes/DontUnsetProperties";
|   analyzer[] = "Classes/EmptyClass";
|   analyzer[] = "Classes/FinalByOcramius";
|   analyzer[] = "Classes/IdenticalMethods";
|   analyzer[] = "Classes/ImplementIsForInterface";
|   analyzer[] = "Classes/ImplementedMethodsArePublic";
|   analyzer[] = "Classes/IncompatibleSignature";
|   analyzer[] = "Classes/IncompatibleSignature74";
|   analyzer[] = "Classes/InstantiatingAbstractClass";
|   analyzer[] = "Classes/MakeDefault";
|   analyzer[] = "Classes/MakeGlobalAProperty";
|   analyzer[] = "Classes/MethodSignatureMustBeCompatible";
|   analyzer[] = "Classes/MultipleDeclarations";
|   analyzer[] = "Classes/MultipleTraitOrInterface";
|   analyzer[] = "Classes/NoMagicWithArray";
|   analyzer[] = "Classes/NoPSSOutsideClass";
|   analyzer[] = "Classes/NoParent";
|   analyzer[] = "Classes/NoPublicAccess";
|   analyzer[] = "Classes/NoSelfReferencingConstant";
|   analyzer[] = "Classes/NonNullableSetters";
|   analyzer[] = "Classes/NonPpp";
|   analyzer[] = "Classes/NonStaticMethodsCalledStatic";
|   analyzer[] = "Classes/OldStyleConstructor";
|   analyzer[] = "Classes/OldStyleVar";
|   analyzer[] = "Classes/ParentFirst";
|   analyzer[] = "Classes/PropertyCouldBeLocal";
|   analyzer[] = "Classes/PropertyNeverUsed";
|   analyzer[] = "Classes/PropertyUsedInOneMethodOnly";
|   analyzer[] = "Classes/PssWithoutClass";
|   analyzer[] = "Classes/RedefinedConstants";
|   analyzer[] = "Classes/RedefinedDefault";
|   analyzer[] = "Classes/RedefinedPrivateProperty";
|   analyzer[] = "Classes/ScalarOrObjectProperty";
|   analyzer[] = "Classes/ShouldUseSelf";
|   analyzer[] = "Classes/ShouldUseThis";
|   analyzer[] = "Classes/StaticContainsThis";
|   analyzer[] = "Classes/StaticMethodsCalledFromObject";
|   analyzer[] = "Classes/ThisIsForClasses";
|   analyzer[] = "Classes/ThisIsNotAnArray";
|   analyzer[] = "Classes/ThisIsNotForStatic";
|   analyzer[] = "Classes/ThrowInDestruct";
|   analyzer[] = "Classes/TooManyDereferencing";
|   analyzer[] = "Classes/TooManyFinds";
|   analyzer[] = "Classes/TooManyInjections";
|   analyzer[] = "Classes/UndeclaredStaticProperty";
|   analyzer[] = "Classes/UndefinedClasses";
|   analyzer[] = "Classes/UndefinedConstants";
|   analyzer[] = "Classes/UndefinedParentMP";
|   analyzer[] = "Classes/UndefinedProperty";
|   analyzer[] = "Classes/UndefinedStaticMP";
|   analyzer[] = "Classes/UndefinedStaticclass";
|   analyzer[] = "Classes/UnresolvedClasses";
|   analyzer[] = "Classes/UnresolvedInstanceof";
|   analyzer[] = "Classes/UnusedClass";
|   analyzer[] = "Classes/UnusedConstant";
|   analyzer[] = "Classes/UseClassOperator";
|   analyzer[] = "Classes/UseInstanceof";
|   analyzer[] = "Classes/UsedOnceProperty";
|   analyzer[] = "Classes/UselessAbstract";
|   analyzer[] = "Classes/UselessConstructor";
|   analyzer[] = "Classes/UselessFinal";
|   analyzer[] = "Classes/UsingThisOutsideAClass";
|   analyzer[] = "Classes/WeakType";
|   analyzer[] = "Classes/WrongName";
|   analyzer[] = "Constants/BadConstantnames";
|   analyzer[] = "Constants/ConstRecommended";
|   analyzer[] = "Constants/ConstantStrangeNames";
|   analyzer[] = "Constants/CreatedOutsideItsNamespace";
|   analyzer[] = "Constants/InvalidName";
|   analyzer[] = "Constants/MultipleConstantDefinition";
|   analyzer[] = "Constants/StrangeName";
|   analyzer[] = "Constants/UndefinedConstants";
|   analyzer[] = "Exceptions/CantThrow";
|   analyzer[] = "Exceptions/ForgottenThrown";
|   analyzer[] = "Exceptions/OverwriteException";
|   analyzer[] = "Exceptions/ThrowFunctioncall";
|   analyzer[] = "Exceptions/UncaughtExceptions";
|   analyzer[] = "Exceptions/Unthrown";
|   analyzer[] = "Exceptions/UselessCatch";
|   analyzer[] = "Files/InclusionWrongCase";
|   analyzer[] = "Files/MissingInclude";
|   analyzer[] = "Functions/AliasesUsage";
|   analyzer[] = "Functions/AvoidBooleanArgument";
|   analyzer[] = "Functions/BadTypehintRelay";
|   analyzer[] = "Functions/CallbackNeedsReturn";
|   analyzer[] = "Functions/CouldCentralize";
|   analyzer[] = "Functions/DeepDefinitions";
|   analyzer[] = "Functions/EmptyFunction";
|   analyzer[] = "Functions/HardcodedPasswords";
|   analyzer[] = "Functions/InsufficientTypehint";
|   analyzer[] = "Functions/MismatchTypeAndDefault";
|   analyzer[] = "Functions/MismatchedDefaultArguments";
|   analyzer[] = "Functions/MismatchedTypehint";
|   analyzer[] = "Functions/MustReturn";
|   analyzer[] = "Functions/NeverUsedParameter";
|   analyzer[] = "Functions/NoBooleanAsDefault";
|   analyzer[] = "Functions/NoClassAsTypehint";
|   analyzer[] = "Functions/NoLiteralForReference";
|   analyzer[] = "Functions/NoReturnUsed";
|   analyzer[] = "Functions/OnlyVariableForReference";
|   analyzer[] = "Functions/OnlyVariablePassedByReference";
|   analyzer[] = "Functions/RedeclaredPhpFunction";
|   analyzer[] = "Functions/RelayFunction";
|   analyzer[] = "Functions/ShouldUseConstants";
|   analyzer[] = "Functions/ShouldYieldWithKey";
|   analyzer[] = "Functions/TooManyLocalVariables";
|   analyzer[] = "Functions/TypehintMustBeReturned";
|   analyzer[] = "Functions/TypehintedReferences";
|   analyzer[] = "Functions/UndefinedFunctions";
|   analyzer[] = "Functions/UnusedArguments";
|   analyzer[] = "Functions/UnusedInheritedVariable";
|   analyzer[] = "Functions/UnusedReturnedValue";
|   analyzer[] = "Functions/UseConstantAsArguments";
|   analyzer[] = "Functions/UselessReferenceArgument";
|   analyzer[] = "Functions/UselessReturn";
|   analyzer[] = "Functions/UsesDefaultArguments";
|   analyzer[] = "Functions/WithoutReturn";
|   analyzer[] = "Functions/WrongNumberOfArguments";
|   analyzer[] = "Functions/WrongOptionalParameter";
|   analyzer[] = "Functions/WrongReturnedType";
|   analyzer[] = "Functions/funcGetArgModified";
|   analyzer[] = "Interfaces/AlreadyParentsInterface";
|   analyzer[] = "Interfaces/CantImplementTraversable";
|   analyzer[] = "Interfaces/ConcreteVisibility";
|   analyzer[] = "Interfaces/CouldUseInterface";
|   analyzer[] = "Interfaces/EmptyInterface";
|   analyzer[] = "Interfaces/IsNotImplemented";
|   analyzer[] = "Interfaces/NoGaranteeForPropertyConstant";
|   analyzer[] = "Interfaces/RepeatedInterface";
|   analyzer[] = "Interfaces/UndefinedInterfaces";
|   analyzer[] = "Interfaces/UselessInterfaces";
|   analyzer[] = "Namespaces/ConstantFullyQualified";
|   analyzer[] = "Namespaces/EmptyNamespace";
|   analyzer[] = "Namespaces/HiddenUse";
|   analyzer[] = "Namespaces/MultipleAliasDefinitionPerFile";
|   analyzer[] = "Namespaces/MultipleAliasDefinitions";
|   analyzer[] = "Namespaces/ShouldMakeAlias";
|   analyzer[] = "Namespaces/UnresolvedUse";
|   analyzer[] = "Namespaces/UseWithFullyQualifiedNS";
|   analyzer[] = "Performances/ArrayMergeInLoops";
|   analyzer[] = "Performances/LogicalToInArray";
|   analyzer[] = "Performances/MemoizeMagicCall";
|   analyzer[] = "Performances/PrePostIncrement";
|   analyzer[] = "Performances/StrposTooMuch";
|   analyzer[] = "Performances/UseArraySlice";
|   analyzer[] = "Php/ArrayKeyExistsWithObjects";
|   analyzer[] = "Php/AssertFunctionIsReserved";
|   analyzer[] = "Php/AssignAnd";
|   analyzer[] = "Php/AvoidMbDectectEncoding";
|   analyzer[] = "Php/BetterRand";
|   analyzer[] = "Php/ConcatAndAddition";
|   analyzer[] = "Php/Crc32MightBeNegative";
|   analyzer[] = "Php/Deprecated";
|   analyzer[] = "Php/EmptyList";
|   analyzer[] = "Php/FopenMode";
|   analyzer[] = "Php/ForeachObject";
|   analyzer[] = "Php/HashAlgos";
|   analyzer[] = "Php/Incompilable";
|   analyzer[] = "Php/InternalParameterType";
|   analyzer[] = "Php/IsnullVsEqualNull";
|   analyzer[] = "Php/LogicalInLetters";
|   analyzer[] = "Php/MissingSubpattern";
|   analyzer[] = "Php/MustCallParentConstructor";
|   analyzer[] = "Php/NoClassInGlobal";
|   analyzer[] = "Php/NoReferenceForTernary";
|   analyzer[] = "Php/NotScalarType";
|   analyzer[] = "Php/PathinfoReturns";
|   analyzer[] = "Php/ReservedNames";
|   analyzer[] = "Php/ScalarAreNotArrays";
|   analyzer[] = "Php/ShortOpenTagRequired";
|   analyzer[] = "Php/ShouldUseCoalesce";
|   analyzer[] = "Php/StrtrArguments";
|   analyzer[] = "Php/TooManyNativeCalls";
|   analyzer[] = "Php/UnknownPcre2Option";
|   analyzer[] = "Php/UseObjectApi";
|   analyzer[] = "Php/UsePathinfo";
|   analyzer[] = "Php/UseSetCookie";
|   analyzer[] = "Php/UseStdclass";
|   analyzer[] = "Php/oldAutoloadUsage";
|   analyzer[] = "Security/DontEchoError";
|   analyzer[] = "Security/ShouldUsePreparedStatement";
|   analyzer[] = "Structures/AddZero";
|   analyzer[] = "Structures/AlteringForeachWithoutReference";
|   analyzer[] = "Structures/AlternativeConsistenceByFile";
|   analyzer[] = "Structures/AlwaysFalse";
|   analyzer[] = "Structures/ArrayMergeAndVariadic";
|   analyzer[] = "Structures/AssigneAndCompare";
|   analyzer[] = "Structures/AutoUnsetForeach";
|   analyzer[] = "Structures/BailOutEarly";
|   analyzer[] = "Structures/BooleanStrictComparison";
|   analyzer[] = "Structures/BreakOutsideLoop";
|   analyzer[] = "Structures/BuriedAssignation";
|   analyzer[] = "Structures/CastToBoolean";
|   analyzer[] = "Structures/CastingTernary";
|   analyzer[] = "Structures/CatchShadowsVariable";
|   analyzer[] = "Structures/CheckAllTypes";
|   analyzer[] = "Structures/CheckJson";
|   analyzer[] = "Structures/CoalesceAndConcat";
|   analyzer[] = "Structures/CommonAlternatives";
|   analyzer[] = "Structures/ComparedComparison";
|   analyzer[] = "Structures/ConcatEmpty";
|   analyzer[] = "Structures/ContinueIsForLoop";
|   analyzer[] = "Structures/CouldBeElse";
|   analyzer[] = "Structures/CouldBeStatic";
|   analyzer[] = "Structures/CouldUseDir";
|   analyzer[] = "Structures/CouldUseShortAssignation";
|   analyzer[] = "Structures/CouldUseStrrepeat";
|   analyzer[] = "Structures/DanglingArrayReferences";
|   analyzer[] = "Structures/DirThenSlash";
|   analyzer[] = "Structures/DontChangeBlindKey";
|   analyzer[] = "Structures/DontMixPlusPlus";
|   analyzer[] = "Structures/DontReadAndWriteInOneExpression";
|   analyzer[] = "Structures/DoubleAssignation";
|   analyzer[] = "Structures/DoubleInstruction";
|   analyzer[] = "Structures/DropElseAfterReturn";
|   analyzer[] = "Structures/EchoWithConcat";
|   analyzer[] = "Structures/ElseIfElseif";
|   analyzer[] = "Structures/EmptyBlocks";
|   analyzer[] = "Structures/EmptyLines";
|   analyzer[] = "Structures/EmptyTryCatch";
|   analyzer[] = "Structures/ErrorReportingWithInteger";
|   analyzer[] = "Structures/EvalUsage";
|   analyzer[] = "Structures/EvalWithoutTry";
|   analyzer[] = "Structures/ExitUsage";
|   analyzer[] = "Structures/FailingSubstrComparison";
|   analyzer[] = "Structures/ForeachReferenceIsNotModified";
|   analyzer[] = "Structures/ForeachSourceValue";
|   analyzer[] = "Structures/ForgottenWhiteSpace";
|   analyzer[] = "Structures/GlobalUsage";
|   analyzer[] = "Structures/Htmlentitiescall";
|   analyzer[] = "Structures/IdenticalConditions";
|   analyzer[] = "Structures/IdenticalConsecutive";
|   analyzer[] = "Structures/IdenticalOnBothSides";
|   analyzer[] = "Structures/IfWithSameConditions";
|   analyzer[] = "Structures/Iffectation";
|   analyzer[] = "Structures/ImplicitGlobal";
|   analyzer[] = "Structures/ImpliedIf";
|   analyzer[] = "Structures/ImplodeArgsOrder";
|   analyzer[] = "Structures/InconsistentElseif";
|   analyzer[] = "Structures/IndicesAreIntOrString";
|   analyzer[] = "Structures/InfiniteRecursion";
|   analyzer[] = "Structures/InvalidPackFormat";
|   analyzer[] = "Structures/InvalidRegex";
|   analyzer[] = "Structures/IsZero";
|   analyzer[] = "Structures/ListOmissions";
|   analyzer[] = "Structures/LogicalMistakes";
|   analyzer[] = "Structures/LoneBlock";
|   analyzer[] = "Structures/LongArguments";
|   analyzer[] = "Structures/MaxLevelOfIdentation";
|   analyzer[] = "Structures/MismatchedTernary";
|   analyzer[] = "Structures/MissingCases";
|   analyzer[] = "Structures/MissingNew";
|   analyzer[] = "Structures/MissingParenthesis";
|   analyzer[] = "Structures/MixedConcatInterpolation";
|   analyzer[] = "Structures/ModernEmpty";
|   analyzer[] = "Structures/MultipleDefinedCase";
|   analyzer[] = "Structures/MultipleTypeVariable";
|   analyzer[] = "Structures/MultiplyByOne";
|   analyzer[] = "Structures/NegativePow";
|   analyzer[] = "Structures/NestedIfthen";
|   analyzer[] = "Structures/NestedTernary";
|   analyzer[] = "Structures/NeverNegative";
|   analyzer[] = "Structures/NextMonthTrap";
|   analyzer[] = "Structures/NoAppendOnSource";
|   analyzer[] = "Structures/NoChangeIncomingVariables";
|   analyzer[] = "Structures/NoChoice";
|   analyzer[] = "Structures/NoDirectUsage";
|   analyzer[] = "Structures/NoEmptyRegex";
|   analyzer[] = "Structures/NoGetClassNull";
|   analyzer[] = "Structures/NoHardcodedHash";
|   analyzer[] = "Structures/NoHardcodedIp";
|   analyzer[] = "Structures/NoHardcodedPath";
|   analyzer[] = "Structures/NoHardcodedPort";
|   analyzer[] = "Structures/NoIssetWithEmpty";
|   analyzer[] = "Structures/NoNeedForElse";
|   analyzer[] = "Structures/NoParenthesisForLanguageConstruct";
|   analyzer[] = "Structures/NoReferenceOnLeft";
|   analyzer[] = "Structures/NoSubstrOne";
|   analyzer[] = "Structures/NoVariableIsACondition";
|   analyzer[] = "Structures/Noscream";
|   analyzer[] = "Structures/NotNot";
|   analyzer[] = "Structures/ObjectReferences";
|   analyzer[] = "Structures/OnceUsage";
|   analyzer[] = "Structures/OneLineTwoInstructions";
|   analyzer[] = "Structures/OnlyVariableReturnedByReference";
|   analyzer[] = "Structures/OrDie";
|   analyzer[] = "Structures/PossibleInfiniteLoop";
|   analyzer[] = "Structures/PrintAndDie";
|   analyzer[] = "Structures/PrintWithoutParenthesis";
|   analyzer[] = "Structures/PrintfArguments";
|   analyzer[] = "Structures/PropertyVariableConfusion";
|   analyzer[] = "Structures/QueriesInLoop";
|   analyzer[] = "Structures/RepeatedPrint";
|   analyzer[] = "Structures/RepeatedRegex";
|   analyzer[] = "Structures/ResultMayBeMissing";
|   analyzer[] = "Structures/ReturnTrueFalse";
|   analyzer[] = "Structures/SameConditions";
|   analyzer[] = "Structures/ShouldChainException";
|   analyzer[] = "Structures/ShouldMakeTernary";
|   analyzer[] = "Structures/ShouldPreprocess";
|   analyzer[] = "Structures/ShouldUseExplodeArgs";
|   analyzer[] = "Structures/StaticLoop";
|   analyzer[] = "Structures/StripTagsSkipsClosedTag";
|   analyzer[] = "Structures/StrposCompare";
|   analyzer[] = "Structures/SuspiciousComparison";
|   analyzer[] = "Structures/SwitchToSwitch";
|   analyzer[] = "Structures/SwitchWithoutDefault";
|   analyzer[] = "Structures/TernaryInConcat";
|   analyzer[] = "Structures/TestThenCast";
|   analyzer[] = "Structures/ThrowsAndAssign";
|   analyzer[] = "Structures/TimestampDifference";
|   analyzer[] = "Structures/UncheckedResources";
|   analyzer[] = "Structures/UnconditionLoopBreak";
|   analyzer[] = "Structures/UnknownPregOption";
|   analyzer[] = "Structures/Unpreprocessed";
|   analyzer[] = "Structures/UnsetInForeach";
|   analyzer[] = "Structures/UnusedGlobal";
|   analyzer[] = "Structures/UseConstant";
|   analyzer[] = "Structures/UseInstanceof";
|   analyzer[] = "Structures/UsePositiveCondition";
|   analyzer[] = "Structures/UseSystemTmp";
|   analyzer[] = "Structures/UselessBrackets";
|   analyzer[] = "Structures/UselessCasting";
|   analyzer[] = "Structures/UselessCheck";
|   analyzer[] = "Structures/UselessGlobal";
|   analyzer[] = "Structures/UselessInstruction";
|   analyzer[] = "Structures/UselessParenthesis";
|   analyzer[] = "Structures/UselessSwitch";
|   analyzer[] = "Structures/UselessUnset";
|   analyzer[] = "Structures/VardumpUsage";
|   analyzer[] = "Structures/WhileListEach";
|   analyzer[] = "Structures/WrongRange";
|   analyzer[] = "Structures/pregOptionE";
|   analyzer[] = "Structures/toStringThrowsException";
|   analyzer[] = "Traits/AlreadyParentsTrait";
|   analyzer[] = "Traits/CouldUseTrait";
|   analyzer[] = "Traits/DependantTrait";
|   analyzer[] = "Traits/EmptyTrait";
|   analyzer[] = "Traits/MethodCollisionTraits";
|   analyzer[] = "Traits/TraitNotFound";
|   analyzer[] = "Traits/UndefinedInsteadof";
|   analyzer[] = "Traits/UndefinedTrait";
|   analyzer[] = "Traits/UselessAlias";
|   analyzer[] = "Type/NoRealComparison";
|   analyzer[] = "Type/OneVariableStrings";
|   analyzer[] = "Type/ShouldTypecast";
|   analyzer[] = "Type/SilentlyCastInteger";
|   analyzer[] = "Type/StringHoldAVariable";
|   analyzer[] = "Type/StringWithStrangeSpace";
|   analyzer[] = "Variables/AssignedTwiceOrMore";
|   analyzer[] = "Variables/LostReferences";
|   analyzer[] = "Variables/OverwrittenLiterals";
|   analyzer[] = "Variables/StrangeName";
|   analyzer[] = "Variables/UndefinedVariable";
|   analyzer[] = "Variables/VariableNonascii";
|   analyzer[] = "Variables/VariableUsedOnce";
|   analyzer[] = "Variables/VariableUsedOnceByContext";
|   analyzer[] = "Variables/WrittenOnlyVariable";| 






.. _ruleset_ini_classreview:

ClassReview
This ruleset focuses on classes construction issues, and their related structures : traits, interfaces, methodes, properties, constants.
___________

| [ClassReview]
|   analyzer[] = "Classes/AvoidOptionArrays";
|   analyzer[] = "Classes/CouldBeAbstractClass";
|   analyzer[] = "Classes/CouldBeClassConstant";
|   analyzer[] = "Classes/CouldBeFinal";
|   analyzer[] = "Classes/CouldBePrivate";
|   analyzer[] = "Classes/CouldBePrivateConstante";
|   analyzer[] = "Classes/CouldBePrivateMethod";
|   analyzer[] = "Classes/CouldBeProtectedConstant";
|   analyzer[] = "Classes/CouldBeProtectedMethod";
|   analyzer[] = "Classes/CouldBeProtectedProperty";
|   analyzer[] = "Classes/CouldBeStatic";
|   analyzer[] = "Classes/DependantAbstractClass";
|   analyzer[] = "Classes/DisconnectedClasses";
|   analyzer[] = "Classes/Finalclass";
|   analyzer[] = "Classes/Finalmethod";
|   analyzer[] = "Classes/IdenticalMethods";
|   analyzer[] = "Classes/MutualExtension";
|   analyzer[] = "Classes/NoParent";
|   analyzer[] = "Classes/NoSelfReferencingConstant";
|   analyzer[] = "Classes/NonNullableSetters";
|   analyzer[] = "Classes/PropertyCouldBeLocal";
|   analyzer[] = "Classes/RaisedAccessLevel";
|   analyzer[] = "Classes/RedefinedProperty";
|   analyzer[] = "Classes/ShouldUseSelf";
|   analyzer[] = "Classes/UndeclaredStaticProperty";
|   analyzer[] = "Classes/UnreachableConstant";
|   analyzer[] = "Classes/UnusedConstant";
|   analyzer[] = "Functions/WrongReturnedType";
|   analyzer[] = "Interfaces/AvoidSelfInInterface";
|   analyzer[] = "Interfaces/IsNotImplemented";
|   analyzer[] = "Interfaces/NoGaranteeForPropertyConstant";
|   analyzer[] = "Interfaces/UselessInterfaces";
|   analyzer[] = "Performances/MemoizeMagicCall";
|   analyzer[] = "Structures/CouldBeStatic";
|   analyzer[] = "Traits/SelfUsingTrait";| 






.. _ruleset_ini_coding conventions:

Coding Conventions
This ruleset centralizes all analysis related to coding conventions. Sometimes, those are easy to extract with static analysis, and so here they are. No all o them are available.
__________________

| [Coding Conventions]
|   analyzer[] = "Arrays/EmptySlots";
|   analyzer[] = "Arrays/MistakenConcatenation";
|   analyzer[] = "Classes/MultipleClassesInFile";
|   analyzer[] = "Classes/OrderOfDeclaration";
|   analyzer[] = "Classes/WrongCase";
|   analyzer[] = "Constants/ConstRecommended";
|   analyzer[] = "Functions/OneLetterFunctions";
|   analyzer[] = "Functions/WrongCase";
|   analyzer[] = "Namespaces/UseWithFullyQualifiedNS";
|   analyzer[] = "Php/CloseTags";
|   analyzer[] = "Php/ReturnWithParenthesis";
|   analyzer[] = "Php/UpperCaseFunction";
|   analyzer[] = "Php/UpperCaseKeyword";
|   analyzer[] = "Structures/Bracketless";
|   analyzer[] = "Structures/ConstantComparisonConsistance";
|   analyzer[] = "Structures/DontBeTooManual";
|   analyzer[] = "Structures/EchoPrintConsistance";
|   analyzer[] = "Structures/HeredocDelimiterFavorite";
|   analyzer[] = "Structures/MixedConcatInterpolation";
|   analyzer[] = "Structures/PlusEgalOne";
|   analyzer[] = "Structures/YodaComparison";
|   analyzer[] = "Type/ShouldBeSingleQuote";
|   analyzer[] = "Type/SimilarIntegers";
|   analyzer[] = "Type/StringInterpolation";
|   analyzer[] = "Variables/VariableUppercase";| 






.. _ruleset_ini_compatibilityphp53:

CompatibilityPHP53
This ruleset centralizes all analysis for the migration from PHP 5.2 to 5.3.
__________________

| [CompatibilityPHP53]
|   analyzer[] = "Arrays/ArrayNSUsage";
|   analyzer[] = "Arrays/MixedKeys";
|   analyzer[] = "Classes/Anonymous";
|   analyzer[] = "Classes/CantInheritAbstractMethod";
|   analyzer[] = "Classes/ChildRemoveTypehint";
|   analyzer[] = "Classes/ConstVisibilityUsage";
|   analyzer[] = "Classes/IntegerAsProperty";
|   analyzer[] = "Classes/NonStaticMethodsCalledStatic";
|   analyzer[] = "Classes/NullOnNew";
|   analyzer[] = "Exceptions/MultipleCatch";
|   analyzer[] = "Extensions/Extdba";
|   analyzer[] = "Extensions/Extfdf";
|   analyzer[] = "Extensions/Extming";
|   analyzer[] = "Functions/GeneratorCannotReturn";
|   analyzer[] = "Functions/MultipleSameArguments";
|   analyzer[] = "Namespaces/UseFunctionsConstants";
|   analyzer[] = "Php/CantUseReturnValueInWriteContext";
|   analyzer[] = "Php/CaseForPSS";
|   analyzer[] = "Php/ClassConstWithArray";
|   analyzer[] = "Php/ClosureThisSupport";
|   analyzer[] = "Php/ConcatAndAddition";
|   analyzer[] = "Php/ConstWithArray";
|   analyzer[] = "Php/DefineWithArray";
|   analyzer[] = "Php/DirectCallToClone";
|   analyzer[] = "Php/EllipsisUsage";
|   analyzer[] = "Php/ExponentUsage";
|   analyzer[] = "Php/FlexibleHeredoc";
|   analyzer[] = "Php/GroupUseDeclaration";
|   analyzer[] = "Php/GroupUseTrailingComma";
|   analyzer[] = "Php/HashAlgos53";
|   analyzer[] = "Php/HashAlgos71";
|   analyzer[] = "Php/ListShortSyntax";
|   analyzer[] = "Php/ListWithKeys";
|   analyzer[] = "Php/ListWithReference";
|   analyzer[] = "Php/MethodCallOnNew";
|   analyzer[] = "Php/NoListWithString";
|   analyzer[] = "Php/NoReferenceForStaticProperty";
|   analyzer[] = "Php/NoReturnForGenerator";
|   analyzer[] = "Php/NoStringWithAppend";
|   analyzer[] = "Php/NoSubstrMinusOne";
|   analyzer[] = "Php/PHP70scalartypehints";
|   analyzer[] = "Php/PHP71scalartypehints";
|   analyzer[] = "Php/PHP72scalartypehints";
|   analyzer[] = "Php/PHP73LastEmptyArgument";
|   analyzer[] = "Php/ParenthesisAsParameter";
|   analyzer[] = "Php/Php54NewFunctions";
|   analyzer[] = "Php/Php55NewFunctions";
|   analyzer[] = "Php/Php56NewFunctions";
|   analyzer[] = "Php/Php70NewClasses";
|   analyzer[] = "Php/Php70NewFunctions";
|   analyzer[] = "Php/Php70NewInterfaces";
|   analyzer[] = "Php/Php71NewClasses";
|   analyzer[] = "Php/Php72NewClasses";
|   analyzer[] = "Php/Php73NewFunctions";
|   analyzer[] = "Php/Php7RelaxedKeyword";
|   analyzer[] = "Php/StaticclassUsage";
|   analyzer[] = "Php/TrailingComma";
|   analyzer[] = "Php/TypedPropertyUsage";
|   analyzer[] = "Php/UnicodeEscapePartial";
|   analyzer[] = "Php/UnicodeEscapeSyntax";
|   analyzer[] = "Php/UnpackingInsideArrays";
|   analyzer[] = "Php/UseNullableType";
|   analyzer[] = "Php/debugInfoUsage";
|   analyzer[] = "Structures/Break0";
|   analyzer[] = "Structures/ConstantScalarExpression";
|   analyzer[] = "Structures/ContinueIsForLoop";
|   analyzer[] = "Structures/DereferencingAS";
|   analyzer[] = "Structures/ForeachWithList";
|   analyzer[] = "Structures/FunctionSubscripting";
|   analyzer[] = "Structures/IssetWithConstant";
|   analyzer[] = "Structures/NoGetClassNull";
|   analyzer[] = "Structures/PHP7Dirname";
|   analyzer[] = "Structures/SwitchWithMultipleDefault";
|   analyzer[] = "Structures/VariableGlobal";
|   analyzer[] = "Type/Binary";
|   analyzer[] = "Type/MalformedOctal";
|   analyzer[] = "Variables/Php5IndirectExpression";
|   analyzer[] = "Variables/Php7IndirectExpression";| 






.. _ruleset_ini_compatibilityphp54:

CompatibilityPHP54
This ruleset centralizes all analysis for the migration from PHP 5.3 to 5.4.
__________________

| [CompatibilityPHP54]
|   analyzer[] = "Arrays/MixedKeys";
|   analyzer[] = "Classes/Anonymous";
|   analyzer[] = "Classes/CantInheritAbstractMethod";
|   analyzer[] = "Classes/ChildRemoveTypehint";
|   analyzer[] = "Classes/ConstVisibilityUsage";
|   analyzer[] = "Classes/IntegerAsProperty";
|   analyzer[] = "Classes/NonStaticMethodsCalledStatic";
|   analyzer[] = "Classes/NullOnNew";
|   analyzer[] = "Exceptions/MultipleCatch";
|   analyzer[] = "Extensions/Extmhash";
|   analyzer[] = "Functions/GeneratorCannotReturn";
|   analyzer[] = "Functions/MultipleSameArguments";
|   analyzer[] = "Namespaces/UseFunctionsConstants";
|   analyzer[] = "Php/CantUseReturnValueInWriteContext";
|   analyzer[] = "Php/CaseForPSS";
|   analyzer[] = "Php/ClassConstWithArray";
|   analyzer[] = "Php/ConcatAndAddition";
|   analyzer[] = "Php/ConstWithArray";
|   analyzer[] = "Php/DefineWithArray";
|   analyzer[] = "Php/DirectCallToClone";
|   analyzer[] = "Php/EllipsisUsage";
|   analyzer[] = "Php/ExponentUsage";
|   analyzer[] = "Php/FlexibleHeredoc";
|   analyzer[] = "Php/GroupUseDeclaration";
|   analyzer[] = "Php/GroupUseTrailingComma";
|   analyzer[] = "Php/HashAlgos53";
|   analyzer[] = "Php/HashAlgos54";
|   analyzer[] = "Php/HashAlgos71";
|   analyzer[] = "Php/ListShortSyntax";
|   analyzer[] = "Php/ListWithKeys";
|   analyzer[] = "Php/ListWithReference";
|   analyzer[] = "Php/NoListWithString";
|   analyzer[] = "Php/NoReferenceForStaticProperty";
|   analyzer[] = "Php/NoReturnForGenerator";
|   analyzer[] = "Php/NoStringWithAppend";
|   analyzer[] = "Php/NoSubstrMinusOne";
|   analyzer[] = "Php/PHP70scalartypehints";
|   analyzer[] = "Php/PHP71scalartypehints";
|   analyzer[] = "Php/PHP72scalartypehints";
|   analyzer[] = "Php/PHP73LastEmptyArgument";
|   analyzer[] = "Php/ParenthesisAsParameter";
|   analyzer[] = "Php/Php54RemovedFunctions";
|   analyzer[] = "Php/Php55NewFunctions";
|   analyzer[] = "Php/Php56NewFunctions";
|   analyzer[] = "Php/Php70NewClasses";
|   analyzer[] = "Php/Php70NewFunctions";
|   analyzer[] = "Php/Php70NewInterfaces";
|   analyzer[] = "Php/Php71NewClasses";
|   analyzer[] = "Php/Php72NewClasses";
|   analyzer[] = "Php/Php73NewFunctions";
|   analyzer[] = "Php/Php7RelaxedKeyword";
|   analyzer[] = "Php/StaticclassUsage";
|   analyzer[] = "Php/TrailingComma";
|   analyzer[] = "Php/TypedPropertyUsage";
|   analyzer[] = "Php/UnicodeEscapePartial";
|   analyzer[] = "Php/UnicodeEscapeSyntax";
|   analyzer[] = "Php/UnpackingInsideArrays";
|   analyzer[] = "Php/UseNullableType";
|   analyzer[] = "Php/debugInfoUsage";
|   analyzer[] = "Structures/BreakNonInteger";
|   analyzer[] = "Structures/CalltimePassByReference";
|   analyzer[] = "Structures/ConstantScalarExpression";
|   analyzer[] = "Structures/ContinueIsForLoop";
|   analyzer[] = "Structures/CryptWithoutSalt";
|   analyzer[] = "Structures/DereferencingAS";
|   analyzer[] = "Structures/ForeachWithList";
|   analyzer[] = "Structures/IssetWithConstant";
|   analyzer[] = "Structures/NoGetClassNull";
|   analyzer[] = "Structures/PHP7Dirname";
|   analyzer[] = "Structures/SwitchWithMultipleDefault";
|   analyzer[] = "Structures/VariableGlobal";
|   analyzer[] = "Type/MalformedOctal";
|   analyzer[] = "Variables/Php5IndirectExpression";
|   analyzer[] = "Variables/Php7IndirectExpression";| 






.. _ruleset_ini_compatibilityphp55:

CompatibilityPHP55
This ruleset centralizes all analysis for the migration from PHP 5.4 to 5.5.
__________________

| [CompatibilityPHP55]
|   analyzer[] = "Classes/Anonymous";
|   analyzer[] = "Classes/CantInheritAbstractMethod";
|   analyzer[] = "Classes/ChildRemoveTypehint";
|   analyzer[] = "Classes/ConstVisibilityUsage";
|   analyzer[] = "Classes/IntegerAsProperty";
|   analyzer[] = "Classes/NonStaticMethodsCalledStatic";
|   analyzer[] = "Classes/NullOnNew";
|   analyzer[] = "Exceptions/MultipleCatch";
|   analyzer[] = "Extensions/Extapc";
|   analyzer[] = "Extensions/Extmysql";
|   analyzer[] = "Functions/GeneratorCannotReturn";
|   analyzer[] = "Functions/MultipleSameArguments";
|   analyzer[] = "Namespaces/UseFunctionsConstants";
|   analyzer[] = "Php/ClassConstWithArray";
|   analyzer[] = "Php/ConcatAndAddition";
|   analyzer[] = "Php/ConstWithArray";
|   analyzer[] = "Php/DefineWithArray";
|   analyzer[] = "Php/DirectCallToClone";
|   analyzer[] = "Php/EllipsisUsage";
|   analyzer[] = "Php/ExponentUsage";
|   analyzer[] = "Php/FlexibleHeredoc";
|   analyzer[] = "Php/GroupUseDeclaration";
|   analyzer[] = "Php/GroupUseTrailingComma";
|   analyzer[] = "Php/HashAlgos53";
|   analyzer[] = "Php/HashAlgos54";
|   analyzer[] = "Php/HashAlgos71";
|   analyzer[] = "Php/ListShortSyntax";
|   analyzer[] = "Php/ListWithKeys";
|   analyzer[] = "Php/ListWithReference";
|   analyzer[] = "Php/NoListWithString";
|   analyzer[] = "Php/NoReferenceForStaticProperty";
|   analyzer[] = "Php/NoReturnForGenerator";
|   analyzer[] = "Php/NoStringWithAppend";
|   analyzer[] = "Php/NoSubstrMinusOne";
|   analyzer[] = "Php/PHP70scalartypehints";
|   analyzer[] = "Php/PHP71scalartypehints";
|   analyzer[] = "Php/PHP72scalartypehints";
|   analyzer[] = "Php/PHP73LastEmptyArgument";
|   analyzer[] = "Php/ParenthesisAsParameter";
|   analyzer[] = "Php/Password55";
|   analyzer[] = "Php/Php55RemovedFunctions";
|   analyzer[] = "Php/Php56NewFunctions";
|   analyzer[] = "Php/Php70NewClasses";
|   analyzer[] = "Php/Php70NewFunctions";
|   analyzer[] = "Php/Php70NewInterfaces";
|   analyzer[] = "Php/Php71NewClasses";
|   analyzer[] = "Php/Php72NewClasses";
|   analyzer[] = "Php/Php73NewFunctions";
|   analyzer[] = "Php/Php7RelaxedKeyword";
|   analyzer[] = "Php/TrailingComma";
|   analyzer[] = "Php/TypedPropertyUsage";
|   analyzer[] = "Php/UnicodeEscapePartial";
|   analyzer[] = "Php/UnicodeEscapeSyntax";
|   analyzer[] = "Php/UnpackingInsideArrays";
|   analyzer[] = "Php/UseNullableType";
|   analyzer[] = "Php/debugInfoUsage";
|   analyzer[] = "Structures/ConstantScalarExpression";
|   analyzer[] = "Structures/ContinueIsForLoop";
|   analyzer[] = "Structures/IssetWithConstant";
|   analyzer[] = "Structures/NoGetClassNull";
|   analyzer[] = "Structures/PHP7Dirname";
|   analyzer[] = "Structures/SwitchWithMultipleDefault";
|   analyzer[] = "Structures/VariableGlobal";
|   analyzer[] = "Type/MalformedOctal";
|   analyzer[] = "Variables/Php5IndirectExpression";
|   analyzer[] = "Variables/Php7IndirectExpression";| 






.. _ruleset_ini_compatibilityphp56:

CompatibilityPHP56
This ruleset centralizes all analysis for the migration from PHP 5.5 to 5.6.
__________________

| [CompatibilityPHP56]
|   analyzer[] = "Classes/Anonymous";
|   analyzer[] = "Classes/CantInheritAbstractMethod";
|   analyzer[] = "Classes/ChildRemoveTypehint";
|   analyzer[] = "Classes/ConstVisibilityUsage";
|   analyzer[] = "Classes/IntegerAsProperty";
|   analyzer[] = "Classes/NonStaticMethodsCalledStatic";
|   analyzer[] = "Classes/NullOnNew";
|   analyzer[] = "Exceptions/MultipleCatch";
|   analyzer[] = "Functions/GeneratorCannotReturn";
|   analyzer[] = "Functions/MultipleSameArguments";
|   analyzer[] = "Php/ConcatAndAddition";
|   analyzer[] = "Php/DefineWithArray";
|   analyzer[] = "Php/DirectCallToClone";
|   analyzer[] = "Php/FlexibleHeredoc";
|   analyzer[] = "Php/GroupUseDeclaration";
|   analyzer[] = "Php/GroupUseTrailingComma";
|   analyzer[] = "Php/HashAlgos53";
|   analyzer[] = "Php/HashAlgos54";
|   analyzer[] = "Php/HashAlgos71";
|   analyzer[] = "Php/ListShortSyntax";
|   analyzer[] = "Php/ListWithKeys";
|   analyzer[] = "Php/ListWithReference";
|   analyzer[] = "Php/NoListWithString";
|   analyzer[] = "Php/NoReferenceForStaticProperty";
|   analyzer[] = "Php/NoReturnForGenerator";
|   analyzer[] = "Php/NoStringWithAppend";
|   analyzer[] = "Php/NoSubstrMinusOne";
|   analyzer[] = "Php/PHP70scalartypehints";
|   analyzer[] = "Php/PHP71scalartypehints";
|   analyzer[] = "Php/PHP72scalartypehints";
|   analyzer[] = "Php/PHP73LastEmptyArgument";
|   analyzer[] = "Php/ParenthesisAsParameter";
|   analyzer[] = "Php/Php70NewClasses";
|   analyzer[] = "Php/Php70NewFunctions";
|   analyzer[] = "Php/Php70NewInterfaces";
|   analyzer[] = "Php/Php71NewClasses";
|   analyzer[] = "Php/Php72NewClasses";
|   analyzer[] = "Php/Php73NewFunctions";
|   analyzer[] = "Php/Php7RelaxedKeyword";
|   analyzer[] = "Php/RawPostDataUsage";
|   analyzer[] = "Php/TrailingComma";
|   analyzer[] = "Php/TypedPropertyUsage";
|   analyzer[] = "Php/UnicodeEscapePartial";
|   analyzer[] = "Php/UnicodeEscapeSyntax";
|   analyzer[] = "Php/UnpackingInsideArrays";
|   analyzer[] = "Php/UseNullableType";
|   analyzer[] = "Structures/ContinueIsForLoop";
|   analyzer[] = "Structures/IssetWithConstant";
|   analyzer[] = "Structures/NoGetClassNull";
|   analyzer[] = "Structures/PHP7Dirname";
|   analyzer[] = "Structures/SwitchWithMultipleDefault";
|   analyzer[] = "Structures/VariableGlobal";
|   analyzer[] = "Type/MalformedOctal";
|   analyzer[] = "Variables/Php5IndirectExpression";
|   analyzer[] = "Variables/Php7IndirectExpression";| 






.. _ruleset_ini_compatibilityphp70:

CompatibilityPHP70
This ruleset centralizes all analysis for the migration from PHP 5.6 to 7.0.
__________________

| [CompatibilityPHP70]
|   analyzer[] = "Classes/CantInheritAbstractMethod";
|   analyzer[] = "Classes/ChildRemoveTypehint";
|   analyzer[] = "Classes/ConstVisibilityUsage";
|   analyzer[] = "Classes/IntegerAsProperty";
|   analyzer[] = "Classes/toStringPss";
|   analyzer[] = "Exceptions/MultipleCatch";
|   analyzer[] = "Extensions/Extereg";
|   analyzer[] = "Functions/funcGetArgModified";
|   analyzer[] = "Php/ConcatAndAddition";
|   analyzer[] = "Php/EmptyList";
|   analyzer[] = "Php/FlexibleHeredoc";
|   analyzer[] = "Php/ForeachDontChangePointer";
|   analyzer[] = "Php/GlobalWithoutSimpleVariable";
|   analyzer[] = "Php/GroupUseTrailingComma";
|   analyzer[] = "Php/HashAlgos53";
|   analyzer[] = "Php/HashAlgos54";
|   analyzer[] = "Php/HashAlgos71";
|   analyzer[] = "Php/ListShortSyntax";
|   analyzer[] = "Php/ListWithAppends";
|   analyzer[] = "Php/ListWithKeys";
|   analyzer[] = "Php/ListWithReference";
|   analyzer[] = "Php/NoReferenceForStaticProperty";
|   analyzer[] = "Php/NoSubstrMinusOne";
|   analyzer[] = "Php/PHP71scalartypehints";
|   analyzer[] = "Php/PHP72scalartypehints";
|   analyzer[] = "Php/PHP73LastEmptyArgument";
|   analyzer[] = "Php/Php70RemovedDirective";
|   analyzer[] = "Php/Php70RemovedFunctions";
|   analyzer[] = "Php/Php71NewClasses";
|   analyzer[] = "Php/Php72NewClasses";
|   analyzer[] = "Php/Php73NewFunctions";
|   analyzer[] = "Php/ReservedKeywords7";
|   analyzer[] = "Php/SetExceptionHandlerPHP7";
|   analyzer[] = "Php/TrailingComma";
|   analyzer[] = "Php/TypedPropertyUsage";
|   analyzer[] = "Php/UnpackingInsideArrays";
|   analyzer[] = "Php/UseNullableType";
|   analyzer[] = "Php/UsortSorting";
|   analyzer[] = "Structures/BreakOutsideLoop";
|   analyzer[] = "Structures/ContinueIsForLoop";
|   analyzer[] = "Structures/McryptcreateivWithoutOption";
|   analyzer[] = "Structures/NoGetClassNull";
|   analyzer[] = "Structures/SetlocaleNeedsConstants";
|   analyzer[] = "Structures/pregOptionE";
|   analyzer[] = "Type/HexadecimalString";
|   analyzer[] = "Variables/Php7IndirectExpression";| 






.. _ruleset_ini_compatibilityphp71:

CompatibilityPHP71
This ruleset centralizes all analysis for the migration from PHP 7.0 to 7.1.
__________________

| [CompatibilityPHP71]
|   analyzer[] = "Arrays/StringInitialization";
|   analyzer[] = "Classes/CantInheritAbstractMethod";
|   analyzer[] = "Classes/ChildRemoveTypehint";
|   analyzer[] = "Classes/IntegerAsProperty";
|   analyzer[] = "Classes/UsingThisOutsideAClass";
|   analyzer[] = "Extensions/Extmcrypt";
|   analyzer[] = "Php/BetterRand";
|   analyzer[] = "Php/ConcatAndAddition";
|   analyzer[] = "Php/FlexibleHeredoc";
|   analyzer[] = "Php/GroupUseTrailingComma";
|   analyzer[] = "Php/HashAlgos53";
|   analyzer[] = "Php/HashAlgos54";
|   analyzer[] = "Php/ListWithReference";
|   analyzer[] = "Php/NoReferenceForStaticProperty";
|   analyzer[] = "Php/PHP72scalartypehints";
|   analyzer[] = "Php/PHP73LastEmptyArgument";
|   analyzer[] = "Php/Php70RemovedDirective";
|   analyzer[] = "Php/Php70RemovedFunctions";
|   analyzer[] = "Php/Php71NewFunctions";
|   analyzer[] = "Php/Php71RemovedDirective";
|   analyzer[] = "Php/Php71microseconds";
|   analyzer[] = "Php/Php72NewClasses";
|   analyzer[] = "Php/Php73NewFunctions";
|   analyzer[] = "Php/TrailingComma";
|   analyzer[] = "Php/TypedPropertyUsage";
|   analyzer[] = "Php/UnpackingInsideArrays";
|   analyzer[] = "Structures/ContinueIsForLoop";
|   analyzer[] = "Structures/NoGetClassNull";
|   analyzer[] = "Structures/NoSubstrOne";
|   analyzer[] = "Structures/pregOptionE";
|   analyzer[] = "Type/HexadecimalString";
|   analyzer[] = "Type/OctalInString";| 






.. _ruleset_ini_compatibilityphp72:

CompatibilityPHP72
This ruleset centralizes all analysis for the migration from PHP 7.1 to 7.2.
__________________

| [CompatibilityPHP72]
|   analyzer[] = "Constants/UndefinedConstants";
|   analyzer[] = "Php/AvoidSetErrorHandlerContextArg";
|   analyzer[] = "Php/ConcatAndAddition";
|   analyzer[] = "Php/FlexibleHeredoc";
|   analyzer[] = "Php/HashAlgos53";
|   analyzer[] = "Php/HashAlgos54";
|   analyzer[] = "Php/HashUsesObjects";
|   analyzer[] = "Php/ListWithReference";
|   analyzer[] = "Php/NoReferenceForStaticProperty";
|   analyzer[] = "Php/PHP73LastEmptyArgument";
|   analyzer[] = "Php/Php72Deprecation";
|   analyzer[] = "Php/Php72NewClasses";
|   analyzer[] = "Php/Php72NewConstants";
|   analyzer[] = "Php/Php72NewFunctions";
|   analyzer[] = "Php/Php72ObjectKeyword";
|   analyzer[] = "Php/Php72RemovedFunctions";
|   analyzer[] = "Php/Php73NewFunctions";
|   analyzer[] = "Php/TrailingComma";
|   analyzer[] = "Php/TypedPropertyUsage";
|   analyzer[] = "Php/UnpackingInsideArrays";
|   analyzer[] = "Structures/CanCountNonCountable";
|   analyzer[] = "Structures/ContinueIsForLoop";
|   analyzer[] = "Structures/NoGetClassNull";
|   analyzer[] = "Structures/pregOptionE";| 






.. _ruleset_ini_compatibilityphp73:

CompatibilityPHP73
This ruleset centralizes all analysis for the migration from PHP 7.2 to 7.3.
__________________

| [CompatibilityPHP73]
|   analyzer[] = "Constants/CaseInsensitiveConstants";
|   analyzer[] = "Php/AssertFunctionIsReserved";
|   analyzer[] = "Php/CompactInexistant";
|   analyzer[] = "Php/ConcatAndAddition";
|   analyzer[] = "Php/IntegerSeparatorUsage";
|   analyzer[] = "Php/Php73NewFunctions";
|   analyzer[] = "Php/Php73RemovedFunctions";
|   analyzer[] = "Php/Php74NewDirective";
|   analyzer[] = "Php/TypedPropertyUsage";
|   analyzer[] = "Php/UnknownPcre2Option";
|   analyzer[] = "Php/UnpackingInsideArrays";
|   analyzer[] = "Structures/ContinueIsForLoop";
|   analyzer[] = "Structures/DontReadAndWriteInOneExpression";| 






.. _ruleset_ini_compatibilityphp74:

CompatibilityPHP74
This ruleset centralizes all analysis for the migration from PHP 7.3 to 7.4.
__________________

| [CompatibilityPHP74]
|   analyzer[] = "Functions/UnbindingClosures";
|   analyzer[] = "Php/ArrayKeyExistsWithObjects";
|   analyzer[] = "Php/ConcatAndAddition";
|   analyzer[] = "Php/DetectCurrentClass";
|   analyzer[] = "Php/HashAlgos74";
|   analyzer[] = "Php/IdnUts46";
|   analyzer[] = "Php/NestedTernaryWithoutParenthesis";
|   analyzer[] = "Php/NoMoreCurlyArrays";
|   analyzer[] = "Php/Php74Deprecation";
|   analyzer[] = "Php/Php74NewClasses";
|   analyzer[] = "Php/Php74NewConstants";
|   analyzer[] = "Php/Php74NewFunctions";
|   analyzer[] = "Php/Php74RemovedDirective";
|   analyzer[] = "Php/Php74RemovedFunctions";
|   analyzer[] = "Php/Php74ReservedKeyword";
|   analyzer[] = "Php/Php74mbstrrpos3rdArg";
|   analyzer[] = "Php/ReflectionExportIsDeprecated";
|   analyzer[] = "Php/ScalarAreNotArrays";
|   analyzer[] = "Structures/CurlVersionNow";
|   analyzer[] = "Structures/DontReadAndWriteInOneExpression";
|   analyzer[] = "Structures/OpensslRandomPseudoByteSecondArg";| 






.. _ruleset_ini_compatibilityphp80:

CompatibilityPHP80
This ruleset centralizes all analysis for the migration from PHP 7.4 to 8.0.
__________________

| [CompatibilityPHP80]
|   analyzer[] = "Php/ConcatAndAddition";
|   analyzer[] = "Php/Php80RemovedConstant";
|   analyzer[] = "Php/Php80RemovedFunctions";| 






.. _ruleset_ini_dead code:

Dead code
This ruleset focuses on dead code : expressions or even structures that are written, valid but never used.
_________

| [Dead code]
|   analyzer[] = "Classes/CantExtendFinal";
|   analyzer[] = "Classes/LocallyUnusedProperty";
|   analyzer[] = "Classes/UnresolvedCatch";
|   analyzer[] = "Classes/UnresolvedInstanceof";
|   analyzer[] = "Classes/UnusedClass";
|   analyzer[] = "Classes/UnusedMethods";
|   analyzer[] = "Classes/UnusedPrivateMethod";
|   analyzer[] = "Classes/UnusedPrivateProperty";
|   analyzer[] = "Classes/UnusedProtectedMethods";
|   analyzer[] = "Constants/UnusedConstants";
|   analyzer[] = "Exceptions/AlreadyCaught";
|   analyzer[] = "Exceptions/CaughtButNotThrown";
|   analyzer[] = "Exceptions/Rethrown";
|   analyzer[] = "Exceptions/Unthrown";
|   analyzer[] = "Functions/UnusedFunctions";
|   analyzer[] = "Functions/UnusedInheritedVariable";
|   analyzer[] = "Functions/UnusedReturnedValue";
|   analyzer[] = "Functions/UselessTypeCheck";
|   analyzer[] = "Interfaces/UnusedInterfaces";
|   analyzer[] = "Namespaces/EmptyNamespace";
|   analyzer[] = "Namespaces/UnusedUse";
|   analyzer[] = "Structures/EmptyLines";
|   analyzer[] = "Structures/UnreachableCode";
|   analyzer[] = "Structures/UnsetInForeach";
|   analyzer[] = "Structures/UnusedLabel";
|   analyzer[] = "Traits/SelfUsingTrait";| 






.. _ruleset_ini_lintbutwontexec:

LintButWontExec
This ruleset focuses on PHP code that lint (php -l), but that will not run. As such, this ruleset tries to go further than PHP, by connecting files, just like during execution.
_______________

| [LintButWontExec]
|   analyzer[] = "Classes/AbstractOrImplements";
|   analyzer[] = "Classes/CloneWithNonObject";
|   analyzer[] = "Classes/Finalclass";
|   analyzer[] = "Classes/Finalmethod";
|   analyzer[] = "Classes/IncompatibleSignature";
|   analyzer[] = "Classes/MethodSignatureMustBeCompatible";
|   analyzer[] = "Classes/MutualExtension";
|   analyzer[] = "Classes/NoMagicWithArray";
|   analyzer[] = "Classes/NoPSSOutsideClass";
|   analyzer[] = "Classes/NoSelfReferencingConstant";
|   analyzer[] = "Classes/RaisedAccessLevel";
|   analyzer[] = "Classes/UsingThisOutsideAClass";
|   analyzer[] = "Exceptions/CantThrow";
|   analyzer[] = "Functions/MismatchTypeAndDefault";
|   analyzer[] = "Functions/MustReturn";
|   analyzer[] = "Functions/OnlyVariableForReference";
|   analyzer[] = "Functions/TypehintMustBeReturned";
|   analyzer[] = "Interfaces/CantImplementTraversable";
|   analyzer[] = "Interfaces/ConcreteVisibility";
|   analyzer[] = "Interfaces/RepeatedInterface";
|   analyzer[] = "Traits/MethodCollisionTraits";
|   analyzer[] = "Traits/TraitNotFound";
|   analyzer[] = "Traits/UndefinedInsteadof";
|   analyzer[] = "Traits/UndefinedTrait";
|   analyzer[] = "Traits/UselessAlias";| 






.. _ruleset_ini_performances:

Performances
This ruleset focuses on performances issues : anything that slows the code's execution.
____________

| [Performances]
|   analyzer[] = "Arrays/GettingLastElement";
|   analyzer[] = "Arrays/SliceFirst";
|   analyzer[] = "Classes/MakeMagicConcrete";
|   analyzer[] = "Classes/UseClassOperator";
|   analyzer[] = "Functions/Closure2String";
|   analyzer[] = "Performances/ArrayKeyExistsSpeedup";
|   analyzer[] = "Performances/ArrayMergeInLoops";
|   analyzer[] = "Performances/Autoappend";
|   analyzer[] = "Performances/AvoidArrayPush";
|   analyzer[] = "Performances/CacheVariableOutsideLoop";
|   analyzer[] = "Performances/CsvInLoops";
|   analyzer[] = "Performances/DoInBase";
|   analyzer[] = "Performances/DoubleArrayFlip";
|   analyzer[] = "Performances/FetchOneRowFormat";
|   analyzer[] = "Performances/IssetWholeArray";
|   analyzer[] = "Performances/JoinFile";
|   analyzer[] = "Performances/MakeOneCall";
|   analyzer[] = "Performances/MbStringInLoop";
|   analyzer[] = "Performances/NoConcatInLoop";
|   analyzer[] = "Performances/NoGlob";
|   analyzer[] = "Performances/NotCountNull";
|   analyzer[] = "Performances/PHP7EncapsedStrings";
|   analyzer[] = "Performances/Php74ArrayKeyExists";
|   analyzer[] = "Performances/PrePostIncrement";
|   analyzer[] = "Performances/RegexOnArrays";
|   analyzer[] = "Performances/RegexOnCollector";
|   analyzer[] = "Performances/SimpleSwitch";
|   analyzer[] = "Performances/SlowFunctions";
|   analyzer[] = "Performances/SubstrFirst";
|   analyzer[] = "Performances/UseBlindVar";
|   analyzer[] = "Performances/timeVsstrtotime";
|   analyzer[] = "Php/ShouldUseArrayColumn";
|   analyzer[] = "Php/ShouldUseFunction";
|   analyzer[] = "Php/UsePathinfoArgs";
|   analyzer[] = "Structures/CouldUseShortAssignation";
|   analyzer[] = "Structures/EchoWithConcat";
|   analyzer[] = "Structures/EvalUsage";
|   analyzer[] = "Structures/ForWithFunctioncall";
|   analyzer[] = "Structures/GlobalOutsideLoop";
|   analyzer[] = "Structures/NoArrayUnique";
|   analyzer[] = "Structures/NoAssignationInFunction";
|   analyzer[] = "Structures/NoSubstrOne";
|   analyzer[] = "Structures/Noscream";
|   analyzer[] = "Structures/SimplePreg";
|   analyzer[] = "Structures/WhileListEach";| 






.. _ruleset_ini_security:

Security
This ruleset focuses on code security. 
________

| [Security]
|   analyzer[] = "Functions/HardcodedPasswords";
|   analyzer[] = "Php/BetterRand";
|   analyzer[] = "Security/AnchorRegex";
|   analyzer[] = "Security/AvoidThoseCrypto";
|   analyzer[] = "Security/CompareHash";
|   analyzer[] = "Security/ConfigureExtract";
|   analyzer[] = "Security/CurlOptions";
|   analyzer[] = "Security/DirectInjection";
|   analyzer[] = "Security/DontEchoError";
|   analyzer[] = "Security/DynamicDl";
|   analyzer[] = "Security/EncodedLetters";
|   analyzer[] = "Security/FilterInputSource";
|   analyzer[] = "Security/IndirectInjection";
|   analyzer[] = "Security/IntegerConversion";
|   analyzer[] = "Security/MinusOneOnError";
|   analyzer[] = "Security/MkdirDefault";
|   analyzer[] = "Security/MoveUploadedFile";
|   analyzer[] = "Security/NoEntIgnore";
|   analyzer[] = "Security/NoNetForXmlLoad";
|   analyzer[] = "Security/NoSleep";
|   analyzer[] = "Security/NoWeakSSLCrypto";
|   analyzer[] = "Security/RegisterGlobals";
|   analyzer[] = "Security/SafeHttpHeaders";
|   analyzer[] = "Security/SessionLazyWrite";
|   analyzer[] = "Security/SetCookieArgs";
|   analyzer[] = "Security/ShouldUsePreparedStatement";
|   analyzer[] = "Security/ShouldUseSessionRegenerateId";
|   analyzer[] = "Security/Sqlite3RequiresSingleQuotes";
|   analyzer[] = "Security/UnserializeSecondArg";
|   analyzer[] = "Security/UploadFilenameInjection";
|   analyzer[] = "Security/parseUrlWithoutParameters";
|   analyzer[] = "Structures/EvalUsage";
|   analyzer[] = "Structures/EvalWithoutTry";
|   analyzer[] = "Structures/Fallthrough";
|   analyzer[] = "Structures/NoHardcodedHash";
|   analyzer[] = "Structures/NoHardcodedIp";
|   analyzer[] = "Structures/NoHardcodedPort";
|   analyzer[] = "Structures/NoReturnInFinally";
|   analyzer[] = "Structures/PhpinfoUsage";
|   analyzer[] = "Structures/RandomWithoutTry";
|   analyzer[] = "Structures/VardumpUsage";
|   analyzer[] = "Structures/pregOptionE";| 






.. _ruleset_ini_semantics:

Semantics
This ruleset focuses on human interpretation of the code. It reviews special values of literals, and named structures.
_________

| [Semantics]
|   analyzer[] = "Functions/OneLetterFunctions";
|   analyzer[] = "Functions/ParameterHiding";
|   analyzer[] = "Php/ClassFunctionConfusion";
|   analyzer[] = "Structures/PropertyVariableConfusion";
|   analyzer[] = "Type/DuplicateLiteral";
|   analyzer[] = "Type/SimilarIntegers";
|   analyzer[] = "Variables/VariableOneLetter";| 






.. _ruleset_ini_suggestions:

Suggestions
This ruleset focuses on possibly better syntax than the one currently used. Those may be code modernization, alternatives, more efficient solutions, or simply left over from older versions. 
___________

| [Suggestions]
|   analyzer[] = "Arrays/RandomlySortedLiterals";
|   analyzer[] = "Arrays/ShouldPreprocess";
|   analyzer[] = "Arrays/SliceFirst";
|   analyzer[] = "Classes/ParentFirst";
|   analyzer[] = "Classes/ShouldDeepClone";
|   analyzer[] = "Classes/ShouldHaveDestructor";
|   analyzer[] = "Classes/ShouldUseSelf";
|   analyzer[] = "Classes/TooManyChildren";
|   analyzer[] = "Classes/UnitializedProperties";
|   analyzer[] = "Constants/CouldBeConstant";
|   analyzer[] = "Exceptions/CouldUseTry";
|   analyzer[] = "Exceptions/OverwriteException";
|   analyzer[] = "Functions/AddDefaultValue";
|   analyzer[] = "Functions/Closure2String";
|   analyzer[] = "Functions/CouldBeCallable";
|   analyzer[] = "Functions/CouldBeStaticClosure";
|   analyzer[] = "Functions/CouldCentralize";
|   analyzer[] = "Functions/CouldReturnVoid";
|   analyzer[] = "Functions/CouldTypehint";
|   analyzer[] = "Functions/MultipleIdenticalClosure";
|   analyzer[] = "Functions/NeverUsedParameter";
|   analyzer[] = "Functions/NoReturnUsed";
|   analyzer[] = "Functions/ShouldBeTypehinted";
|   analyzer[] = "Functions/TooManyParameters";
|   analyzer[] = "Functions/UselessArgument";
|   analyzer[] = "Functions/UselessDefault";
|   analyzer[] = "Interfaces/AlreadyParentsInterface";
|   analyzer[] = "Interfaces/UnusedInterfaces";
|   analyzer[] = "Namespaces/CouldUseAlias";
|   analyzer[] = "Performances/ArrayKeyExistsSpeedup";
|   analyzer[] = "Performances/IssetWholeArray";
|   analyzer[] = "Performances/SubstrFirst";
|   analyzer[] = "Php/AvoidReal";
|   analyzer[] = "Php/CompactInexistant";
|   analyzer[] = "Php/CouldUseIsCountable";
|   analyzer[] = "Php/DetectCurrentClass";
|   analyzer[] = "Php/ImplodeOneArg";
|   analyzer[] = "Php/IssetMultipleArgs";
|   analyzer[] = "Php/LogicalInLetters";
|   analyzer[] = "Php/NewExponent";
|   analyzer[] = "Php/PregMatchAllFlag";
|   analyzer[] = "Php/ShouldPreprocess";
|   analyzer[] = "Php/ShouldUseArrayColumn";
|   analyzer[] = "Php/ShouldUseArrayFilter";
|   analyzer[] = "Php/ShouldUseCoalesce";
|   analyzer[] = "Php/UseDateTimeImmutable";
|   analyzer[] = "Php/UseSessionStartOptions";
|   analyzer[] = "Structures/BasenameSuffix";
|   analyzer[] = "Structures/BooleanStrictComparison";
|   analyzer[] = "Structures/CouldUseArrayFillKeys";
|   analyzer[] = "Structures/CouldUseArrayUnique";
|   analyzer[] = "Structures/CouldUseCompact";
|   analyzer[] = "Structures/CouldUseDir";
|   analyzer[] = "Structures/DirectlyUseFile";
|   analyzer[] = "Structures/DontLoopOnYield";
|   analyzer[] = "Structures/DropElseAfterReturn";
|   analyzer[] = "Structures/EchoWithConcat";
|   analyzer[] = "Structures/EmptyWithExpression";
|   analyzer[] = "Structures/FunctionPreSubscripting";
|   analyzer[] = "Structures/JsonWithOption";
|   analyzer[] = "Structures/ListOmissions";
|   analyzer[] = "Structures/MismatchedTernary";
|   analyzer[] = "Structures/MultipleUnset";
|   analyzer[] = "Structures/NamedRegex";
|   analyzer[] = "Structures/NoNeedGetClass";
|   analyzer[] = "Structures/NoParenthesisForLanguageConstruct";
|   analyzer[] = "Structures/NoSubstrOne";
|   analyzer[] = "Structures/OneIfIsSufficient";
|   analyzer[] = "Structures/PHP7Dirname";
|   analyzer[] = "Structures/PossibleIncrement";
|   analyzer[] = "Structures/RepeatedPrint";
|   analyzer[] = "Structures/ReuseVariable";
|   analyzer[] = "Structures/SetAside";
|   analyzer[] = "Structures/ShouldUseForeach";
|   analyzer[] = "Structures/ShouldUseMath";
|   analyzer[] = "Structures/ShouldUseOperator";
|   analyzer[] = "Structures/SubstrLastArg";
|   analyzer[] = "Structures/SubstrToTrim";
|   analyzer[] = "Structures/UnreachableCode";
|   analyzer[] = "Structures/UseArrayFunctions";
|   analyzer[] = "Structures/UseCaseValue";
|   analyzer[] = "Structures/UseCountRecursive";
|   analyzer[] = "Structures/UseListWithForeach";
|   analyzer[] = "Structures/UseUrlQueryFunctions";
|   analyzer[] = "Structures/WhileListEach";
|   analyzer[] = "Traits/MultipleUsage";
|   analyzer[] = "Variables/ComplexDynamicNames";| 






.. _ruleset_ini_top10:

Top10
This ruleset is a selection of analysis, with the top 10 most common. Actually, it is a little larger than that. 
_____

| [Top10]
|   analyzer[] = "Classes/DontUnsetProperties";
|   analyzer[] = "Classes/UnitializedProperties";
|   analyzer[] = "Classes/UnresolvedInstanceof";
|   analyzer[] = "Constants/ConstRecommended";
|   analyzer[] = "Functions/ShouldYieldWithKey";
|   analyzer[] = "Performances/ArrayMergeInLoops";
|   analyzer[] = "Performances/CsvInLoops";
|   analyzer[] = "Performances/NoConcatInLoop";
|   analyzer[] = "Performances/SubstrFirst";
|   analyzer[] = "Php/AvoidReal";
|   analyzer[] = "Php/ConcatAndAddition";
|   analyzer[] = "Php/LetterCharsLogicalFavorite";
|   analyzer[] = "Php/LogicalInLetters";
|   analyzer[] = "Php/MissingSubpattern";
|   analyzer[] = "Structures/CouldUseStrrepeat";
|   analyzer[] = "Structures/DanglingArrayReferences";
|   analyzer[] = "Structures/FailingSubstrComparison";
|   analyzer[] = "Structures/ForWithFunctioncall";
|   analyzer[] = "Structures/NextMonthTrap";
|   analyzer[] = "Structures/NoChoice";
|   analyzer[] = "Structures/NoSubstrOne";
|   analyzer[] = "Structures/ObjectReferences";
|   analyzer[] = "Structures/QueriesInLoop";
|   analyzer[] = "Structures/RepeatedPrint";
|   analyzer[] = "Structures/StrposCompare";
|   analyzer[] = "Structures/UseListWithForeach";
|   analyzer[] = "Type/NoRealComparison";
|   analyzer[] = "Variables/VariableUsedOnce";| 






.. _ruleset_ini_typechecks:

Typechecks
This ruleset focuses on typehinting. Missing typehint, or inconsistent typehint, are reported. 
__________

| [Typechecks]
|   analyzer[] = "Functions/InsufficientTypehint";
|   analyzer[] = "Interfaces/UselessInterfaces";| 





