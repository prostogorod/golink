<?php

/**
 * golink plugin
 *
 * @author  WebRomen
 * @copyright Copyright (C) 2015 - today: WebRomen | https://github.com/WebRomen/golink
 * @license BSD
 */
defined('COT_CODE') or die('Wrong URL');

require_once cot_incfile('page', 'module');

global $db_pages;

cot_extrafield_remove($db_pages, 'OPENLINKSONPAGE');
