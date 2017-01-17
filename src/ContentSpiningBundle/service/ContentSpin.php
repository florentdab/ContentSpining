<?php
/**
 * Created by PhpStorm.
 * User: apprenti
 * Date: 17/01/17
 * Time: 09:46
 */

namespace ContentSpiningBundle;


class ContentSpin
{
function spinnage($text){
    if(!preg_match('/{/si', $text)) {
        return $text;
    }
    else {
        preg_match_all('/\{([^{}]*)\}/si', $text, $matches);
        $occur = count($matches[1]);
        for ($i=0; $i<$occur; $i++)
        {
            $word_spinning = explode("|",$matches[1][$i]);
            shuffle($word_spinning);
            $text = str_replace($matches[0][$i], $word_spinning[0], $text);
        }
        return  $this->content_spin.test($text);
    }
}
//echo spinnage($text);


}