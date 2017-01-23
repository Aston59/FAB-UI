<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/utilities.php';

/** LOAD DB */
$db = new Database();
/** GET ALL RUNNING TASKS */
$_tasks = $db->query('select * from sys_tasks where status="running"');
/** CLOSE DB CONNECTION */
$_tasks_number = $db->get_num_rows();
$db->close();


if($_tasks_number == 0){
?>    
<!-- NOTHING TO SHOW -->
<div class="alert alert-transparent">
	<h4 class="text-center">No tasks available</h4>
</div>
<?php    
}else{
?>
<ul class="notification-body">
	
	
    <?php foreach($_tasks as $_task): ?>
    <?php 
        $_task_attributes = json_decode($_task['attributes'], TRUE);
        
        switch($_task['controller']){
            
            case 'make':
            	switch($_task['type']){
            		case 'print':
		                $_icon    = 'icon-fab-print';
		                $_monitor = json_decode(file_get_contents(TEMP_PATH.'task_monitor.json'), TRUE);
		                $_percent = $_monitor['print']['stats']['percent'];
						$_detail  = site_url($_task['controller'].'/'.$_task['type']);
		                break;
	                case 'mill':
	                	$_icon    = 'icon-fab-print';
	                	$_monitor = json_decode(file_get_contents(TEMP_PATH.'task_monitor.json'), TRUE);
	                	$_percent = $_monitor['print']['stats']['percent'];
	                	$_detail  = site_url($_task['controller'].'/'.$_task['type']);
	                	break;
            	
		            case 'scan':
		                $_icon = 'icon-fab-scan';
						$_monitor = json_decode(file_get_contents($_task_attributes['folder'].$_task_attributes['scan_monitor']), TRUE);
						$_percent = $_monitor['scan']['stats']['percent'];
						$_detail  = site_url($_task['controller'].'/'.$_task['type']);
		                break;
		            
		            case 'laser':
		            	$_icon = 'icon-communication-143';
		            	$_monitor = json_decode(file_get_contents(TEMP_PATH.'task_monitor.json'), TRUE);
		            	
		            	
		            	$_percent = $_monitor['print']['stats']['percent'];
		            	$_detail  = site_url($_task['controller'].'/'.$_task['type']);
		            	break;
		                
            	}
            	break;
            case 'objectmanager':
                $_icon    = 'icon-fab-manager';
                $_monitor = json_decode(file_get_contents($_task_attributes['monitor']), TRUE);				
                $_percent  = $_monitor['slicing']['stats']['percent'];
				$_detail  = site_url($_task['controller'].'/prepare/stl/'.$_task_attributes['id_object'].'/'.$_task_attributes['id_file']);
                break;
            case 'settings':
                $_icon    = 'fa fa-cogs';
				$_detail  = site_url($_task['controller']);
                break;
            default:
            	$_detail  = site_url($_task['controller']);
        }
    ?>
	<li>
		<span>
			<div class="bar-holder no-padding">
				<p class="margin-bottom-5"><i class="<?php echo $_icon; ?>"></i> <strong><?php echo ucfirst($_task['controller']) ?></strong> - <strong><?php echo ucfirst($_task['type']) ?></strong> 
					<?php if(isset($_percent)):?>
					<span class="pull-right semi-bold text-muted"><?php echo number_format($_percent , 2, ',', ''); ?> %</span>
					<?php endif; ?>
				</p>
				<?php if(isset($_percent)):?>
				<div class="progress progress-md progress-striped">
					<div class="progress-bar bg-color-teal"  style="width: <?php echo number_format($_percent, 2, '.', ''); ?>%;"></div>
				</div>
				<?php endif; ?>
				<em class="note no-margin">last updated on <?php echo date("d/m/Y G:i:s") ?></em>
                <em class="note no-margin pull-right"><a href="<?php echo $_detail; ?>">Detail</a></em>
			</div>
		</span>
	</li>
    <?php endforeach; ?>
</ul>
<?php
}
?>