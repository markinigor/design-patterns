<?php

namespace Tests\Builder\Guru;

class PostgresQueryBuilder extends MysqlQueryBuilder
{
    /**
     * Помимо прочего, PostgreSQL имеет несколько иной синтаксис LIMIT.
     */
    public function limit(int $start, int $offset): SQLQueryBuilder
    {
        parent::limit($start, $offset);

        $this->query->limit = " LIMIT " . $start . " OFFSET " . $offset;

        return $this;
    }
}