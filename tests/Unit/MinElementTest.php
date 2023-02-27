<?php

namespace Unit;

use classes\MinElement;
use PHPUnit\Framework\TestCase;

class MinElementTest extends TestCase
{
    /** @var int[] */
    protected const DATASET = [3, 4, 6, 9, 10, 12, 14, 15, 17, 19, 21];

    /**
     * @param int $argument
     * @param int $expected
     *
     * @dataProvider testData
     */
    public function testHalfDivisionWay(int $argument, int $expected): void
    {
        $this->assertEquals(
            $expected,
            (new  MinElement(self::DATASET))
                ->halfDivisionWay($argument)
        );
    }

    /**
     * @param int $argument
     * @param int $expected
     *
     * @dataProvider testData
     */
    public function testForeachWay(int $argument, int $expected): void
    {
        $this->assertEquals(
            $expected,
            (new  MinElement(self::DATASET))
                ->foreachWay($argument)
        );
    }

    /**
     * @return int[][]
     */
    protected function testData(): array
    {
        return [
            0 => [10, 9],
            1 => [14, 12],
            2 => [-10, -1],
            3 => [3, -1],
            4 => [4, 3],
            5 => [21, 19],
            6 => [100, 21],
            7 => [18, 17],
        ];
    }
}
