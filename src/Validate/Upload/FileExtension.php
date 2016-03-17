<?php

namespace Aura\Filter\Rule\Validate\Upload;

class FileExtension extends AbstractUpload
{
    public function __invoke($subject, $field, $exts)
    {
        $file = $subject->$field;

        if (! $this->isUploadedFile($file)) {
            return true;
        }

        $filename = $file->getClientFilename();
        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        return in_array($ext, array_map('strtolower', (array) $exts));
    }
}
