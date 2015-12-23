
<?php $this->flash->output() ?>
<?php echo $this->partial('index/partials/welcome'); ?>

<?php echo $this->partial('index/partials/gettingstarted'); ?>

<?php echo $this->partial('index/partials/tools'); ?>

<?php echo $this->partial('index/partials/social'); ?>


<div class="container">
<br><br><br>
<select id="deneme">
    <option id='Value1'>keyboard</option>
    <option id='Value2'>mouse</option>
    <option id='Value3'>moniter</option>
</select>
<span name='moniter'>
	<h2>moniter problem</h2>
	<p><strong>step 1 </strong>check if moniter is plugged in</p>	

	<input class="btn btn-success" id="button" type="submit" name="button" value="Yes">
	<input class="btn btn-danger" id="nobutton" type="submit" name="nobutton" value="No">

</span>

<span name="step2" id="step2">
	<p><strong>step 2 </strong>check power</p>	

	<input class="btn btn-success" id="step2button" type="submit" name="step2submit" value="Yes">
	<input class="btn btn-danger" id="nobutton" type="submit" name="nobutton" value="No">
</span>

<span name="step3" id="step3">
	<p><strong>step 3 </strong>check if button is turned on</p>	

	<input class="btn btn-success" id="step2button" type="submit" name="step2submit" value="Yes">
	<input class="btn btn-danger" id="nobutton" type="submit" name="nobutton" value="No">
</span>









<span name='text'><h2>Keyboard problem</h2></span>
<span name="f1">hello</span>



<iframe name='iframe'>IFrame</iframe>











<br><br>
</div>
