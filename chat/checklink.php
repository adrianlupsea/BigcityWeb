<?php

/*function checklink(){
                $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
                $text = "The text you want to filter goes here. http://google.com";
                $url='a';
                    if(preg_match($reg_exUrl, $text, $url)) {
                        echo preg_replace($reg_exUrl, "<a href="$url.">"$url"</a> ", $text);
                                                            }
                        else {
                            echo $text;
                                }
                    }*/

$link = "The text you want to filter goes here. http://google.com";
$link = preg_replace("/(http:\/\/[^\s]+)/", "<a href=\"$1\">$1</a>", $link);

echo $link; 