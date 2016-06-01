<?php
namespace LosqueryTest;

use \Wrcx\Losquery\Losrunner;

class LosrunnerTest extends \PHPUnit_Framework_TestCase {

    /**
     * Interface check
     * @tests
    */
    function ifIsAnInstanceOfprocessFactory()
    {
        $runner = new Losrunner();
        $this->assertInstanceOf('\Wrcx\Losquery\Process\ProcessInterface', $runner->getFactory());
    }
}