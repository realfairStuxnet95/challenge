$(document).ready(function(){
	var object=$(".hero_single.version_2");
	myFunction(object);
});
var counter=0;
var images=["a.jpg","b.jpg","c.jpg","d.jpg"];
function myFunction(object) {
    setInterval(function(){
    	if(counter<images.length){
	    	object.css({
	    		"background":"url(../challenge/img/Home/slider/"+images[counter]+")",
	    		"-webkit-background-size":" cover",
	    		"-moz-background-size":" cover",
	    		"-o-background-size":" cover",
	    		"background-size":"cover"
	    	});
    	}else{
    		counter=0;
    	}
    	counter++;
     }, 5000);
    
}