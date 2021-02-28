<?php
namespace AbstractFactory;

use AbstractFactory\Db\MySQL;
use AbstractFactory\Db\Oracle;
use AbstractFactory\Db\PostgresSQL;
use AbstractFactory\Factory\MySQLRepositoryFactory;
use AbstractFactory\Factory\OracleRepositoryFactory;
use AbstractFactory\Factory\PostgresRepositoryFactory;
use AbstractFactory\Service\Service;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^AbstractFactory/', '', $className);
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

// добавление продукта в MySQL
$mySQLRepositoryFactory = new MySQLRepositoryFactory(new MySQL());
$serviceWithMySQLRepositories = new Service($mySQLRepositoryFactory);
$serviceWithMySQLRepositories->addProduct();

// добавление продукта в Postgres
$PostgresSQLRepositoryFactory = new PostgresRepositoryFactory(new PostgresSQL());
$serviceWithPostgresSQLRepositories = new Service($PostgresSQLRepositoryFactory);
$serviceWithPostgresSQLRepositories->addProduct();

// добавление продукта в Oracle
$OracleRepositoryFactory = new OracleRepositoryFactory(new Oracle());
$serviceWithOracleRepositories = new Service($OracleRepositoryFactory);
$serviceWithOracleRepositories->addProduct();