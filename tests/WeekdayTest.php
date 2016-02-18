<?php
    require_once "src/Weekday.php";

    class WeekdayTest extends PHPUnit_Framework_TestCase
    {
        function test_month()
        {
            //Arrange
            $weekday = new Weekday;
            $input = "august";
            $input2 = "1";
            $input3 = "2004";

            //Act
            $output = $weekday->findDay($input, $input2, $input3);

            //Assert
            $this->assertEquals("saturday", $output);
        }

        function test_year()
        {
            //Arrange
            $weekday = new Weekday;
            $input = "July";
            $input2 = "4";
            $input3 = "2002";

            //Act
            $output = $weekday->findDay($input, $input2, $input3);

            //Assert
            $this->assertEquals("thursday", $output);
        }
    }

?>
