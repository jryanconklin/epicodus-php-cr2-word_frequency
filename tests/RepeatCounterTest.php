<?php
    require_once __DIR__.'/../src/RepeatCounter.php';

    class RepeatCounter extends PHPUnit_Framework_TestCase
    {

        function test_countRepeats_oneMatch
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word_input = 'Saturday';
            $phrase_input = 'Saturday Looks Good To Me';
            //Act
            $result = $test_RepeatCounter->countRepeats($word_input, $phrase_input);
            //Assert
            $this->assertEquals(1, $result)
        }



    }

?>
