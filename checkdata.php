<?php
	header('Content-Type: application/json');
	require_once('config.php');
	require_once('lib/lti.php');
	require_once('lib/grade.php');
	$lti = new Lti($config,true);
	if(isset($config['use_db']) && $config['use_db']) {
		require_once('lib/db.php');
		Db::config( 'driver',   'mysql' );
		Db::config( 'host',     $config['db']['hostname'] );
		Db::config( 'database', $config['db']['dbname'] );
		Db::config( 'user',     $config['db']['username'] );
		Db::config( 'password', $config['db']['password'] );
	}
	$vars = array('user_id'=>$_POST['user_id'],'oauth_consumer_key'=>$_POST['lti_id'], 'lis_outcome_service_url'=>$_POST['lis_outcome_service_url'], 'lis_result_sourcedid'=>$_POST['lis_result_sourcedid']);
	$lti->setltivars($vars);
	require_once('model.php');
	
	require_once('quiz.php');
	$data = array();
	$answers = getAllAnswers();
	$numberCorrect = 0;
	
	//echo 'AAA';
	//echo json_encode($answers);
	//echo json_encode($results);
	//echo json_encode($questions);
	
	foreach($answers as $key=>$answer) {
		if(array_key_exists($key, $results) && array_key_exists($key, $questions)) {
			if($questions[$key]['type'] == 'normal') {
				//echo 'normal';
				$data[$key] = 'incorrect';
				if(in_array(strtolower($answer), array_map('strtolower',$results[$key]))) {
					$data[$key] = 'correct';
					$numberCorrect++;
				}				
			}
			if($questions[$key]['type'] == 'combine' && empty($data[$key])) {				
				//echo 'combined ' . $key;								
				$combined_answers = array();
				foreach($questions[$key]['combined_question'] as $ckey) {
					//echo 'key ' . $ckey;
					$canswer = strtolower($answers[$ckey]);
					if(in_array($canswer, $combined_answers)) {
						$data[$ckey] = 'incorrect';						
					}
					else {
						if(in_array($canswer, array_map('strtolower', $results[$ckey]))) {
							$data[$ckey] = 'correct';
							$numberCorrect++;
							array_push($combined_answers, $canswer);
						}
						else {
							$data[$ckey] = 'incorrect';
						}
					}
					//echo 'Data';
					//echo json_encode($data);
				}
			}
		}
	}
	echo json_encode($data);
	$grade = $numberCorrect/40;
	//$gradeResponse;
	if($lti->grade_url() != 'No Grade URL'){
	
		send_grade($grade,$lti);
	}
	die();	
?>