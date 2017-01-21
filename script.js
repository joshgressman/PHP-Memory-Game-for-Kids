var score = 0;

$(document).ready(function(){

$('#hidden1').on('click', function(){
  var count = score;
$('#hidden1').addClass('displayImg img');
$('#hidden8').on('click', function(){
$('#hidden8').addClass('displayImg img');
score++;
count++;
if(score == count){
  console.log('Thats a match');
  $('#hidden1').addClass('match','match');
  $('#hidden8').addClass('match');
}
console.log(score, count);
});
});

$('#hidden2').on('click', function(){
  var count = score;
$('#hidden2').addClass('displayImg img');
$('#hidden5').on('click', function(){
$('#hidden5').addClass('displayImg img');
score++;
count++;
if(score == count){
  console.log('Thats a match');
  $('#hidden2').addClass('match','match');
  $('#hidden5').addClass('match');
}
console.log(score, count);

});
});

$('#hidden3').on('click', function(){
var count = score;
$('#hidden3').addClass('displayImg img');
$('#hidden12').on('click', function(){
$('#hidden12').addClass('displayImg img');
score++;
count++;
if(score == count){
  console.log('Thats a match');
  $('#hidden3').addClass('match','match');
  $('#hidden12').addClass('match');
}
console.log(score, count);
});
});

$('#hidden4').on('click', function(){
var count = score;
$('#hidden4').addClass('displayImg img');
$('#hidden10').on('click', function(){
$('#hidden10').addClass('displayImg img');
if(score == count){
  console.log('Thats a match');
  $('#hidden4').addClass('match','match');
  $('#hidden10').addClass('match');
}
console.log(score, count);
});
});


$('#hidden6').on('click', function(){
var count = score;
$('#hidden6').addClass('displayImg img');
$('#hidden9').on('click', function(){
$('#hidden9').addClass('displayImg img');
if(score == count){
  console.log('Thats a match');
  $('#hidden6').addClass('match','match');
  $('#hidden9').addClass('match');
}
console.log(score, count);

});
});

$('#hidden7').on('click', function(){
  var count = score;
$('#hidden7').addClass('displayImg img');
$('#hidden11').on('click', function(){
$('#hidden11').addClass('displayImg img');
if(score == count){
  console.log('Thats a match');
  $('#hidden7').addClass('match','match');
  $('#hidden11').addClass('match');
}
console.log(score, count);
});
});


});
