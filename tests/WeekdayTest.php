<?php
    require_once "src/Weekday.php";

    class WeekdayTest extends PHPUnit_Framework_TestCase
    {
        function test_month()
        {
            //Arrange
            $weekday = new Weekday;
            $input = "July";
            $input2 = "2000";

            //Act
            $output = $weekday->findDay($input, $input2);

            //Assert
            $this->assertEquals(0, $output);
        }

        function test_year()
        {
            //Arrange
            $weekday = new Weekday;
            $input = "July";
            $input2 = "2002";

            //Act
            $output = $weekday->findDay($input, $input2);

            //Assert
            $this->assertEquals(2, $output);
        }
    }

?>
