<!-- Property of Christopher Bartlett -  christopher@seedindustries.com copyright 2013-->
<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="./framework/css/index.css" media="screen" />

	<script type="text/javascript" charset="utf-8" src="./framework/system/index.js"></script>

	<script LANGUAGE="JavaScript" TYPE="text/javascript" SRC="./framework/elizabot/elizabot.js"></script>
	<script LANGUAGE="JavaScript" TYPE="text/javascript" SRC="./framework/elizabot/elizadata.js"></script>
	<script LANGUAGE="JavaScript" TYPE="text/javascript" SRC="./framework/speak/speakClient.js"></script>
	<script LANGUAGE="JavaScript" TYPE="text/javascript">
<!--

var eliza = new ElizaBot();
var elizaLines = new Array();

var displayCols = 60;
var displayRows = 20;

function elizaReset() {
	eliza.reset();
	elizaLines.length = 0;
	elizaStep();
}

function elizaStep() {
	var f = document.forms.e_form;
	var userinput = f.e_input.value;
	if (eliza.quit) {
		f.e_input.value = '';
		if (confirm("This session is over.\nStart over?")) elizaReset();
		f.e_input.focus();
		return;
	}
	else if (userinput != '') {
		var usr = '' + userinput;
		var rpl ='' + eliza.transform(userinput);
		elizaLines.push(usr);
		elizaLines.push(rpl);
		// display nicely
		// (fit to textarea with last line free - reserved for extra line caused by word wrap)
		var temp  = new Array();
		var l = 0;
		for (var i=elizaLines.length-1; i>=0; i--) {
			l += 1 + Math.floor(elizaLines[i].length/displayCols);
			if (l >= displayRows) break
			else temp.push(elizaLines[i]);
		}
		elizaLines = temp.reverse();
		f.e_display.value = rpl;//elizaLines.join('\n');
		
		
		speak(rpl, { pitch: 30 }, { speed: 60 }, {wordgap: 50})
	}
	else if (elizaLines.length == 0) {
		// no input and no saved lines -> output initial
		var initial = '' + eliza.getInitial();
		elizaLines.push(initial);
		f.e_display.value = initial + '\n' ;
		speak(initial, { pitch: 30 }, { speed: 60 }, {wordgap: 100})
	}
	f.e_input.value = '';
	f.e_input.focus();
}

//-->
</script>

</head>
<body>


