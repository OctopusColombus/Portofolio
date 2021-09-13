function checkPalindrome(str) {
	var string = str.toLowerCase();
    var arrayValues = string.split('');
    var reverseArrayValues = arrayValues.reverse();
    var reverseString = reverseArrayValues.join('');
    if(string == reverseString) {
        document.write(str);
        document.write("\n");
        document.write("  # --> palindrome <br>");
    }
    else {
    	document.write(str);
        document.write("\n");
        document.write('  # --> not palindrome <br>');
    }
}
console.log(checkPalindrome("Radar"));
console.log(checkPalindrome("Malam"));
console.log(checkPalindrome("Kasur ini rusak"));
console.log(checkPalindrome("Ibu Ratna antar ubi"));
console.log(checkPalindrome("Malas"));
console.log(checkPalindrome("Makan nasi goreng"));
console.log(checkPalindrome("Balonku ada lima"));
