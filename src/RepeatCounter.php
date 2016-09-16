<?php

    class RepeatCounter
    {
    //Properties
        private $word;
        private $phrase;
        private $count;

    //Constructor
        function __construct($user_word, $user_phrase, $count = 0)
        {
            $this->word = $user_word;
            $this->phrase = $user_phrase;
            $this->count = $count;
        }

    //Getter and Setter
        function setWord($new_word)
        {
            $this->word = $new_word;
        }

        function getWord()
        {
            return $this->word;
        }

        function setPhrase($new_phrase)
        {
            $this->phrase = $new_phrase;
        }

        function getPhrase()
        {
            return $this->phrase;
        }

        function setCount($new_count)
        {
            $this->count = $new_count;
        }

        function getCount()
        {
            return $this->count;
        }


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
        } // End of countRepeats Function

        function save()
        {
            array_push($_SESSION['list_of_phrases'], $this);
        }

    //Static Methods
        static function getAll()
        {
            return $_SESSION['list_of_phrases'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_phrases'] = array();
        }

    } // End of Repeat Counter Class
?>
