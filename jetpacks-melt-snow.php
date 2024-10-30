<?php
/*
Plugin Name: Jetpacks Melt Snow
Plugin URI: http://github.com/blobaugh/jetpacks-melt-snow
Description: Disables uneccessary easter egg modules in Jetpack, notably Holiday Snow 
Author: Ben Lobaugh
Version: 0.6.2
Author URI: http://ben.lobaugh.net
*/


add_filter( 'jetpack_is_holiday_snow_season', 'jetpacks_melt_snow' );

function jetpacks_melt_snow() {
    return false;
}
