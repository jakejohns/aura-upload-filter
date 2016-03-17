<?php

namespace Aura\Filter\Rule\Validate\Upload;

abstract class AbstractSize extends AbstractUpload
{

    public function parseHumanSize($size)
    {
        $number = substr($size, 0, -2);

        switch(strtoupper(substr($size, -2))){
        case "KB":
            return $number * 1024;
        case "MB":
            return $number * pow(1024, 2);
        case "GB":
            return $number * pow(1024, 3);
        case "TB":
            return $number * pow(1024, 4);
        case "PB":
            return $number * pow(1024, 5);
        default:
            return $size;
        }
    }
}

