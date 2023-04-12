<?php

declare(strict_types=1);

use content\modules\convert_to_seconds\ConvertToSeconds;
use content\modules\convert_to_seconds\TimeUnit;
use PHPUnit\Framework\TestCase;

class ConvertToSecondsTest extends TestCase
{
    public function testSeconds() {
        $this->assertEquals(
            1,
            ConvertToSeconds::convertToSeconds(1, TimeUnit::SECONDS)
        );
    }

    public function testMinutes() {
        $this->assertEquals(
            60,
            ConvertToSeconds::convertToSeconds(1, TimeUnit::MINUTES)
        );
    }

    public function testHours() {
        $this->assertEquals(
            3600,
            ConvertToSeconds::convertToSeconds(1, TimeUnit::HOURS)
        );
    }

    public function testDays() {
        $this->assertEquals(
            86400,
            ConvertToSeconds::convertToSeconds(1, TimeUnit::DAYS)
        );
    }

    public function testWeeks() {
        $this->assertEquals(
            604800,
            ConvertToSeconds::convertToSeconds(1, TimeUnit::WEEKS)
        );
    }

    public function testMonths() {
        $this->assertEquals(
            2592000,
            ConvertToSeconds::convertToSeconds(1, TimeUnit::MONTHS)
        );
    }

    public function testYears() {
        $this->assertEquals(
            31536000,
            ConvertToSeconds::convertToSeconds(1, TimeUnit::YEARS)
        );
    }

    public function testDecades() {
        $this->assertEquals(
            315360000,
            ConvertToSeconds::convertToSeconds(1, TimeUnit::DECADES)
        );
    }
}
