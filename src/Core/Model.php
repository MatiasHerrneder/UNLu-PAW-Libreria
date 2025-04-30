<?php
#Modelo de base que herendan los genericos

namespace Paw\Core;

use Paw\Core\Database\QueryBuilder;
use Paw\Core\Traits\Loggable;

class Model
{
    use Loggable;

    public $queryBuilder;

    public function setQueryBuilder(QueryBuilder $qb)
    {
        $this->queryBuilder = $qb;
    }

    public function getByPrimaryKey ($table, $keys = []) {
        $where = [];
        foreach ($keys as $key => $value) {
            $where = [$key . " = ". $value];
        }
        return $this->queryBuilder->select($table, $where);
    }
}