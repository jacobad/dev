<?php

function saveTask(array $taskData)
{
	$file = fopen('tab.csv', 'a');
    
    fputcsv($file, $taskData);
    
    fclose($file);
    
}

function loadTasks()
{
	$file = fopen('tab.csv', 'a+');
		
	$tasks = array();
    
    while(true)
	{

		$taskData = fgetcsv($file);
        
		if($taskData == false)
		{
			break;
		}
		array_push($tasks, $taskData);
	}
    
    fclose($file);

	return $tasks;

}

function saveTasks(array $tasks)
{
	$file = fopen('tab.csv', 'w');
    
    foreach($tasks as $taskData)
	{
    	fputcsv($file, $taskData);
    }
    
    fclose($file);

}


?>