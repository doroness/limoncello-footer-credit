<?php 
/**
 * Plugin Name: Limoncello Footer Credit
 * Plugin URI: http://limoncello.design/
 * Description: Adds credits to site footer
 * Version: 1.0.0
 * Author: Doron Nissim Eliav
 * Author URI: http://limoncello.design/
 * License:  GPL2
 */
 
/*  Copyright YEAR  Doron Nissim Eliav  (email : doron@limoncello.design)
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
**/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Lmnc_Footer_Credit {
    public function __construct() {
        $this->add_hooks();
    }
    public function add_hooks() {
        add_action('wp_footer',[$this,'add_footer_credit'], 9999);
    }
    public function add_footer_credit () {
        echo <<<EOT
        <div style="background-color: #000; text-align: center;" class="lmclo-footer-credit">
            <a class="lmclo-footer-credit__link" style="display: inline-block; border: none;outline: none;" target="_blank" href="https://limoncello.design/" title="limoncello.design"> 
                <p style="margin: 0;text-align: center;line-height: 1.5;font-size: 12px;padding: 7px 0;color: #fff;" class="lmclo-footer-credit__text">
                    Designed and developed with <span style="max-width:25px">🍋</span> by limoncello.design
                </p>
            </a>
        </div>
        EOT;
    }
}
new Lmnc_Footer_Credit();