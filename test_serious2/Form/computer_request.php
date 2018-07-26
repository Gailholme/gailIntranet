
<form accept-charset="UTF-8" action="action_page.php" autocomplete="off" method="GET" target="_blank">
	<fieldset>
		<legend>Requisition for computer Hardware and Software</legend>
		<select>
			<option selected="selected" value="1">Yes</option>
			<option value="2">No</option>
		</select><br />
		<div class="w3-section">
			<h3>Department</h3>
			<select class="w3-select w3-half" name="option">

				<option>All</option>
				<option>
					<?php include "option.php"; ?>
				</option>
			</select>

			<select class="w3-select w3-half" name="option">

				<option>All</option>
				<option>
					<?php include "option.php"; ?>
				</option>
			</select>
			<br />
		</div>

		<input checked="checked" name="sex" type="radio" value="male" /> Head Office
		<input name="sex" type="radio" value="female" /> Branch
		<input name="name" type="text" value="Branch" /> <br />
		<label for="name"> Name </label><br />
		<input name="name" type="text" value="Frank" /> <br />
		<input name="name" type="text" value="Frank" /> <br />
		<input name="name" type="text" value="Frank" /> <br />
		<input name="name" type="text" value="Frank" /> <br />

		<textarea cols="30" rows="2">Long text.</textarea><br />
		<div>
			<div>
			<label for="name"> Name </label><br />
			<input name="democheckbox" type="checkbox" value="1" /> Office Use<br />
			<input name="democheckbox" type="checkbox" value="1" /> Front Office (Trading)<br />
			<input name="democheckbox" type="checkbox" value="1" /> Back Office<br />
				<input name="democheckbox" type="checkbox" value="1" /> Laptop <br />
			</div>
	       <div>
				<label for="name"> Monitor </label><br />
				<input name="democheckbox" type="checkbox" value="1" /> <br />
				<input name="democheckbox" type="checkbox" value="1" /> Front Office (Trading)<br />
				 </div>

				 <div>
				<label for="name"> Software </label><br />
				<input name="democheckbox" type="checkbox" value="1" /> Microsoft Office<br />
				<input name="democheckbox" type="checkbox" value="1" />Other <br />
				<textarea cols="30" rows="2">Long text.</textarea><br />
				 </div>
				 <div>
			 <label for="name"> Other </label><br />
	
			 <textarea cols="30" rows="2">Long text.</textarea><br />
				</div>
		</div>


		<button type="submit" value="Submit">Submit</button>
	</fieldset>
</form>
