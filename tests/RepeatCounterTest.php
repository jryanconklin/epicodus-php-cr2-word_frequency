<?php
    require_once __DIR__.'/../src/RepeatCounter.php';

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_countRepeats_spec1_oneMatch()
        {
            //Arrange
            $word_input = 'Saturday';
            $phrase_input = 'Saturday Looks Good To Me';
            $test_RepeatCounter = new RepeatCounter($word_input, $phrase_input);
            //Act
            $result = $test_RepeatCounter->countRepeats($word_input, $phrase_input);
            //Assert
            $this->assertEquals(1, $result);
        }

        function test_countRepeats_spec2_multiMatch()
        {
            //Arrange
            $word_input = 'Saturday';
            $phrase_input = 'Saturday Looks Good To Me Saturday';
            $test_RepeatCounter = new RepeatCounter($word_input, $phrase_input);
            //Act
            $result = $test_RepeatCounter->countRepeats($word_input, $phrase_input);
            //Assert
            $this->assertEquals(2, $result);
        }

        function test_countRepeats_spec3_lowerWordInput()
        {
            //Arrange
            $word_input = 'saturday';
            $phrase_input = 'Saturday is great!';
            $test_RepeatCounter = new RepeatCounter($word_input, $phrase_input);
            //Act
            $result = $test_RepeatCounter->countRepeats($word_input, $phrase_input);
            //Assert
            $this->assertEquals(1, $result);
        }

        function test_countRepeats_spec4_wordCaps()
        {
            //Arrange
            $word_input = 'Saturday';
            $phrase_input = 'Would you like to hangout saturday the 11th? Saturday looks good to me!';
            $test_RepeatCounter = new RepeatCounter($word_input, $phrase_input);
            //Act
            $result = $test_RepeatCounter->countRepeats($word_input, $phrase_input);
            //Assert
            $this->assertEquals(2, $result);
        }

        function test_countRepeats_spec5_allCaps()
        {
            //Arrange
            $word_input = 'Saturday';
            $phrase_input = 'The SATURDAY is the best Saturday';
            $test_RepeatCounter = new RepeatCounter($word_input, $phrase_input);
            //Act
            $result = $test_RepeatCounter->countRepeats($word_input, $phrase_input);
            //Assert
            $this->assertEquals(2, $result);
        }

        function test_countRepeats_spec6_mixedCase()
        {
            //Arrange
            $word_input = 'SaTURDay';
            $phrase_input = 'Saturday is this SATURDAY or is it?';
            $test_RepeatCounter = new RepeatCounter($word_input, $phrase_input);
            //Act
            $result = $test_RepeatCounter->countRepeats($word_input, $phrase_input);
            //Assert
            $this->assertEquals(2, $result);
        }

        function test_countRepeats_spec7_numbers()
        {
            //Arrange
            $word_input = '11';
            $phrase_input = "Saturday at 11 Looks Good to Me. I'll be 11 years old!";
            $test_RepeatCounter = new RepeatCounter($word_input, $phrase_input);
            //Act
            $result = $test_RepeatCounter->countRepeats($word_input, $phrase_input);
            //Assert
            $this->assertEquals(2, $result);
        }

        function test_countRepeats_spec8_numbers()
        {
            //Arrange
            $word_input = 'Saturday';
            $phrase_input = "Saturday! Saturday! Saturday? Does this Saturday work for you? Why yes this Saturday does look good to me! I'll see you Saturday.";
            $test_RepeatCounter = new RepeatCounter($word_input, $phrase_input);
            //Act
            $result = $test_RepeatCounter->countRepeats($word_input, $phrase_input);
            //Assert
            $this->assertEquals(6, $result);
        }


    }

?>
