<?php

    class RepeatCounter
    {





    // General Methods
        function countRepeats($user_word, $user_phrase)
        {
            $strip_punctuation = array(".", "!", "?", ",", ":", ";");
            $filter_word = strtolower($user_word);
            $filter_phrase = strtolower($user_phrase);
            $filter_phrase = str_replace($strip_punctuation, "", $filter_phrase);
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
