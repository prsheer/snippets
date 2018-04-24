<script type="text/javascript">
	
	var apple = 'apple';

	function reverse(string)
	{
		let reversed = '';

		for (let character of string) {
			reversed = character + reversed;
		}

		return reversed;
	}

	console.log(reverse(apple));

</script>

<?php

$apple = 'apple';

function reverse($string) {

	$count = 0;
	$reverse = '';

	while (!empty($string[$count]))
	{
		$reverse = $string[$count].$reverse;
		$count++;
	}

	return $reverse;
}

print_r(reverse($apple));

?>