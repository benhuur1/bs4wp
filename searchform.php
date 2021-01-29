      <form role="search" method="get" action=" <?php echo home_url( '/' ); ?>">

      	<div class="input-group">

      		<input type="search" class="form-control" value="<?php echo get_search_query(); ?> " name="s"/>

      		<div class="input-group-append">

      			<button type="submit" class="btn btn-my-color-5">Buscar</button>

      		</div>

      	</div>
      	
      </form>