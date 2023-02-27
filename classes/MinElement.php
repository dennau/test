<?php

namespace classes;

class MinElement
{
    /**
     * @param array $dataset
     */
    public function __construct(protected array $dataset)
    {
        sort($this->dataset);
    }

    /**
     * @param int $argument
     *
     * @return int
     */
    public function foreachWay(int $argument): int
    {
        $min = -1;

        foreach($this->dataset as $item) {
            if ($item > $min && $item < $argument) {
                $min = $item;
            }
        }

        return $min;
    }

    /**
     * @param int $argument
     *
     * @return int
     */
    public function halfDivisionWay(int $argument): int
    {
        $data = $this->dataset;

        if(min($data) > $argument) {
            return -1;
        }

        do {
            $data = $this->getHalf($data, $argument);
        } while(count($data) > 1);

        return $data[0] < $argument ? $data[0] : -1;
    }

    /**
     * @param array $dataset
     * @param int   $argument
     *
     * @return array
     */
    protected function getHalf(array $dataset, int $argument): array
    {
        $biggerHalf = array_slice($dataset, floor(count($dataset)/2));
        $smallerHalf = array_slice($dataset, 0, ceil(count($dataset)/2));
        return min($biggerHalf) >= $argument ? $smallerHalf : $biggerHalf;
    }
}