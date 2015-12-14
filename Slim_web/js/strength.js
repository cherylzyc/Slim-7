var t = 0,sec = 60, min = 1, i = 1, p_min = "0" + min, p_sec;



function time(){
	$(".start-button").addClass("none");
	$(".pause-button").removeClass("none");


	t=setTimeout("time()",10);


		if (sec == 0){
			sec = 60;
			min--;
			p_min = "0" + min
		}
		sec--;
		p_sec = sec
		if(sec < 10){
			p_sec = "0" + sec;
		}

		if(min < 0){
			i++;
			if(i == 4){
				min = 0;
			}else if(i == 5){

				// put the URL of the last page here.
				window.location.href="congrats.php";

			}else{
			min = 1;
		}
			p_min = "0" + min;
		}
	
	
	



	
	// document.getElementById("msec_" + i).innerHTML = p_msec;
	document.getElementById("sec_" + i).innerHTML = p_sec;
	document.getElementById("min_" + i).innerHTML = p_min;

		// if(min <= 0 && sec <= 0 && msec <= 0){
		



	

}



function stop(){
	clearTimeout(t);

	$(".start-button").removeClass("none");
	$(".pause-button").addClass("none");
}

