<?php

    class RepeatCounter
    {





    // General Methods
        function countRepeats($user_word, $user_phrase)
        {
            $strip_punctuation = array(".", "!", "?", ",", ":", ";");
            $filter_word = filter_var($user_word, FILTER_SANITIZE_STRING);
            $filter_word = strtolower($filter_word);
            $filter_phrase = filter_var($user_phrase, FILTER_SANITIZE_STRING);
            $filter_phrase = strtolower($filter_phrase);
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
