<?php
$finished = false;
$answers = getAllAnswers();
function getInput($qid,$width) {
	global $answers;
	global $finished;
	$answer = "";
	if(array_key_exists($qid, $answers)) {
		$answer = $answers[$qid];
		if($answer != '') {
			$finished = true;
		}
	}
	if($width == 'line'){
		return '<input type="text" name="'.$qid.'" id="'.$qid.'" class="answersInputField" value="'.$answer.'" answerShown="false"/>';
	}else if($width == '')
	return '<input maxlength="5" size="5" type="text" name="'.$qid.'" id="'.$qid.'" class="answersInputField" value="'.$answer.'"  answerShown="false"/>';
	
	switch ($width) {
    case 'line':
        return '<input type="text" name="'.$qid.'" id="'.$qid.'" class="answersInputField" value="'.$answer.'" answerShown="false"/>';
    case 'bool':
        return '<input maxlength="9" size="9" type="text" name="'.$qid.'" id="'.$qid.'" class="answersInputField" value="'.$answer.'" answerShown="false"/>';
    default:
        return '<input type="text" name="'.$qid.'" id="'.$qid.'" class="answersInputField" value="'.$answer.'" answerShown="false"/>';
	
	}
	
}
$quiz = array(
	
	array(
		'content'=>'
			<img src="pages/start.jpeg" width="100%" alt="IELTSx Reading Practice Test start page with instructions"></img>			
			
		'	
	),
	array(
		'content'=>'
			
			
			<img src="pages/page1.jpeg" width="100%" alt="IELTSx Reading Practice Test Page 1 (Please Download PDF using the link above if you have trouble loading this image)"></img>	
			
					
		'
	),
	array(
		'content'=>'
			
			
			<img src="pages/page2.jpeg" width="100%" alt="IELTSx Reading Practice Test Page 2 (Please Download PDF using the link above if you have trouble loading this image)"></img>	
			
					
		'
		
	),
	array(
		
		'content'=>'
			
			
			<img src="pages/page3.jpeg" width="100%" alt="IELTSx Reading Practice Test Page 3 (Please Download PDF using the link above if you have trouble loading this image)"></img>	
			
					
		'
	),
	array(
		'content'=>'
			
			
			<img src="pages/page4.jpeg" width="100%" alt="IELTSx Reading Practice Test Page 4 (Please Download PDF using the link above if you have trouble loading this image)"></img>	
			
					
		'
		
	),
	array(
		
		'content' =>'
			
			
			<img src="pages/page5.jpeg" width="100%" alt="IELTSx Reading Practice Test Page 5 (Please Download PDF using the link above if you have trouble loading this image)"></img>	
			
					
		'
		
		
	),
	array (
		'content'=>'
			
			
			<img src="pages/page6.jpeg" width="100%" alt="IELTSx Reading Practice Test Page 6 (Please Download PDF using the link above if you have trouble loading this image)"></img>	
			
					
		'
		
	),
	array (
		'content'=>'
			
			
			<img src="pages/page7.jpeg" width="100%" alt="IELTSx Reading Practice Test Page 7 (Please Download PDF using the link above if you have trouble loading this image)"></img>	
			
					
		'
		
	),
	array (
		'content'=>'
			
			
			<img src="pages/page8.jpeg" width="100%" alt="IELTSx Reading Practice Test Page 8 (Please Download PDF using the link above if you have trouble loading this image)"></img>	
			
					
		'
		
	),
	array (
		'content'=>'
			
			
			<img src="pages/page9.jpeg" width="100%" alt="IELTSx Reading Practice Test Page 9 (Please Download PDF using the link above if you have trouble loading this image)"></img>	
			
					
		'
		
	),
	array (
		'content'=>'
			
			
			<img src="pages/page10.jpeg" width="100%" alt="IELTSx Reading Practice Test Page 10 (Please Download PDF using the link above if you have trouble loading this image)"></img>	
			
					
		'
		
	),
	array (
		'content'=>'
			
			
			<img src="pages/page11.jpeg" width="100%" alt="IELTSx Reading Practice Test Page 11 (Please Download PDF using the link above if you have trouble loading this image)"></img>	
			
					
		'
		
	),
	array (
		'content'=>'
			
			
			<img src="pages/page12.jpeg" width="100%" alt="IELTSx Reading Practice Test Page 12 (Please Download PDF using the link above if you have trouble loading this image)"></img>	
			
					
		'
		
	),
	array (
		'content'=>'
			
			
			<img src="pages/page13.jpeg" width="100%" alt="IELTSx Reading Practice Test Page 13 (Please Download PDF using the link above if you have trouble loading this image)"></img>	
			
					
		'
		
	)
	
	
);

