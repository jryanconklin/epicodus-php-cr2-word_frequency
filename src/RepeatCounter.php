<?php

    class RepeatCounter
    {





    // General Methods
        function countRepeats($user_word, $user_phrase)
        {
            $filter_word = $user_word;
            $filter_phrase = $user_phrase;
            $filter_phrase_array = explode(' ', $filter_phrase);
            $count = 0;

            foreach($filter_phrase_array as $word) {
                if ($word == $filter_word) {
                    $count++;
                }
            }
            return $count;



        }

    }

?>
