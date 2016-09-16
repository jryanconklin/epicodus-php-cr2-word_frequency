<?php
    require_once __DIR__.'/../src/RepeatCounter.php';

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_countRepeats_spec1_oneMatch()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word_input = 'Saturday';
            $phrase_input = 'Saturday Looks Good To Me';
            //Act
            $result = $test_RepeatCounter->countRepeats($word_input, $phrase_input);
            //Assert
            $this->assertEquals(1, $result);
        }

        function test_countRepeats_spec2_multiMatch()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word_input = 'Saturday';
            $phrase_input = 'Saturday Looks Good To Me Saturday';
            //Act
            $result = $test_RepeatCounter->countRepeats($word_input, $phrase_input);
            //Assert
            $this->assertEquals(2, $result);
        }

        function test_countRepeats_spec3_lowerWordInput()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word_input = 'saturday';
            $phrase_input = 'Saturday is great!';
            //Act
            $result = $test_RepeatCounter->countRepeats($word_input, $phrase_input);
            //Assert
            $this->assertEquals(1, $result);
        }

        function test_countRepeats_spec4_wordCaps()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word_input = 'Saturday';
            $phrase_input = 'Would you like to hangout saturday the 11th? Saturday looks good to me!';
            //Act
            $result = $test_RepeatCounter->countRepeats($word_input, $phrase_input);
            //Assert
            $this->assertEquals(2, $result);
        }

        function test_countRepeats_spec5_allCaps()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word_input = 'Saturday';
            $phrase_input = 'The SATURDAY is the best Saturday';
            //Act
            $result = $test_RepeatCounter->countRepeats($word_input, $phrase_input);
            //Assert
            $this->assertEquals(2, $result);
        }

        function test_countRepeats_spec6_mixedCase()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word_input = 'SaTURDay';
            $phrase_input = 'Saturday is this SATURDAY or is it?';
            //Act
            $result = $test_RepeatCounter->countRepeats($word_input, $phrase_input);
            //Assert
            $this->assertEquals(2, $result);
        }

        function test_countRepeats_spec7_numbers()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word_input = '11';
            $phrase_input = "Saturday at 11 Looks Good to Me. I'll be 11 years old!";
            //Act
            $result = $test_RepeatCounter->countRepeats($word_input, $phrase_input);
            //Assert
            $this->assertEquals(2, $result);
        }



    }

?>