<div class='wrapper'>
<div class='voice-visualizer'>

	<div class='voice-visualizer-container'>
		<div class='voice-visualizer-outer' style='width:30%;'>
		<div class='voice-visualizer-inner' id='vv-1'>
		</div>
	</div>
	</div>
	<div class='voice-visualizer-container'>
		<div class='voice-visualizer-outer' style='width:35%;'>
		<div class='voice-visualizer-inner' id='vv-2'>
		</div>
	</div>
	</div>
	<div class='voice-visualizer-container'>
		<div class='voice-visualizer-outer' style='width:40%;'>
		<div class='voice-visualizer-inner' id='vv-3'>
		</div>
	</div>
	</div>
	<div class='voice-visualizer-container'>
		<div class='voice-visualizer-outer' style='width:45%;'>
		<div class='voice-visualizer-inner' id='vv-4'>
		</div>
	</div>
	</div>
	<div class='voice-visualizer-container'>
		<div class='voice-visualizer-outer' style='width:50%;'>
		<div class='voice-visualizer-inner' id='vv-5'>
		</div>
	</div>
	</div>
	<div class='voice-visualizer-container'>
		<div class='voice-visualizer-outer' style='width:55%;'>
		<div class='voice-visualizer-inner' id='vv-6'>
		</div>
	</div>
	</div>
	<div class='voice-visualizer-container'>
		<div class='voice-visualizer-outer' style='width:60%;'>
		<div class='voice-visualizer-inner' id='vv-7'>
		</div>
	</div>
	</div>
	<div class='voice-visualizer-container'>
		<div class='voice-visualizer-outer' style='width:65%;'>
		<div class='voice-visualizer-inner' id='vv-8'>
		</div>
	</div>
	</div>
	<div class='voice-visualizer-container'>
		<div class='voice-visualizer-outer' style='width:70%;'>
		<div class='voice-visualizer-inner' id='vv-9' >
		</div>
	</div>
	</div>
	<div class='voice-visualizer-container'>
		<div class='voice-visualizer-outer' style='width:75%;'>
		<div class='voice-visualizer-inner' id='vv-10' >
		</div>
	</div>
	</div>
	<div class='voice-visualizer-container'>
		<div class='voice-visualizer-outer' style='width:80%;'>
		<div class='voice-visualizer-inner' id='vv-11' >
		</div>
	</div>
	</div>
	<div class='voice-visualizer-container'>
		<div class='voice-visualizer-outer' style='width:85%;'>
		<div class='voice-visualizer-inner' id='vv-12' >
		</div>
	</div>
	</div>
	<div class='voice-visualizer-container'>
		<div class='voice-visualizer-outer' style='width:90%;'>
		<div class='voice-visualizer-inner' id='vv-13' >
		</div>
	</div>
	</div>
	<div class='voice-visualizer-container'>
		<div class='voice-visualizer-outer' style='width:95%;'>
		<div class='voice-visualizer-inner' id='vv-14' >
		</div>
	</div>
	</div>
	<div class='voice-visualizer-container'>
		<div class='voice-visualizer-outer' style='width:100%;'>
		<div class='voice-visualizer-inner' id='vv-15' >
		</div>
	</div>
	</div>

	<div class='voice-visualizer-container'>
		<div class='voice-visualizer-outer' style='width:100%;'>
		<div class='voice-visualizer-inner' id='vv-16'>
		</div>
	</div>
	</div>
	<div class='voice-visualizer-container'>
		<div class='voice-visualizer-outer' style='width:95%;'>
		<div class='voice-visualizer-inner' id='vv-17'>
		</div>
	</div>
	</div>
	<div class='voice-visualizer-container'>
		<div class='voice-visualizer-outer' style='width:90%;'>
		<div class='voice-visualizer-inner' id='vv-18'>
		</div>
	</div>
	</div>
	<div class='voice-visualizer-container'>
		<div class='voice-visualizer-outer' style='width:85%;'>
		<div class='voice-visualizer-inner' id='vv-19' >
		</div>
	</div>
	</div>
	<div class='voice-visualizer-container'>
		<div class='voice-visualizer-outer' style='width:80%;'>
		<div class='voice-visualizer-inner' id='vv-20' >
		</div>
	</div>
	</div>
	<div class='voice-visualizer-container'>
		<div class='voice-visualizer-outer' style='width:75%;'>
		<div class='voice-visualizer-inner' id='vv-21' >
		</div>
	</div>
	</div>
	<div class='voice-visualizer-container'>
		<div class='voice-visualizer-outer' style='width:70%;'>
		<div class='voice-visualizer-inner' id='vv-22' >
		</div>
	</div>
	</div>
	<div class='voice-visualizer-container'>
		<div class='voice-visualizer-outer' style='width:65%;'>
		<div class='voice-visualizer-inner' id='vv-23' >
		</div>
	</div>
	</div>
	<div class='voice-visualizer-container'>
		<div class='voice-visualizer-outer' style='width:60%;'>
		<div class='voice-visualizer-inner' id='vv-24' >
		</div>
	</div>
	</div>
	<div class='voice-visualizer-container'>
		<div class='voice-visualizer-outer' style='width:55%;'>
		<div class='voice-visualizer-inner' id='vv-25' >
		</div>
	</div>
	</div>
	<div class='voice-visualizer-container'>
		<div class='voice-visualizer-outer' style='width:50%;'>
		<div class='voice-visualizer-inner' id='vv-26' x>
		</div>
	</div>
	</div>
	<div class='voice-visualizer-container'>
		<div class='voice-visualizer-outer' style='width:45%;'>
		<div class='voice-visualizer-inner' id='vv-27' >
		</div>
	</div>
	</div>
	<div class='voice-visualizer-container'>
		<div class='voice-visualizer-outer' style='width:40%;'>
		<div class='voice-visualizer-inner' id='vv-28' >
		</div>
	</div>
	</div>
	<div class='voice-visualizer-container'>
		<div class='voice-visualizer-outer' style='width:35%;'>
		<div class='voice-visualizer-inner' id='vv-29' >
		</div>
	</div>
	</div>
	<div class='voice-visualizer-container'>

		<div class='voice-visualizer-outer' style='width:30%;'>
		<div class='voice-visualizer-inner' id='vv-30' >
		</div>
	</div>
	</div>
</div>

<div class='talkbox-wrapper'>
	<form NAME="e_form" onsubmit="elizaStep();return false">
		<div class='talkbox-textarea'>
			<textarea name="e_display" cols="30" rows="5" style='color:#ff0A1A; font-size:14px;  background:none; border:none; outline: none;'></textarea>
		</div>
		<div class='talkbox-text'>
			<input type="text" x-webkit-speech="x-webkit-speech" name="e_input" id='e_input' autocomplete='off' style='width:98%; outline:none; font-size:20px; background:#000; color:#0a36fe; border:none;' />
		</div>

	</form>
</div>
<div class='background'>
	<img src='./framework/images/HAL9000.jpg' style='width:100%;'/>
</div>
</div>
<div id='audio'></div>
	<script LANGUAGE="JavaScript" TYPE="text/javascript">
		elizaReset();
		document.getElementById('e_input').focus()
	</script>
	</div>

</body>
<foot>
</foot>