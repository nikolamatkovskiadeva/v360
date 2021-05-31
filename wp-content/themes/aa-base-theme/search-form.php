<form class="container" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="row justify-content-center">
		<div class="col-xl-8">
			<div class="row">
				<div class="col">
					<label for="s">Enter a new search</label>
				</div>
			</div>
			<div class="row">
				<div class="col search-bar-col">
					<input type="text" class="search-field" name="s" id="s" placeholder="" />
					<button type="submit" class="submit" name="submit" id="searchsubmit"><i class="fas fa-chevron-right"></i></button>
				</div>
			</div>
		</div>
	</div>
</form>