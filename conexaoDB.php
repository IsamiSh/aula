<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 29/10/15
 * Time: 10:03
 */
function conexaoDB(){
    try{

        $config = include "config.php";

        if(!isset ($config['db'])){
            throw new Exception('Configuração do banco de dados não existe');
        }

        $host = (isset($config['db']['host'])) ? $config['db']['host'] : null;
        $dbname = (isset($config['db']['dbname'])) ? $config['db']['dbname'] : null;
        $user = (isset($config['db']['user'])) ? $config['db']['user'] : null;
        $password = (isset($config['db']['password'])) ? $config['db']['password'] : null;

        return new \PDO("mysql:host={$host};dbname={$dbname}", $user, $password);

    }catch (\PDOException $e){

        echo $e->getMessage()."\n";
        echo $e->getTraceAsString()."\n";
    }
}