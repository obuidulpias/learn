<script>
    var myName = "Pias";
    var myLine = "My name is " + myName + " and I am well.";
    //console.log("hello world");
    //console.log(myLine);
    var result="";
    function wordBlanks(myN, myA, myV, myV) {
        result += "The " + myN + " " + myA + " " + myV + " to the store.";
        return result;
    }
    //console.log(wordBlanks("dog", "big", "ran", "quick"));

    var myArray = [[1,2,3], [4,5,6], [7,8,9], [[10,11,12],13,14]];
    var myData = myArray[3][0];
    //console.log(myData);
    var ourArray = [1,2,3];
    
    var removeArray = ourArray.pop();
    
    var myArray =[["John", 23], ["cat", 2]];
    //console.log(myArray);
    var removeArray = myArray.pop();

    //console.log(myArray);

    function compareEquality(val) {
        if(val != 99) {
            return "True";
        }
        return "False";
    }
    //console.log(compareEquality(20));


    function testGreaterOrEqual(val) {
        if (val > 20) {
            return "20 or Over";
        }
        if ( val>10 ) {
            return "10 or over";
        }
        return "Less than 10";
    }
    //console.log(testGreaterOrEqual(9));

    


    //var num1, num2;
    function calculator(num1,num2,sign) {
        var answer = "";
        switch(sign) {
            case "+":
                return answer=num1+num2;
            case "-":
                return answer= num1-num2;
            case "*":
                return answer= num1*num2;
            case "/":
                return answer= num1/num2;

        };
        
    };
    //console.log(calculator(num1,num2,sign));

    var ourDog = {
        "name" : "Camper",
        "legs" : 4,
        "tails": 1,
        "friends": ["everything!"]
    };

    var sname = ourDog.name;
    var sleg = ourDog.legs;

    //console.log(sleg);
    var myArray2 = [];
    for(var i=0; i<6; i++) {
        myArray2.push(i);
    }
    console.log(myArray2);

    


</script>