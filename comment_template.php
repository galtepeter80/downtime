

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
