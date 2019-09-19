<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 17/09/2019
 * Time: 15:34
 */

$em = conexaoBancoDados();
$tool = new \Doctrine\ORM\Tools\SchemaTool($em);
$classes = array(
    $em->getClassMetadata('Produto'),
//    $em->getClassMetadata(''),
//    $em->getClassMetadata(''),
//    $em->getClassMetadata(''),
//    $em->getClassMetadata(''),
//    $em->getClassMetadata(''),
//    $em->getClassMetadata(''),
//    $em->getClassMetadata(''),
//    $em->getClassMetadata(''),
//    $em->getClassMetadata(''),
//    $em->getClassMetadata(''),
//    $em->getClassMetadata(''),
//    $em->getClassMetadata(''),
//    $em->getClassMetadata('')

);
$tool->dropSchema($classes); // remove banco de dados