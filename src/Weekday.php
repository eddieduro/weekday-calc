<?php
    class Weekday{

        function findDay($input_month)
        {
            $lower_case_month = strtolower($input_month);

            $month_array = array("january"=> 6, "february"=>2, "march"=>2, "april"=>5, "may"=>0, "june"=>3, "july"=>5, "august"=>1, "september"=>4, "october"=>6, "november"=>2, "december"=>4);

            foreach($month_array as $key => $value)
            {
                if($lower_case_month == $key)
                {
                    return $value;
                }
            }
        }
    }


?>
