<?php get_header(); ?>
					<div class="content col-lg-push-3 col-lg-9 col-md-push-3 col-md-9 ">

						<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
							<?php if(function_exists('bcn_display'))
							{
								bcn_display();
							}?>
						</div>

						<h1 class="mb20"><?php echo single_term_title(); ?></h1>

						<div class="casino-items">
							<div class="row">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<div class="casino-item">
										<div class="casino-icon">
											<img src="<?php echo kama_thumb_src("w=194 &h=141") ?>">
											<div class="casino-btns">
												<a href="<?php the_field('home_link') ?>">Играть на деньги</a>
												<a href="<?php the_permalink(); ?>">Играть бесплатно</a>
											</div>
										</div>
										<div class="casino-rate">
											<span class="text-descr">Рейтинг</span>
											<div class="stars clearfix">
												<?php if(function_exists("kk_star_ratings")) : echo kk_star_ratings($pid); endif; ?>
											</div>
										</div>
										<div class="casino-name"><?php the_title(); ?></div>
									</div>
								</div>
								<?php endwhile;
								else: echo '<div class="h2">Нет записей.</div>'; endif; ?>

							</div>
						</div>

						<div class="pagination">
							<?php pagination(); ?>
						</div>

						<?php $description = term_description(); ?>

						<?php if (!$description == null) { echo '<div class="bg-purple block">'. $description. '</div>'; } ?>


					</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>