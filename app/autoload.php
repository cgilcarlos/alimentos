<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;
#Class Name: Zgz\AulasMentor\EjercicioBundle\Controller\DefaultController.php
#Path: fuentes/Zgz/AulasMentor/EjercicioBundle/Controller/DEfaultController.php
#require("fuentes/Zgz/AulasMentor/EjercicioBundle/Controller/DEfaultController.php")
/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
