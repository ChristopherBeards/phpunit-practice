<?php 
  require '../vendor/autoload.php';
  # Require file to be tested
  require '../src/Calculator.php';
  use PHPUnit\Framework\TestCase;

  class CalculatorTests extends TestCase
  {
    private $calculator;

    # Setup is called before each test runs
    protected function setUp()
    {
      $this->calculator = new Calculator();
    }

    # Tear Down runs after each test runs
    protected function tearDown()
    {
      $this->calculator = NULL;
    }

    public function testAdd()
    {
      $result = $this->calculator->add(1, 2);
      $this->assertEquals(3, $result);
    }
  }
?>