<html>
<body>
<script>
function starting(){
 	alert("<?PHP start(); ?>");
}
</script>
<?php
echo "Your cards: ", $user1, ", ", $user2, ", ", $user3;
function start(){
	global $computer1;
	global $computer2;
	global $computer3;
	global $user1;
	global $user2;
	global $user3;
	$computer1 = rand(1, 10);
	$computer2 = rand(1, 10);
	$computer3 = rand(1, 10);
	$user1 = rand(1, 10);
	$user2 = rand(1, 10);
	$user3 = rand(1, 10);
	echo "Dealer's cards: ", $computer1, ", ", $computer2, ", ", $computer3, " ";
	$sum_bot = $computer1 + $computer2 + $computer3;
	$sum_user = $user1 + $user2 + $user3;
	if ($sum_bot > 21 and $sum_user > 21) {
		echo "It's a tie";
	}elseif ($sum_bot > 21 and $sum_user < 21) {
		echo "You win";
	}elseif ($sum_bot < 21 and $sum_user > 21) {
		echo "You lose";
	}elseif ($sum_bot > $sum_user) {
		echo "You lose";
	}elseif ($sum_bot < $sum_user) {
		echo "You win";
	}elseif ($sum_bot == $sum_user) {
		echo "It's a tie";
	}

}
?>
<button onclick="starting()">Check</button>
</body>
</html>	
