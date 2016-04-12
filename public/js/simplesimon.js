"use strict";
// Global varibles
var simonArray        = [];
var isRepeating       = false;
var roundCount        = 0;
var rotateCount       = 0;
var simonRandomRotate = false;
var greenSound        = new Audio('https://s3.amazonaws.com/freecodecamp/simonSound1.mp3');
var redSound          = new Audio('https://s3.amazonaws.com/freecodecamp/simonSound2.mp3');
var yellowSound       = new Audio('https://s3.amazonaws.com/freecodecamp/simonSound3.mp3');
var blueSound         = new Audio('https://s3.amazonaws.com/freecodecamp/simonSound4.mp3');
var loseSound         = new Audio('http://downloads.bbc.co.uk/doctorwho/s1/s1_06/audio/s1_06_aud_03.mp3')
var angle             = 0;
var userIndex         = 0;
var highScoreCount    = 0;
var myInterval;
var spinSimonInterval;
var spinSimon = function (){
    clearInterval(spinSimonInterval);
    spinSimonInterval = setInterval(function(){
    angle += 2;
    $('#wrapper').rotate(angle);
    },50);
};


// Start Simple Simon
$('#startButton').on("click", function() {
    getRandomNumber();
    repeatSimonArray();
    getUserInput();
    $(this).attr('disabled','disabled');

});


// Gets a random number and pushes it into simonArray
function getRandomNumber() {
	var randomColor = Math.floor(Math.random() * 4) + 1;
	simonArray.push(randomColor);
}


//Repeats simonsArray from start to finish
function repeatSimonArray() {
	isRepeating    = true;
	var simonIndex = 0;
    myInterval = setInterval(function() {
	    var simonColor = simonArray[simonIndex];
        if (simonIndex == simonArray.length) {
            clearInterval(myInterval);
            isRepeating = false;
        }

		$("div[data-id='" + simonColor + "']").animate({
			opacity: "1"
		}, 500).animate({
			opacity: ".25"
		}, 500);
        simonIndex += 1;
        if (simonColor == 1) {
            blueSound.play();
        }else if (simonColor == 2) {
            redSound.play();
        }else if (simonColor == 3) {
            greenSound.play();
        }else if (simonColor == 4) {
            yellowSound.play();
        }

        if (roundCount >= 10 && roundCount <= 14) {
            simonRandomRotate = true;
            rotateSimon();
        }
	},1000)

}


// This sets everything for if the user wins the round
function simonRoundWin(){
    roundCount++;
    userIndex = 0;
    $("#simonCount").html("Score: " + roundCount);
    getRandomNumber();
    setTimeout( function() {
    repeatSimonArray();
}, 1500);
}


//This sets the difficulties for every round.
function simonStageDifficulties(){
    if (roundCount >= 5 && roundCount <= 9) {
        rotateSimon();
    }else if (roundCount >= 10 && roundCount <= 14) {
        simonRandomRotate = true;
        rotateSimon();
    }else if (roundCount >= 15) {
        spinSimon();
        rotateSimon();
    }else if(roundCount == 21) {
        alert("YOU ARE A GOD!!!!!")
        resetSimon();
    }
}


//This resets simon back to its starting point.
function resetSimon(){
    simonArray        = [];
    userIndex         = 0;
    roundCount        = 0;
    isRepeating       = false;
    simonRandomRotate = false;
    $("#wrapper").rotate(0);
    clearInterval(spinSimonInterval);
    $("#startButton").removeAttr('disabled');
    $("#simonCount").html('Score: ' + roundCount);
    $(".simonButtons").off("click");
    $("#wrapper, #centerCircle").effect( "shake", {"times":"4"}, 1000);
}


//This gets the user input and compares it against simonArray
function getUserInput() {
    //Adds a click button to the colors
	$(".simonButtons").on("click", function() {
        //var color sets the sound acording to the color
        var color = $(this).attr("data-id");

        //If isRepeating = true then skips all the code under it.
    	if (isRepeating) {
             return
         }

        //This tells if the player loses if not then moves to the else.
        if (simonArray[userIndex] != color) {
            loseSound.play();
            resetSimon();
            clearInterval(myInterval);
        //This sets all the on click animations
        } else {
            if (color == 1) {
                blueSound.play();
            }else if (color == 2) {
                redSound.play();
            }else if (color == 3) {
                greenSound.play();
            }else if (color == 4) {
                yellowSound.play();
            }
			$(this).animate({
					opacity: "1"
				},500).animate({
					opacity: ".25"
				}, 500, function(){
                    simonStageDifficulties();
                });
            //Adds one to user index so you can move one up in simonsArray
			userIndex += 1;

            //This tells if the user won the round
			if (userIndex == simonArray.length) {
            simonRoundWin();
			}

            //This sets the highscore and keeps it after game lose.
            if (roundCount >= highScoreCount) {
                highScoreCount = roundCount;
                $("#highScore").html("High Score: " + highScoreCount);
            }
		}
	});
}






function rotateSimon() {
    var  randomRotate = Math.floor(Math.random() * 4);
	var topRight = {
		"border-bottom-left-radius": "0px",
		"border-bottom-right-radius": "0px",
		"border-top-left-radius": "0px",
		"border-top-right-radius": "200px",
		"order": "1"
	};
	var bottomRight = {
		"border-bottom-left-radius": "0px",
		"border-top-left-radius": "0px",
		"border-top-right-radius": "0px",
		"border-bottom-right-radius": "200px",
		"order": 3
	};

	var topLeft = {
		"border-bottom-right-radius": "0px",
		"border-top-right-radius": "0px",
		"border-bottom-left-radius": "0px",
		"border-top-left-radius": "200px",
		"order": 0
	};
	var bottomLeft = {
		"border-bottom-right-radius": "0px",
		"border-top-right-radius": "0px",
		"border-top-left-radius": "0px",
		"border-bottom-left-radius": "200px",
		"order": 2
	};

	if (rotateCount == 0) {
        $("div[data-id='1']").animate(topRight);
		$("div[data-id='2']").animate(bottomRight);
		$("div[data-id='3']").animate(topLeft);
		$("div[data-id='4']").animate(bottomLeft);
	} else if (rotateCount == 1) {
		$("div[data-id='1']").animate(bottomRight);
		$("div[data-id='2']").animate(bottomLeft);
		$("div[data-id='3']").animate(topRight);
		$("div[data-id='4']").animate(topLeft);
	} else if (rotateCount == 2) {
		$("div[data-id='1']").animate(bottomLeft);
		$("div[data-id='2']").animate(topLeft);
		$("div[data-id='3']").animate(bottomRight);
		$("div[data-id='4']").animate(topRight);
	} else if (rotateCount == 3) {
		$("div[data-id='1']").animate(topLeft);
		$("div[data-id='2']").animate(topRight);
		$("div[data-id='3']").animate(bottomLeft);
		$("div[data-id='4']").animate(bottomRight);

	}


    if (simonRandomRotate) {
        rotateCount = randomRotate;
    }else {
        rotateCount++;
    }
}
