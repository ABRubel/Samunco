<?php

use Intervention\Image\Facades\Image;

function fileUpload($file, $path, $type, $height, $weight)
{
    $filename  = $type . '_' . time() . '.' . $file->getClientOriginalExtension();
    $directory = public_path($path);
    if (!File::exists($directory)) {
        File::makeDirectory($directory, $mode = 0777, true, true);
    }
    $location  = public_path($path . $filename);
    if (file_exists($location)) {
        unlink($location);
    }
    if (!is_null($height) && !is_null($weight)) {
        Image::make($file)->resize($height, $weight)->save($location);
    } else {
        Image::make($file)->save($location);
    }
    return $filename;
}