$results = array(
	'a_1'=>array('t','true'),
	'a_2'=>array('f','false'),
	'a_3'=>array('t', 'true'),
	'a_4'=>array('NG','N G','Not Given'),
	'a_5'=>array('f','false'),
	'a_6'=>array('t','true'),
	'a_7'=>array('oysters'),
	'a_8'=>array('oxygen'),
	'a_9'=>array('rain gardens'),
	'a_10'=>array('pilings'),
	'a_11'=>array('wetlands'),
	'a_12'=>array('b','c'),
	'a_13'=>array('c','b'),
	'a_14'=>array('c','e'),
	'a_15'=>array('c','e'),
	'a_16'=>array('f'),
	'a_17'=>array('c'),
	'a_18'=>array('e'),
	'a_19'=>array('d'),
	'a_20'=>array('g'),
	'a_21'=>array('b'),
	'a_22'=>array('n','no'),
	'a_23'=>array('n','no'),
	'a_24'=>array('y','yes'),
	'a_25'=>array('NG','N G','Not Given'),
	'a_26'=>array('d'),
	'a_27'=>array('vii'),
	'a_28'=>array('vi'),
	'a_29'=>array('ii'),
	'a_30'=>array('iii'),
	'a_31'=>array('target'),
	'a_32'=>array('distributed'),
	'a_33'=>array('currency'),
	'a_34'=>array('buy'),
	'a_35'=>array('d'),
	'a_36'=>array('f'),
	'a_37'=>array('a'),
	'a_38'=>array('c'),
	'a_39'=>array('B','D'),
	'a_40'=>array('B','D')
);

$questions = array(
	'a_1'=>array('type' => 'normal'),
	'a_2'=>array('type' => 'normal'),
	'a_3'=>array('type' => 'normal'),
	'a_4'=>array('type' => 'normal'),
	'a_5'=>array('type' => 'normal'),
	'a_6'=>array('type' => 'normal'),
	'a_7'=>array('type' => 'normal'),
	'a_8'=>array('type' => 'normal'),
	'a_9'=>array('type' => 'normal'),
	'a_10'=>array('type' => 'normal'),
	'a_11'=>array('type' => 'normal'),
	'a_12'=>array('type' => 'normal'),
	'a_13'=>array('type' => 'normal'),
	'a_14'=>array('type' => 'normal'),
	'a_15'=>array('type' => 'normal'),
	'a_16'=>array('type' => 'normal'),
	'a_17'=>array('type' => 'normal'),
	'a_18'=>array('type' => 'normal'),
	'a_19'=>array('type' => 'normal'),
	'a_20'=>array('type' => 'normal'),
	'a_21'=>array('type' => 'normal'),
	'a_22'=>array('type' => 'normal'),
	'a_23'=>array('type' => 'normal'),
	'a_24'=>array('type' => 'normal'),
	'a_25'=>array('type' => 'normal'),
	'a_26'=>array('type' => 'normal'),
	'a_27'=>array('type' => 'normal'),
	'a_28'=>array('type' => 'normal'),
	'a_29'=>array('type' => 'normal'),
	'a_30'=>array('type' => 'normal'),
	'a_31'=>array('type' => 'normal'),
	'a_32'=>array('type' => 'normal'),
	'a_33'=>array('type' => 'normal'),
	'a_34'=>array('type' => 'normal'),
	'a_35'=>array('type' => 'normal'),
	'a_36'=>array('type' => 'normal'),
	'a_37'=>array('type' => 'normal'),
	'a_38'=>array('type' => 'normal'),
	'a_39'=>array('type' => 'combine', 'combined_question' => array('a_39', 'a_40')),
	'a_40'=>array('type' => 'combine', 'combined_question' => array('a_39', 'a_40')),
);

?>