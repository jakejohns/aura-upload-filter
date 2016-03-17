<?php

namespace Aura\Filter\Rule\Validate\Upload;

class Required extends AbstractUpload
{
    public function __invoke($subject, $field)
    {
        $file = $subject->$field;
        return $this->isUploadedFile($file);
    }
}
