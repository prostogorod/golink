<?php

/**
 * golink plugin
 *
 * @author Roffun
 * @copyright Copyright (c) 2015 - today: Roffun | https://github.com/Roffun
 * @license BSD
 */
defined('COT_CODE') or die('Wrong URL');

require_once cot_incfile('page', 'module');

global $db_pages;

cot_extrafield_remove($db_pages, 'OPENLINKSONPAGE');
