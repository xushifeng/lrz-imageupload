<?php
/**
 * Created by PhpStorm.
 * User: Xu
 * Date: 2017/11/15
 * Time: 10:15
 */
function decodeFile($base64_url)
{
    preg_match('/^data:image\/(\w+);base64/', $base64_url, $out);

    $type       = $out[1];
    $type_param = 'data:image/' . $type . ';base64,';
    $fileStream = str_replace($type_param, '', $base64_url);
    $fileStream = base64_decode($fileStream);

    return array(
        'type'       => $type,
        'fileStream' => $fileStream
    );

}

