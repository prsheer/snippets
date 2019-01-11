function validaAnagram(first, second) {

    if (first.length !== second.length)
    {
        return false;
    }

    const lookup = {};

    for (let i = 0; i < first.length; i++) {

        let letter = first[i];

        lookup[letter] ? lookup[letter] += 1 : lookup[letter] = 1;

    }

    for (let i = 0; i < second.length; i++) {

        let letter = second[i];

        if (!lookup[letter]) {

            return false;

        } else {

            lookup[letter] -= 1;

        }

    }

    return true;


}

console.log(validaAnagram('online', 'Bnline'));
document.getElementById("submit").addEventListener("click", checkPHP);

function checkPHP() {

    if (document.getElementsByName('first')[0].value === "" || document.getElementsByName('second')[0].value === "")
    {
        prompt("Anagrams can be tested only on words. If the fields are empty, that means there are no words, so there is nothing to anagram. Do you understand?");
    }

}
