<?php

namespace Aura\Filter\Rule\Validate\Upload;

use Psr\Http\Message\UploadedFileInterface;

abstract class AbstractUpload
{
    public function isUploadedFile($file)
    {
        return ($file instanceof UploadedFileInterface);
    }
}
