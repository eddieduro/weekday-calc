<?php
    require_once "src/Weekday.php";

    class WeekdayTest extends PHPUnit_Framework_TestCase
    {
        // function test_month()
        // {
        //     //Arrange
        //     $weekday = new Weekday;
        //     $input = "august";
        //     $input2 = "1";
        //     $input3 = "2003";
        //
        //     //Act
        //     $output = $weekday->findDay($input, $input2, $input3);
        //
        //     //Assert
        //     $this->assertEquals("friday", $output);
        // }
        //
        // function test_year()
        // {
        //     //Arrange
        //     $weekday = new Weekday;
        //     $input = "July";
        //     $input2 = "4";
        //     $input3 = "2002";
        //
        //     //Act
        //     $output = $weekday->findDay($input, $input2, $input3);
        //
        //     //Assert
        //     $this->assertEquals("thursday", $output);
        // }

        function test_leapyear_by_12()
        {
            //Arrange
            $weekday = new Weekday;
            $input = "february";
            $input2 = "29";
            $input3 = "2036";

            //Act
            $output = $weekday->findDay($input, $input2, $input3);

            //Assert
            $this->assertEquals("friday", $output);
        }

        function test_leapyear_by_4()
        {
            //Arrange
            $weekday = new Weekday;
            $input = "february";
            $input2 = "29";
            $input3 = "2032";

            //Act
            $output = $weekday->findDay($input, $input2, $input3);

            //Assert
            $this->assertEquals("thursday", $output);
        }
    }

?>
