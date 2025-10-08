<?php

namespace Elodie\Tp5;

use PHPUnit\Framework\TestCase;

class AlarmeTest extends TestCase
{
    public function testMessageCorrect() {
        $alarme = new Alarme();

        $messageTropCourt = "abcd";
        $messageCourtMaisCorrect = "abcde";
        $messageTropLong = "abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz";  // 52 caracteres
        $messageLongMaisCorrect = "abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxy";  // 51 caracteres
        $messageVide = "";

        $alarme->setMessage($messageTropCourt);
        self::assertNotEquals($messageTropCourt, $alarme->getMessage());
        self::assertEquals($messageVide, $alarme->getMessage());

        $alarme->setMessage($messageTropLong);
        self::assertNotEquals($messageTropLong, $alarme->getMessage());
        self::assertEquals($messageVide, $alarme->getMessage());

        $alarme->setMessage($messageCourtMaisCorrect);
        self::assertEquals($messageCourtMaisCorrect, $alarme->getMessage());

        $alarme->setMessage($messageLongMaisCorrect);
        self::assertEquals($messageLongMaisCorrect, $alarme->getMessage());

    }
}
