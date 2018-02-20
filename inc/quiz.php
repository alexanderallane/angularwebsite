<?php 
$connect=mysqli_connect("localhost","root","") or die("Unable to Connect");
mysqli_select_db($connect, "db_quiz") or die("Could not open the db");

$Q1 = (isset($_POST['Q1'])) ? $_POST['Q1']: '';
$Q2 = (isset($_POST['Q2'])) ? $_POST['Q2']: '';
$Q3 = (isset($_POST['Q3'])) ? $_POST['Q3']: '';
$Q4 = (isset($_POST['Q4'])) ? $_POST['Q4']: '';
$Q5 = (isset($_POST['Q5'])) ? $_POST['Q5']: '';
$Q6 = (isset($_POST['Q6'])) ? $_POST['Q6']: '';
$Q7 = (isset($_POST['Q7'])) ? $_POST['Q7']: '';
$Q8 = (isset($_POST['Q8'])) ? $_POST['Q8']: '';
$Q9 = (isset($_POST['Q9'])) ? $_POST['Q9']: '';
$Q10 = (isset($_POST['Q10'])) ? $_POST['Q10']: '';

$query = "SELECT category FROM quiz_key WHERE question IN ('$Q1','$Q2','$Q3','$Q4','$Q5','$Q6','$Q7','$Q8','$Q9','$Q10')";
$user = 'root';
$password = '';
$db = 'db_quiz';
$host = 'localhost';

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db
);

$result = mysqli_query($link, $query);

$cat_a = $cat_b = $cat_c = $cat_d = $cat_e = 0;
while($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
	$cat = $row['category'];
	if ($cat == "A") {
		$cat_a += 1;
	} elseif ($cat == "B") {
		$cat_b += 1;
	} elseif ($cat == "C") {
		$cat_c += 1;
	} elseif ($cat == "D") {
		$cat_d += 1;
	} elseif ($cat == "E") {
		$cat_e += 1;
	}
}

$array = array('A' => $cat_a, 'B' => $cat_b, 'C' => $cat_c, 'D' => $cat_d, 'E' => $cat_e);
$str = '';

foreach ($array as $i => $value) {
	if ($value >= 6) {		
		$str = $i;
		break;
    } elseif ($value >= 2) {		
		$str .= $i;
    }
}

$var = sort($array);

$query = "SELECT result FROM quiz_map WHERE result_category = '$str' LIMIT 1";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_row($result);
echo json_encode($row);
?>