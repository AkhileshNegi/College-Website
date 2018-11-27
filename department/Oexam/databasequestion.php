<html>
<body>
	<?php
	$host="localhost";
	$user="root";
	$password="";
	$con=mysql_connect($host,$user,$password)or die("unable to connect");
mysql_select_db("questions",$con);
$sql= "CREATE TABLE quesnew (quesid INT,ques varchar(1000))";
mysql_query($sql,$con);	
$data ="INSERT INTO quesnew (quesid,ques) VALUES ('1', 'Which is the most frequent letter used in the english language')";
mysql_query($data,$con);	


$data ="INSERT INTO quesnew (quesid,ques) VALUES ('1', 'Which is the most frequent letter used in the english language')";
$data ="INSERT INTO quesnew (quesid,ques) VALUES ('2', ' What should come in the place of (?) in the given series? ACE, FGH, ?, PON <b>')";
mysql_query($data,$con);
$data ="INSERT INTO quesnew (quesid,ques) VALUES ('3', ' Typist : Typewriter : : Writer: ?')";
mysql_query($data,$con);
$data ="INSERT INTO quesnew (quesid,ques) VALUES ('4', 'Medicine is related to Patient in the same way as Education is related to')";
mysql_query($data,$con);
$data ="INSERT INTO quesnew (quesid,ques) VALUES ('5', 'What should come in the place of question mark in the following series?')";
mysql_query($data,$con);
$data ="INSERT INTO quesnew (quesid,ques) VALUES ('6', ' What should come in the place of question mark in the following series? 1, 4, 9, 25, 36, ?')";
mysql_query($data,$con);
$data ="INSERT INTO quesnew (quesid,ques) VALUES ('7', 'If the sequence of the alphabets is reversed which of the following would be the 14th letter from your left?')";
mysql_query($data,$con);
$data ="INSERT INTO quesnew (quesid,ques) VALUES ('8', 'Which letter is the 8th letter to the right of the letter which is 10th to the left of the last but one letter from the right?')";
mysql_query($data,$con);
$data ="INSERT INTO quesnew(quesid,ques) VALUES ('9', 'If CAT and BOAT are written as XZG and YLZG respectively in a code language how is ‘EGG’ to
be written in the same language?')";
mysql_query($data,$con);
$data ="INSERT INTO quesnew (quesid,ques) VALUES ('10', 'In a certain code CONTRIBUTOR is written as RTNOCIROTUB. How is ‘prohibition’ written in that code?')";
mysql_query($data,$con);
?>
</body>
</html>