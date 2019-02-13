<?php
namespace LeoGalleguillos\Video\View\Helper;

use LeoGalleguillos\Question\Model\Entity as VideoEntity;
use Zend\View\Helper\AbstractHelper;

class SchemaOrgArray extends AbstractHelper
{
    public function __invoke(VideoEntity\Video $videoEntity): array
    {
        return [];
    }
}
