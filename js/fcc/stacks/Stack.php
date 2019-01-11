<script src="Stack.js"></script>

<script>

    var letters = [];

    var word = "racecsaar";

    var rword = "";

    for (var i = 0; i < word.length; i++) {
        letters.push(word[i]);
    }

    for (var i = 0; i < word.length; i++) {
        rword += letters.pop();
    }

    if (rword === word) {
        console.log(word + " is a palindrome.");
    } else {
        console.log(word + " is not a palindrome.");
    }

    var Stack = new Stack();

    Stack.push("Sasa");
    Stack.push("Marinada");
    console.log(Stack.peek());
    //console.log(Stack.pop());
    console.log(Stack.peek());

</script>
