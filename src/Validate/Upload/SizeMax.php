<?php

namespace Aura\Filter\Rule\Validate\Upload;

class SizeMax extends SizeAbstract
{
    public function __invoke($subject, $field, $max)
    {
        $file = $subject->$field;

        if (! $this->isUploadedFile($file)) {
            return true;
        }

        $size = $file->getSize();

        return $size < $this->parseHumanSize($max);
    }
}

