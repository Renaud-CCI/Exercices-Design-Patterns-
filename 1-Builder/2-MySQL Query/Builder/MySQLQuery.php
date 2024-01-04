<?php 

namespace App\Builder;

use App\Builder\Interfaces\QueryBuilderInterface;

class MySQLQuery implements QueryBuilderInterface
{
    private string $select = "";
    private string $where = "";
    private string $limit = "";

    public function reset(): QueryBuilderInterface
    {
        $this->select = "";
        $this->where = "";
        $this->limit = "";
        return $this;
    }
    public function select(string $table, array $fields): QueryBuilderInterface
    {
        $this->select = "SELECT " . implode(", ", $fields) . " FROM " . $table;
        return $this;
    }
    public function where(string $field, string $value, string $operator = '='): QueryBuilderInterface
    {
        $this->where = " WHERE " . $field . " " . $operator . " " . $value;
        return $this;
    }
    public function limit(int $start, int $offset): QueryBuilderInterface
    {
        $this->limit = " LIMIT " . $start . ", " . $offset;
        return $this;
    }
    public function get(): string
    {
        return $this->select . $this->where . $this->limit;
    }
}