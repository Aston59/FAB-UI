<?php
$config['fabtotum_network_interfaces']  = '/etc/network/interfaces';
$config['fabtotum_config_folder']    	= '/var/www/fabui/config/';
$config['fabtotum_config_units']     	= '/var/www/fabui/config/config.json';
$config['fabtotum_custom_config_units'] = '/var/www/fabui/config/custom_config.json';
$config['fabtotum_default_eeprom']      = '/var/www/fabui/config/eeprom_default.json';
$config['fabtotum_custom_eeprom']       = '/var/www/fabui/config/eeprom_custon.json';
$config['fabtotum_suggestions_url']  	= 'http://update.fabtotum.com/mail/suggestions.php';
$config['fabtotum_bugs_url']         	= 'http://update.fabtotum.com/mail/bugs.php';
$config['fabtotum_password_url']     	= 'http://update.fabtotum.com/mail/recovery_password.php';
$config['fabtotum_twitter_feed']     	= '/var/www/temp/twitter.json';
$config['fabtotum_instagram_feed']   	= '/var/www/temp/instagram_feed.json';
$config['fabtotum_instagram_hash']   	= '/var/www/temp/instagram_hash.json';
$config['fabtotum_faq']              	= '/var/www/temp/faq.json';
$config['fabtotum_python_path']      	= '/var/www/fabui/python/';
$config['fabtotum_support_url']      	= 'http://support.fabtotum.com/tickets/';
$config['fabtotum_manual_url']       	= 'http://support.fabtotum.com/manual.pdf';
$config['fabtotum_wiki_url']         	= 'http://wiki.fabtotum.com/doku.php';
$config['fabtotum_blog_url']         	= 'http://blog.fabtotum.com/';
$config['fabtotum_forum_url']        	= 'http://forum.fabtotum.com/';
$config['fabtotum_configurations_url'] 	= 'https://github.com/FABtotum/FAB_Configs';
//=================================================================
$config['fabtotum_serial_port']      = '/dev/ttyAMA0';
$config['fabtotum_serial_boud_rate'] = '115200';
//=================================================================

$config['fabui_remote_version_url']  = 'http://update.fabtotum.com/FAB-UI/version.txt';
$config['fabui_remote_download_url'] = 'http://update.fabtotum.com/FAB-UI/download/';
$config['fabui_changelog']           = 'changelog.txt';
$config['myfab_local_version_path']  = '/var/www/fabui/version.txt';
//====================================================================================
$config['fw_remote_version_url']     = 'http://update.fabtotum.com/MARLIN/version.txt';
$config['fw_remote_download_url']    = 'http://update.fabtotum.com/MARLIN/download/';
$config['fw_changelog']              = 'changelog.txt';
$config['marlin_local_version_path'] = '/var/www/marlin/version.txt';


$config['heads_list']= array(
		'hybrid'   => 'Hybrid Head',
		'print_v2' => 'Printing Head V2',
		'mill_v2'  => 'Milling Head V2',
		'laser_v1' => 'Laser Head'
);


$config['heads_pids']= array(
		'hybrid'   => 'M301 P15 I5 D30',
		'print_v2' => 'M301 P20 I3.5 D30',
		'mill_v2'  => '',
		'laser_v1' => '',
);

$config['heads_descriptions']= array(
		'hybrid'   => array('desc'=> 'The <strong>Hybrid head</strong> is the first multipurpose head of the FABtotum Personal Fabricator. It can be used for printing PLA and ABS and reaches up to 230&deg;C.<br>It can mill up to 14000 RPM. The milling chuck supports 1/8" bits.', 'more' => 'https://store.fabtotum.com/eu/hybrid-head-v2-hyb.html'),
		'print_v2' => array('desc'=> 'The <strong>printing Head V2</strong> can print PLA, PETG, ABS, NYLON, HIPS, PC up to 250°C. It features a full metal replaceable nozzle and a 40W heating cartridge for better performances, as well as a secondary cooling fan.<br>The design is clog-proof and the nozzle can be removed and cleaned when necessary.', 'more' => 'http://www.fabtotum.com/3d-printers/heads/3d-printer-extruder/'),
		'mill_v2'  => array('desc'=> 'The <strong>Milling head V2</strong> features a 200W brushless milling motor. It can do 14000 RPM but it is less noisy and more balanced than the Hybrid Head. The Milling Head V2 supports milling bits with a shank diameter in the range of 3.0 to 3.5mm (0.12 inches or 1/8“).<br>The Standard ER8 Collet can be swapped with another compatible to this industry standard so it can be equipped with end-bits with shank diameter from 0.1 to 6mm.', 'more' => 'http://www.fabtotum.com/3d-printers/heads/3d-cnc-milling-head/'),
		'laser_v1' => array('desc'=> 'The <strong>FABtotum Laser head</strong> is equipped with a a Class 3B laser module (up to 500mW),  enough to both engrave and cut, depending on the chosen material (check the material compatibility in the <a href="http://www.fabtotum.com/?p=116429/" target="_blank">Safety & Health guidelines</a>).
<br>The Laser head features a onboard active cooling with temperature control and smoke dispersion (to prevent damages to the optics).
<br>The Laser head also features realtime power tuning, so that you can correct the power of the output on some materials or have different levels of engraving.
It can be used in conjuction with the milling head on projects that require laser marking, engraving and milling as a final operation like PCB prototyping', 'more' => 'http://www.fabtotum.com/3d-printers/heads/3d-laser-printer/'),
);


$config['heads_max_temp'] = array(
		'hybrid'   => 230,
		'print_v2' => 250,
		'mill_v2'  => 0,
		'laser_v1' => 0,
);

$config['heads_fw_id'] = array(
		'hybrid'   => 1,
		'print_v2' => 2,
		'mill_v2'  => 3,
		'laser_v1' => 4,
);

$config['git_releases_json'] = '/var/www/temp/git_releases.json';
$config['git_latest_release_json'] = '/var/www/temp/git_latest_release.json';

$config['printables_files'] = array('.gc', '.gcode', '.nc');
$config['preview_files'] = array('.gc', '.gcode', '.stl');

?>