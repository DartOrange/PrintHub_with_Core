var div = document.createElement('div');
var screenWidth = window.innerWidth|| document.documentElement.clientWidth|| document.body.clientWidth;
var equele = (screenWidth * 0.7)/40; 
var i;
var numberOfItems = 0;

for(i = 0; i < equele; i++){
   document.getElementById('divider-with-dods').innerHTML+=`<div class="dot d-${i}" id="d-${i}"></div>`;
   numberOfItems++;
}; 


var red = 255;
var green = 255;
var blue = 255;

var divid = (100/numberOfItems)/100;

          
for(i = 0; i < numberOfItems; i++){
   
   document.getElementById(`d-${i}`).style.backgroundColor=`rgb(${red}, ${green}, ${blue})`;
   //red = red - 255*divid;
   //green = green - 100*divid;
   blue = blue - 255*divid;
};



$(function() {
  $(window).resize(function() {
     var parrentElement;
     var appendElement = document.getElementById('divider-with-dods');    
     var div = document.createElement('div');
            var screenWidth = window.innerWidth
            || document.documentElement.clientWidth
            || document.body.clientWidth;
     var equele = (screenWidth * 0.7)/40; 
     var equeleFull = screenWidth;
     var i;  
     for(i = 0; i < equeleFull; i++){
        if(parrentElement = document.getElementById(`d-${i}`)){
           parrentElement.parentNode.removeChild(parrentElement);
        }; 
     };
     var numberOfItems=0;
     for(i = 0; i < equele; i++){
        appendElement.innerHTML+=`<div class="dot d-${i}" id="d-${i}"></div>`;
        numberOfItems++;
     }; 
     var red = 255;
     var green = 255;
     var blue = 255;
     var divid;
     divid = (100/numberOfItems)/100;
     for(i = 0; i < equele; i++){
        document.getElementById(`d-${i}`).style.backgroundColor=`rgb(${red}, ${green}, ${blue})`;
        //red = red - 255*divid;
        //green = green - 100*divid;
        blue = blue - 255*divid;
     };
  });
});