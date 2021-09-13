function nearestFibonacci(num)
{
    if (num == 0) {
        document.write(0);
        return;
    }
    let first = 0, second = 1;
    let third = first + second;
    while (third <= num) {
        first = second;
        second = third;
        third = first + second;
    }
    let ans = (Math.abs(third - num)
               >= Math.abs(second - num))
                  ? second
                  : third;
    let result = ans - N;
    console.log(result);
}
const array = [15,1,3];
let N = 0;

for (let i = 0; i < array.length; i++) {
    N += array[i];
}
    console.log(nearestFibonacci(N));