<?php

namespace SplApp\Tests\Integration;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class CheckIntegrationTest extends KernelTestCase
{
    public function testSomething(): void
    {
        self::bootKernel();

        $kernel = self::getKernelClass();

        self::assertEquals("SplApp\Kernel", $kernel);
    }
}