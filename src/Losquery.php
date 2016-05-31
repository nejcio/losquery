<?php

namespace Wrcx\Losquery;

use Wrcx\Losquery\Builder\SqlQueryFactory;

class Losquery
{
    protected $factory;

    public function __construct()
    {
        $sqlQueryFactory = new SqlQueryFactory(Config::getConfig('builder'));
        $this->factory = $sqlQueryFactory->newInstance();
    }

    /**
     * @return Builder\SqlQueryInterface
     */
    public function getFactory()
    {
        return $this->factory;
    }

    /**
     * @param $method
     * @param $parameters
     *
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        $query = $this->factory;
        return call_user_func_array([$query, $method], $parameters);
    }
}
