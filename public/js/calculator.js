"use strict"

// These are all the global varibels
var numberButtons = document.getElementsByClassName("buttonNumbers"),
    buttonOperator = document.getElementsByClassName("buttonOperators"),
    leftInput = document.getElementById("left-input"),
    centerInput = document.getElementById("center-input"),
    rightInput = document.getElementById("right-input"),
    plusOperator = document.getElementById("buttonPlus"),
    equalOperator = document.getElementById("buttonEqual"),
    calculation = document.getElementById("finalOutCome"),
    clearInputs = document.getElementById("clearInputs"),
    decimalInput = document.getElementById("decimal"),
    backSpace = document.getElementById("backSpace"),
    zeroInput = document.getElementById("buttonZero"),
    multiDecimalCheck = false;

// These are the elements with ID's event listener's
equalOperator.addEventListener("click", calculateNumbers);
clearInputs.addEventListener("click", clearAllInputs);
decimalInput.addEventListener("click", addDecimalToInputboxes);
backSpace.addEventListener("click", delInput);
zeroInput.addEventListener("click", addNumberToLeftScreen);


// These are all the funtions
function addNumberToLeftScreen(event) {
    if (centerInput.value == "" && rightInput.value == "") {
        leftInput.value += this.innerHTML;
    };
};

function addOperatorToCenterScreen(event) {
    if (leftInput.value != '') {
        centerInput.value  = this.innerHTML;
        multiDecimalCheck = false;
    }
};

function addNumberToRightScreen(event) {
    if (leftInput.value != "" && centerInput.value != "") {
        rightInput.value += this.innerHTML;
    };
};



function clearAllInputs(event) {
    leftInput.value   = '';
    centerInput.value = "";
    rightInput.value  = "";
    multiDecimalCheck = false;
};

function clearAllNumbers(event) {
    leftInput.value   = '';
    rightInput.value  = "";
    multiDecimalCheck = false;
}

function addValueToLeftInput(event) {
    leftInput.value = calculation.innerHTML;
}

function calculateNumbers(event) {
    var firstNumber = Number(leftInput.value),
        operator = centerInput.value,
        secondNumber = Number(rightInput.value);

    if (leftInput.value != '' && centerInput != "" && rightInput != "") {
        if (operator == "+") {
            calculation.innerHTML = firstNumber + secondNumber;
            clearAllNumbers();
            addValueToLeftInput();
        }else if (operator == "-") {
            calculation.innerHTML = firstNumber - secondNumber;
            clearAllNumbers();
            addValueToLeftInput();
        }else if (operator == "*") {
            calculation.innerHTML = firstNumber * secondNumber;
            clearAllNumbers();
            addValueToLeftInput();
        }else if (operator == "/") {
            calculation.innerHTML = firstNumber / secondNumber;
            clearAllNumbers();
            addValueToLeftInput();
        }else if (operator == "^") {
            calculation.innerHTML =  Math.pow(firstNumber, secondNumber)
            clearAllNumbers();
            addValueToLeftInput();
        }else if (operator == "%") {
            calculation.innerHTML = firstNumber % secondNumber;
            clearAllNumbers();
            addValueToLeftInput();
        }
    };
};
function addDecimal(event) {
    if (multiDecimalCheck == false) {
        leftInput.value += this.innerHTML
        multiDecimalCheck = true;
    }
}

function addDecimalToInputboxes(event) {
    if (centerInput.value == "" && rightInput.value == "") {
        if (multiDecimalCheck == false) {
            leftInput.value += this.innerHTML
            multiDecimalCheck = true;
        }

    }
    if (centerInput.value != "" && leftInput.value != "") {
        if (multiDecimalCheck == false) {
            rightInput.value += this.innerHTML
            multiDecimalCheck = true;
        }
    }
}

function delInput(event) {
    if (leftInput.value != "" && centerInput.value != "" && rightInput.value != "") {
        rightInput.value = rightInput.value.slice(0, -1)
    }else if (leftInput.value != "" && centerInput.value != "" && rightInput.value == "") {
        centerInput.value = centerInput.value.slice(0, -1)
    }else if (leftInput.value != "" && centerInput.value == "" && rightInput.value == "") {
        leftInput.value = leftInput.value.slice(0, -1)
    }
}


// These are what gives all the buttons event listeners
for (var i = 0; i < numberButtons.length; i++) {
    numberButtons[i].addEventListener("click", addNumberToLeftScreen);
};
for (var j = 0; j < buttonOperator.length; j++) {
    buttonOperator[j].addEventListener("click", addOperatorToCenterScreen);
};
for (var k = 0; k < numberButtons.length; k++) {
    numberButtons[i].addEventListener("click", addNumberToRightScreen);
};
