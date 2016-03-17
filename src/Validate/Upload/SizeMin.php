<?php

namespace Aura\Filter\Rule\Validate\Upload;

class SizeMin extends SizeAbstract
{

    public function __invoke($subject, $field, $min)
    {
        $file = $subject->$field;

        if (! $this->isUploadedFile($file)) {
            return true;
        }

        $size = $file->getSize();

        return $size > $this->parseHumanSize($min);
    }
}

