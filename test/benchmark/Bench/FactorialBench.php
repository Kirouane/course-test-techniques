<?php
namespace Test;
class FactorialBench
{
    /**
     * @Revs(100)
     * @Iterations(10)
     */
    public function benchCompute()
    {
        Factorial::compute(30);
    }
}