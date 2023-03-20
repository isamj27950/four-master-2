
		<!--  header -->
		<?php 
     $title = "Les Recettes sucrées";
    include('partials/_header.php')
    ?>
		<!-- body/content -->
		<main>
			<section class="container pt-24 pb-24">
				<h2 class="section_h2 text-5xl text-[#333A7B] font-semibold pb-16">Nos gateaux sucrés</h2>
				<div class="section_card flex place-content-between">
					<!-- card1 -->
					<a href="product.php">
						<div class="card_container shadow rounded-3xl bg-[#fff] w-72">
							<!-- box image -->
							<div class="image h-56">
								<img src="images/yaourt.jpeg" alt="gateau au yaourt" class="w-full h-full object-over" />
							</div>
							<!-- card body -->
							<div class="card_body px-7 py-5">
								<h3 class="pb-4 font-black">Gateau au yaourt</h3>
								<div class="card_description pb-10">
									<p>
										Lorem ipsum dolor sit amet consectetur adipisicing elit.
										Accusamus, iure!
									</p>
								</div>
								<div class="card_body_bottom text-gray-light flex justify-between items-center pt-2">
									<p>3 avis</p>
									<p class="text-right text-sm">
										Note : <span class="text-bold-700">3/5</span>
									</p>
								</div>
							</div>
						</div>
					</a>
					<!-- card2 -->
					<a href="product.php">
						<div class="card_container  shadow rounded-3xl bg-[#fff] w-72 ">
							<!-- box image -->
							<div class="image">
								<img
									src="images/gateau_chocolat.jpeg"
									alt="gateau au chocolat"
									 class="w-full h-full object-over" 
									 />
							</div>
							<!-- card body -->
							<div class="card_body  px-7 py-5">
								<h3 class="pb-4 font-black" >Gateau au chocolat</h3>
								<div class="card_description  pb-10">
									<p>
										Lorem ipsum dolor sit amet consectetur adipisicing elit.
										Accusamus, iure!
									</p>
								</div>
								<div class="card_body_bottom text-gray-light flex justify-between items-center pt-2">
									<p>3 avis</p>
									<p class="text-right text-sm">
										Note : <span class="text-bold-700">3/5</span>
									</p>
								</div>
							</div>
						</div>
					</a>
					<!-- card3 -->
					<a href="product.php">
						<div class="card_container  shadow rounded-3xl bg-[#fff] w-72">
							<!-- box image -->
							<div class="image">
								<img src="images/brownies_couverture.jpg" alt="brownies" class="w-full h-full object-over"   />
							</div>
							<!-- card body -->
							<div class="card_bodypx-7 py-5 ">
								<h3 class="pb-4 font-black">Browny</h3>
								<div class="card_description pb-10">
									<p>
										Lorem ipsum dolor sit amet consectetur adipisicing elit.
										Accusamus, iure!
									</p>
								</div>
								<div class="card_body_bottom text-gray-light flex justify-between items-center pt-2">
									<p>3 avis</p>
									<p class="text-right text-sm">
										Note : <span class="text-bold-700">3/5</span>
									</p>
								</div>
							</div>
						</div>
					</a>
				</div>
			</section>
		</main>

		<!-- footer -->
		<?php
		include('partials/_footer.php')
		?>