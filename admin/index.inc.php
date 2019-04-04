<?php
/**
 * CubeCart v6
 * ========================================
 * CubeCart is a registered trade mark of CubeCart Limited
 * Copyright CubeCart Limited 2014. All rights reserved.
 * UK Private Limited Company No. 5323904
 * ========================================
 * Web:   http://www.cubecart.com
 * Email:  sales@cubecart.com
 * License:  GPL-3.0 http://opensource.org/licenses/GPL-3.0
 */
$_POST['zones']    = array();
$_POST['zones'][0] = "036";
if ( empty( $_POST['testURL'] ) ) {
    $_POST['testURL'] = 'https://cart.shophumm.com.au/Checkout?platform=Default';
}
if ( empty( $_POST['liveURL'] ) ) {
    $_POST['liveURL'] = 'https://integration-cart.shophumm.com.au/Checkout?platform=Default';
}
if ( ! defined( 'CC_INI_SET' ) ) {
    die( 'Access Denied' );
}
$module       = new Module( __FILE__, $_GET['module'], 'admin/index.tpl', true );
$page_content = $module->display();