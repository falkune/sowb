<?php
define('DBINFO', array(
    'host'      =>  'db.sowb.com',
    'port'      =>  3306,
    'db'        =>  'swob_db',
    'user'      =>  'admin',
    'password'  =>  'admin'
));

define("WEB", "http://sowb.com/");

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
define('CALL', 'telephone.php');
define('MARQUE', 'marque.php');
define('MODELE', 'model.php');
define('TYPE', 'type.php');

# liens vers les pages
define('URLS', array(
    'welcome'               =>   WEB.'',
    'home'                  =>   WEB.'home',
    'rendez-vous'           =>   WEB.'rendez-vous',
    'service'               =>   WEB.'service',
    'diagnostique'          =>   WEB.'diagnostique',
    'phone'                 =>   WEB.'phone',
    'tablet'                =>   WEB.'tablette',
    'computer'              =>   WEB.'ordinateur',
    'network'               =>   WEB.'resaux',

));

define('STYLE', 'public'.DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR.'css'.DIRECTORY_SEPARATOR.'style.css');
define('WELCOME_JS', 'public'.DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR.'js'.DIRECTORY_SEPARATOR.'welcome.js');
define('RV', 'public'.DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR.'js'.DIRECTORY_SEPARATOR.'rv.js');
define('PHONE', 'public'.DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR.'js'.DIRECTORY_SEPARATOR.'phone.js');
define('IMGS', 'public'.DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR.'imgs'.DIRECTORY_SEPARATOR);
define('DOCS', 'public'.DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR.'docs'.DIRECTORY_SEPARATOR);

require_once(CORE.DIRECTORY_SEPARATOR.'includes.php');

spl_autoload_register('chargerClass');

new Dispatcher();