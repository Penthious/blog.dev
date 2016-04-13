var moleArray = [];
var moleIndex = 0;
var timeRemaining;
var randomSetNumber;
var scoreNumber = 0;
var randomNumber;


$('#startGame').on('click',function(){
  getMoleImg();
})


//count down for the counter
 $('#gameTime').change(function(){
     timeRemaining = $('#gameTime').val();
});

var counterRemaining = setInterval(function(){

    if(timeRemaining == 0){
    clearInterval(counterRemaining)
    }
    $('#countDown').html(timeRemaining);
    timeRemaining--;

},1000);



var currentMole = moleArray[moleIndex];
if (moleIndex == moleArray.length) {

}




function getRandomNumber(){
    randomSetNumber = Math.floor(Math.random() * $('.moleHoles').length);
    for (var i = 0; i < moleArray.length; i++) {
      if (randomSetNumber != moleArray[i] ) {
       randomNumber = randomSetNumber;
      }else {

      }
    }
}



function getMoleHole(){
    setInterval(function(){
        getRandomNumber();
        moleArray.push(randomNumber);
    },1000);
   console.log(moleArray[moleIndex]);
    return moleArray;
}





function getMoleImg(){
    getMoleHole();
    getUserInput();
    setInterval(function(){
      var moleSpawn = moleArray[moleIndex];
      console.log(moleSpawn);
      if(moleArray.length > 0){
        moleIndex++;
        console.log(moleSpawn);
        $("div[data-id='" + moleSpawn + "']").toggleClass('moleImgs',1000);
      }



    },1000);


}










function factorialize(num) {
    var number = [];
    for(var i = 1; i <= num; i++){
        number.push(i);
        console.log("this is i:  "+ number);
    }
    return num;
}

factorialize(5);

function getUserInput(){
  $('.moleHoles').on('click',function(){
    if ($(this).hasClass('moleImgs')) {
      $(this).removeClass('moleImgs');
      scoreNumber++;
      $('#scoreCount').html("Score:" + scoreNumber);
    }

  });
}
