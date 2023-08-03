<?php
/**
 * defini la fonction utiliser dans spl_autoload_register
 * pour l'auto inclusion des fichiers
 */
function chargerClass($className){
  require $className.'.php';
}