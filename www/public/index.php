<?php
define('DBINFO', array(
    'host'      =>  'dbHost',
    'port'      =>  3306,
    'db'        =>  'database',
    'user'      =>  'dbUser',
    'password'  =>  'dbPassword'
));

define('WEBROOT', dirname(__FILE__));
define('ROOT', dirname(WEBROOT));
define('CORE', ROOT.DIRECTORY_SEPARATOR.'core');
define('MODEL', ROOT.DIRECTORY_SEPARATOR.'model');
define('CONTROLLER', ROOT.DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR);
define('PAGES', WEBROOT.DIRECTORY_SEPARATOR.'pages');
define('PHPMAILER', ROOT.DIRECTORY_SEPARATOR.'phpmailer');
define('NAVBAR', PAGES.DIRECTORY_SEPARATOR.'nav.php');
define('BANNER', PAGES.DIRECTORY_SEPARATOR.'baniere.php');
define('FOOTER', PAGES.DIRECTORY_SEPARATOR.'footer.php');
define('WELCOME', 'welcome.php');
define('HOME', 'home.php');

# liens vers les pages
define('URLS', array(
    'welcome'               =>   'http://sowb.com',
    'home'                  =>   'http://sowb.com/home',
    'rendez-vous'           =>   'http://sowb.com/rendez-vous',
));

define('STYLE', 'public'.DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR.'css'.DIRECTORY_SEPARATOR.'style.css');
define('WELCOME_JS', 'public'.DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR.'js'.DIRECTORY_SEPARATOR.'welcome.js');
define('RV', 'public'.DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR.'js'.DIRECTORY_SEPARATOR.'rv.js');
define('IMGS', 'public'.DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR.'imgs'.DIRECTORY_SEPARATOR);
define('DOCS', 'public'.DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR.'docs'.DIRECTORY_SEPARATOR);

require_once(CORE.DIRECTORY_SEPARATOR.'includes.php');

spl_autoload_register('chargerClass');

new Dispatcher();