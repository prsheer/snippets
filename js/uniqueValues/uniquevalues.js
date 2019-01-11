function uniqueValues(arr) {

    if (arr.length === 0) return 0;

    var i = 0;

    for (var j = 0; j < arr.length; j++)
    {
        if (arr[i] !== arr[j])
        {
            i++;

            arr[i] = arr[j];
        }
    }

    return i + 1;

}

console.log(uniqueValues([3, 4, 5, 21, 4, 55, 55, 22, 22, 11, 1,11, 1]));


document.getElementById("submit").addEventListener("click", checkPHP);

function checkPHP() {

    if (document.getElementsByName('insertValues')[0].value === "")
    {
        prompt("Anagrams can be tested only on words. If the fields are empty, that means there are no words, so there is nothing to anagram. Do you understand?");
    }

}

