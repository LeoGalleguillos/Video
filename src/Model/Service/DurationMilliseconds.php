<?php
namespace LeoGalleguillos\Video\Model\Service;

use Exception;

class DurationMilliseconds
{
    public function getDurationMilliseconds(string $videoPath): int
    {
        $pattern = '|^/home/amazon/products/videos/\w+\.mp4$|';
        if (!preg_match($pattern, $videoPath)) {
            throw new Exception('Invalid video path (this should never happen)');
        }

        $command = "ffprobe -v error -show_entries format=duration -of default=noprint_wrappers=1:nokey=1 $videoPath";

        $seconds = (float) exec($command);

        return $seconds * 1000;
    }
}
