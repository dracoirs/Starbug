<h2>Update Subscription</h2>
<div data-dojo-type="payment/Order" data-dojo-props="query:{order:<?php echo $order["id"]; ?>}"></div>
<div style="clear:both"></div>
<div class="row">
	<div class="col-sm-6">
<?php $this->displays->render("PaymentForm", array("id" => $order["id"])); ?>
	</div>
</div>