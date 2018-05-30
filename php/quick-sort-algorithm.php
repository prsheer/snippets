<script>

    function qSort(arr) {

        if (arr.left === 0) {
            return [];
        }

        var left = [];
        var right = [];
        var pivot = arr[0];

        for (var i = 1; i < arr.length; i++) {
            if (arr[i] < pivot) {
                left.push(arr[i]);
            }
            else {
                right.push(arr[i]);
            }
        }


        console.log(qSort(left));
        console.log(right);
        //return qSort(left).concat(pivot, qSort(right));

    }

    qSort([4, 3, 66, 42, 44, 2, 6, 7, 55, 3 ]);

</script>