<?php
namespace LosqueryTest;

use \Wrcx\Losquery\Losquery;

class LosqueryTest extends \PHPUnit_Framework_TestCase {

    /**
     *Interface check
     * @tests
     */
    function ifIsAnInstanceOfSqlQueryBuilder ()
    {
        $query = new Losquery();
        $this->assertInstanceOf('\Wrcx\Losquery\Builder\SqlQueryBuilder', $query->getFactory());
    }

    /**
     *Is json and not null
     * @tests
     */
    function isJsonAndNotNullTest() {
        $query = new Losquery();
        $query = $query->select('*')
            ->from("users")
            ->get();
        $runner = new \Wrcx\Losquery\Losrunner();
        $json = $runner->run($query, 'json');
        $this->assertNotNull($json);
    }
}