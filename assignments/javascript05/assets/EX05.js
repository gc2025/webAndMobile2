//A
function jsStyle() {

    document.getElementById("text").style.color = "red";
    document.getElementById("text").style.fontSize = "large";

}

//B
function getFormValues() {
    alert(fname.value + " " + lname.value);

}

//C
function getOptions() {
	// function to display the number of options in an alert()
	option = document.getElementById("mySelect");
	nmOp = option.length;
	alert("There are " + nmOp + " in the Dropdown");

}


//D
document.getElementById("rb").onmouseover = function() {mouseOver()};
	
document.getElementById("rb").onmouseout = function() {mouseOut()};

function mouseOver(){
    document.getElementById("rb").style.color = "red";
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

    document.getElementById("result").innerHTML = value1 * value2;

};



function divide(){
    value1 = document.getElementById("firstoperand").value;
    //console.log(value1);
    
    value2 = document.getElementById("secondoperand").value;
    //console.log(value2);
    document.getElementById("result").innerHTML = value1 / value2;

};