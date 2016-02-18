<?php
    class Weekday{

        function findDay($input_month, $input_day, $input_year)
        {
            $lower_case_month = strtolower($input_month);
            $year_number = str_split($input_year);
            $year_number = $year_number[3];
            $month_value = 0;
            $final_day = 0;

            $month_array = array("january"=> 6, "february"=>2, "march"=>2, "april"=>5, "may"=>0, "june"=>3, "july"=>5, "august"=>1, "september"=>4, "october"=>6, "november"=>2, "december"=>4);

            $day_values = array("sunday" => 0, "monday" => 1, "tuesday" => 2, "wednesday" => 3, "thursday" => 4, "friday" => 5, "saturday" => 6);

            foreach($month_array as $key => $value)
            {
                if($lower_case_month == $key)
                {
                    $month_value = $value;
                }
            }
            $day_of_week = $month_value + $input_day + $year_number;

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
            // return $day_of_week;


        }
    }


?>
