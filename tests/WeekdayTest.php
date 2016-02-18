<?php
    require_once "src/Weekday.php";

    class WeekdayTest extends PHPUnit_Framework_TestCase
    {
        function test_month()
        {
            //Arrange
            $weekday = new Weekday;
            $input = "July";

            //Act
            $output = $weekday->findDay($input);

            //Assert
            $this->assertEquals(5, $output);
        }
    }

?>
