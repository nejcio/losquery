<?php
namespace LosqueryTest;

use \Wrcx\Losquery\Losquery;

class LosqueryTest extends \PHPUnit_Framework_TestCase {

    /**
     *Interface check
     */
    function ifIsAnInstanceOfSqlQueryBuilder ()
    {
        $query = new Losquery();
        $this->assertInstanceOf('\Wrcx\Losquery\Builder\SqlQueryBuilder', $query->getFactory());
    }
}