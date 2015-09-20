

	<form action="comment_go.php" method="post">
		<fieldset>	
		
        <div class="comment">
			Your character's name (PC or NPC): 
            <textarea class="forms" name="character" placeholder="Character Name" type="text"></textarea>
        </div>
		<br>
        <div class="comment">
			Write any in-character (speech) comments here: (8000 char max)
            <textarea id="ic_form" name="ic_comment" placeholder="In-Character Comments" type="text"></textarea>
        </div>
		<br>
		<div class="comment">
			Write any out-of-character comments here: (8000 char max)
            <textarea id="ooc_form" name="ooc_comment" placeholder="Out-of-Character Comments" type="text"></textarea>
        </div>
		<Br>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Submit!</button>
        </div>
		</fieldset>
		
	</form>
	
	<script>
		// adds dice-rolling functionality to the OOC window
		function dice(number, size) {
			var total = 0;
			var type = " " + number + "D" + size + " (";
			document.getElementById("ooc_form").value += type;
			for (i = 0; i < number; i++) {
				var roll = Math.floor((Math.random() * size) + 1);
				document.getElementById("ooc_form").value += " ";
				document.getElementById("ooc_form").value += roll;
				total += roll;
			}
			document.getElementById("ooc_form").value += " ) = ";
			document.getElementById("ooc_form").value += total;
			//return roll;
		}
	</script>
	
	<! an array of dice buttons>
	<button onclick="dice(1, 4)">1D4</button>
	<button onclick="dice(1, 6)">1D6</button>
	<button onclick="dice(2, 6)">2D6</button>
	<button onclick="dice(3, 6)">3D6</button>
	<button onclick="dice(4, 6)">4D6</button>
	<button onclick="dice(1, 8)">1D8</button>
	<button onclick="dice(2, 8)">2D8</button>
	<button onclick="dice(1, 10)">1D10</button>
	<button onclick="dice(2, 10)">2D10</button>
	<button onclick="dice(3, 10)">3D10</button>
	<button onclick="dice(1, 12)">1D12</button>
	<button onclick="dice(1, 20)">1D20</button>
	<br><br>

	
