<?php

    class RepeatCounter
    {

        function countRepeats($input1, $input2)
        {
            $result_array = [];
            $input1_lower = strtolower($input1);
            $input2_lower = strtolower($input2);
            $input2_word_array = explode(" ", $input2_lower);

            foreach ($input2_word_array as $word)
            {
                if ($word == $input1_lower) {
                    array_push($result_array, $word);
                }
            }
            $final_count = count($result_array);
            return $final_count;
        }
    }
?>
