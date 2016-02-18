<?php
    class Weekday{

        function findDay($input_month, $input_day, $input_year)
        {
            $lower_case_month = strtolower($input_month);
            $year_number = str_split($input_year);
            $year_number_last = $year_number[3];
            $leap_year = $year_number[2] . $year_number[3];
            // var_dump($leap_year);
            $month_value = 0;
            $final_day = 0;
            $leap_year_remainder = 0;

            $month_array = array("january"=> 6, "february"=>2, "march"=>2, "april"=>5, "may"=>0, "june"=>3, "july"=>5, "august"=>1, "september"=>4, "october"=>6, "november"=>2, "december"=>4);

            $day_values = array("sunday" => 0, "monday" => 1, "tuesday" => 2, "wednesday" => 3, "thursday" => 4, "friday" => 5, "saturday" => 6);

            $leap_year_array = array("12" => 1, "24" => 2, "36" => 3, "48" => 4, "60" => 5, "72" => 6, "84" => 7, "96" => 8);

            if ((($input_year % 4 == 0) && ($input_year % 100 != 0)) || ($input_year % 400 == 0))
            {
                $day_values = array("sunday" => 1, "monday" => 2, "tuesday" => 3, "wednesday" => 4, "thursday" => 5, "friday" => 6, "saturday" => 7, "saturday" => 0);

                $remainder = 0;
                foreach($month_array as $key => $value)
                {
                    if($lower_case_month == $key)
                    {

                        $month_value = $value;
                        // var_dump($month_value);
                    }
                }
                // $leap_year_remainder = $leap_year % 12;
                foreach($leap_year_array as $key => $value){
                    if($leap_year == $key){
                        $leap_year_remainder = $value;
                        var_dump($leap_year_remainder);
                    }

                }
                if($leap_year_remainder > 6 && $leap_year_remainder != 0){
                    $leap_year_remainder = $leap_year_remainder % 7;
                }

                $day_of_week = $month_value + $input_day + $leap_year_remainder;
                // var_dump($day_of_week);

                if ($day_of_week > 6)
                {
                    $remainder = $day_of_week % 7;
                    // var_dump($remainder);
                    // if($input_day == 29){
                    //     $remainder = $remainder + 6;
                    // }

                    // $remainder = $remainder + 2;
                    // var_dump($remainder);
                    foreach($day_values as $key => $value)
                    {
                        if( $remainder == $value ){
                            $resulting_day = $key;
                            return $resulting_day;
                        }
                    }
                } else {
                    foreach($day_values as $key => $value)
                    {
                        if( $day_of_week == $value ){
                            $resulting_day = $key;
                            return $resulting_day;
                        }
                    }
                }
            } else {
                foreach($month_array as $key => $value)
                {
                    if($lower_case_month == $key)
                    {
                        $month_value = $value;
                    }
                }
                // var_dump($year_number_last);
                $day_of_week = $month_value + $input_day + $year_number_last;

                if ($day_of_week > 6)
                {
                    $remainder = $day_of_week % 7;
                    foreach($day_values as $key => $value)
                    {
                        if( $remainder == $value ){
                            $resulting_day = $key;
                            return $resulting_day;
                        }
                    }
                } else {
                    foreach($day_values as $key => $value)
                    {
                        if( $day_of_week == $value ){
                            $resulting_day = $key;
                            return $resulting_day;
                        }
                    }
                }
            }

        }
    }


?>
