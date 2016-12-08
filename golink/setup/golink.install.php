<?php

/**
 * golink plugin
 *
 * @author Roffun
 * @copyright Copyright (c) 2015 - today: Roffun | https://webcot.net/cotonti/extensions/golink-plugin
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL');

global $db_pages;

require_once cot_incfile('page', 'module');
require_once cot_incfile('extrafields');

cot_extrafield_add($db_pages, 'OPENLINKSONPAGE', 'select', $R['input_selectbox'], 'modal_timer,modal,redirect,nofollow,open', 'redirect', '', '', '', '');
