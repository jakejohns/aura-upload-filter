<?php

namespace Aura\Filter\Rule\Validate\Upload;

class FileMedia extends AbstractUpload
{

    public function __invoke($subject, $field, $medias)
    {
        $file = $subject->$field;

        if (! $this->isUploadedFile($file)) {
            return true;
        }

        $media = $file->getClientMediaType();
        return in_array($media, $medias);
    }
}
