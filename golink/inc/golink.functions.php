<?php
/**
 * golink plugin
 * 
 * @author  WebRomen
 * @copyright Copyright (C) 2015 - today: WebRomen | https://github.com/WebRomen/golink
 * @license BSD
 */
defined('COT_CODE') or die('Wrong URL.');

require_once cot_langfile('golink', 'plug');

function golink($url, $anchor, $prfx = "rdr")
{
     global $cfg;
     $href = '/?r=golink&amp;' . $prfx . '=' . htmlentities(base64_encode($url));
     return '<a href="' . $href . '" data-link="' . $href . '" rel="nofollow" target="_blank" class="' . $cfg['plugin']['golink']['golink_class'] . '">' . $anchor . '</a>';
}

if ($cfg['jquery'] && $cfg['plugin']['golink']['golink_datahref'])
{
     Resources::embedFooter('$(document).ready(function(){$("a.' . $cfg['plugin']['golink']['golink_class'] .
          '").attr("href","#").click(function(){window.open($(this).data("link"),"_blank");return false;});});');
}
