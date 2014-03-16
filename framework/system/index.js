var interval;
function voiceVisualizer(){


	i = 1;

	while(i < 31){
	
	var rand = Math.floor(Math.random() * 100) + 50

		document.getElementById('vv-'+i).style.width = rand + "%";

	i++;
	}

}

function voiceInit (){


interval = setInterval(function(){voiceVisualizer()}, 270)


}


function halInput(text){
	var words = text.split('');

		document.getElementById('e_display').value = "";

		var len = words.length



		var i = 0;
		var newText = "";
		
		while(i < len){

			var newWord = words[i];
			setTimeout(function(){halWords(newWord)


			}, 1000)
		
		i++;	
		}
	
	
}

function halWords(newWord){

				newText = document.getElementById('e_display').value;
				document.getElementById('e_display').value = newText + newWord;
}