<?php

namespace Wrcx\Losquery\Builder;

use Wrcx\Losquery\Builder\SqlQueryInterface as Builder;

class SqlQueryFactory
{
    public function __construct(Builder $builder )
    {
        $this->builder = $builder;
    }
    
    /**
     * @return Builder
     */
    public function newInstance()
    {
        return $this->builder;
    }
}
