<?php
namespace LeoGalleguillos\VideoTest\Model\Service;

use LeoGalleguillos\Video\Model\Service as VideoService;
use PHPUnit\Framework\TestCase;

class DurationMillisecondsTest extends TestCase
{
    protected function setUp()
    {
        $this->durationMillisecondsService = new VideoService\DurationMilliseconds();
    }

    public function testInitialize()
    {
        $this->assertInstanceOf(
            VideoService\DurationMilliseconds::class,
            $this->durationMillisecondsService
        );
    }

    public function testGetDurationMilliseconds()
    {
        $durationMilliseconds = $this->durationMillisecondsService->getDurationMilliseconds(
            '/home/amazon/products/videos/B07DNXHMNR.mp4'
        );

        $this->assertSame(
            82512,
            $durationMilliseconds
        );
    }
}
