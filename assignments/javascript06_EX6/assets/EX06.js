//A
function jsStyle() {

    document.getElementById("text").style.color = "red";
    document.getElementById("text").style.fontSize = "large";

}

function jsMove() {
    text = document.getElementById("text");
    text.style.left = parseInt(text.style.left) + 10 + "px";

}

//B
function getFormValues() {
    alert(fname.value + " " + lname.value);

}

function howMany(){
    amount = document.getElementById("regForm").getElementsByTagName("input");
    totalVar = 0;

    for(i=0; i < amount.length; i ++){
        totalVar += 1;

    }

    console.log("Total Variable in Form:" + totalVar);

}

//C
function getOptions() {
	// function to display the number of options in an alert()
	option = document.getElementById("mySelect");
	nmOp = option.length;
	alert("There are " + nmOp + " in the Dropdown");

}

function colorChanger(){
    colorChange = document.getElementById("mySelect");
    color = colorChange.value;
    document.getElementById("EXC").style.backgroundColor = color;

}


//D
document.getElementById("rb").onmouseover = function() {mouseOver()};
	
document.getElementById("rb").onmouseout = function() {mouseOut()};

//JS6D
 
function mouseOver(){
    newColor = colorChanger();
    document.getElementById("rb").style.color = newColor;
};

function mouseOut(){
    document.getElementById("rb").style.color = "black";
};


//E
function multiply(){
    value1 = document.getElementById("firstoperand").value;
    //console.log(value1);
    
    value2 = document.getElementById("secondoperand").value;
    //console.log(value2);

    result = value1 * value2;
    //console.log(result);

    answer  = value1 * value2;

    //6E
    aNodeM = document.createTextNode("The Product is " + answer);
    document.body.appendChild(aNodeM);


};



function divide(){
    value1 = document.getElementById("firstoperand").value;
    //console.log(value1);
    
    value2 = document.getElementById("secondoperand").value;
    //console.log(value2);
    answer = value1 / value2;

    aNodeD = document.createTextNode("The Dividened is " + answer);
    document.body.appendChild(aNodeD);

};