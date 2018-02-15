<?php 
	$post_sid = get_the_ID();
	$porcentaje = tec_get_percentage($post_sid,'Activo');

?>

	<div class="candidateHeader">
		<div class="candidateHeader__image" style=" background-image: url( <?php echo the_post_thumbnail_url('full'); ?> ); ">
			
			<div class="candidateHeader__filter">
				
				<div class="candidateHeader__information">
					<h1 class="candidateHeader__title">
						<?php the_title(); ?>
					</h1>
					
					<p class="candidateHeader__party">
						<?php 
							$party =  get_post_meta( $post_sid , 'party_name' , true);
							echo($party); 
						?>
					</p>
					
				</div>
			</div>

			
		</div>

		<div class="candidateHeader__statics">
			<h5>Últimos resultados de la encuesa</h5>
			<p>Encuesta del <?php echo $date[0]['start_date']; ?> al <?php echo $date[0]['end_date']; ?> </p>
			<div class="candidateHeader__progress">
				
				

	  			<div class="big c100 p<?php echo $porcentaje[0]['porcentaje']; ?>">
				  <span><?php echo $porcentaje[0]['porcentaje']; ?>%</span>
				  <div class="slice">
				    <div class="bar"></div>
				    <div class="fill"></div>
				  </div>
				</div>
				
			</div>

			<div class="candidate__actions candidateHeader-actions">
					<div class="candidate__more__container candidate__more__container-header">
						<a candidate-url=" <?php the_permalink(); ?> " candidate-sid="<?php echo $post_sid; ?>" id="btn__vote" class="icon-like candidate__more__news btn__vote">
							Votar
						</a>
						
					</div>

					<div class="candidate__share-header">
						<a onclick="window.open(this.href, 'newwindow', 'width=600, height=600'); return false;" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();  ?>" class="icon-facebook-circled"> </a>
						<a onclick="window.open(this.href, 'newwindow', 'width=600, height=600'); return false;" target="_blank" href="https://twitter.com/home?status=<?php the_permalink();  ?>" class="icon-twitter-circled"></a>	
					</div>


					
			</div>

		</div>

	</div>