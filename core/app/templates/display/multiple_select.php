<div <?php html_attributes(array_merge($display->attributes, $display->options['attributes'])); ?>>
		<?php $name = $display->options["name"]; foreach ($display->items as $item) { if (empty($item['depth'])) $item['depth'] = 0; ?>
			<div class="form-group checkbox" style="padding-left:<?php echo $item['depth']*15; ?>px">
				<label><input <? html_attributes("type:checkbox  class:left checkbox  name:".$name."[]  value:$item[id]".((in_array($item['id'], $display->options['value'])) ? "  checked:checked" : "")); ?>/><?= $item['label']; ?></label>
			</div>
		<?php } ?>
		<input <? html_attributes("type:hidden  name:".$name."[]  value:-~"); ?>/>
</div>
