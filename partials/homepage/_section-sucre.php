<!-- section sucré -->
<section class="container  pt-24 pb-24">
	<h2 class="section_h2 text-5xl text-[#333A7B]-600 pb-10 font-semibold">Nos gateaux sucrés</h2>
		<div class="section_card flex place-content-between">
			<?php
                foreach($productsSucres as $product) {
                 include("partials/_card.php");
                 }
             ?>
        </div>
				<!-- button more ++ -->
			<?php
                include("partials/_btn.php")
             ?>
</section>