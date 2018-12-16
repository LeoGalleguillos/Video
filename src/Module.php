<?php
namespace LeoGalleguillos\Video;

use LeoGalleguillos\Video\Model\Factory as VideoFactory;
use LeoGalleguillos\Video\Model\Service as VideoService;
use LeoGalleguillos\Video\Model\Table as VideoTable;
use LeoGalleguillos\Video\View\Helper as VideoHelper;

class Module
{
    public function getConfig()
    {
        return [
            'view_helpers' => [
                'aliases' => [
                ],
                'factories' => [
                ],
            ],
        ];
    }

    public function getServiceConfig()
    {
        return [
            'factories' => [
                VideoService\DurationMilliseconds::class => function ($sm) {
                    return new VideoService\DurationMilliseconds();
                },
            ],
        ];
    }
}
