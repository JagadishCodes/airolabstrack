<?php
/**
 * Template Name: Leadership Team
 *
 * @package hitmag
 */

get_header();

$team = get_field('team');
$details = $team['member_details'];
?>

<section id="story-sec4">
	<div class="container">

		<div class="sec-heading-wrap">
			<h2><?php echo $team['heading']; ?></h2>
		</div>

		<div class="row">

			<?php $i=1; foreach($details as $md) { ?>

			<div class="col-md-3 col-sm-3 col-xs-6 van-p-15">

				<a href="#m<?php echo $i; ?>" data-toggle="modal">

					<div class="van-wrap">

						<img src="<?php echo $md['profile_image']; ?>" 
						alt="<?php echo $md['name']; ?>" 
						class="img_width">

						<div class="van-title-wrap">

							<div class="van-title">
								<h4><?php echo $md['name']; ?></h4>
								<p><?php echo $md['designation']; ?></p>
							</div>

							<div class="van-arrow">
								<img src="/wp-content/uploads/2024/04/div-icnArrow.svg">
							</div>

						</div>

					</div>

				</a>

			</div>

			<!-- MODAL -->

			<div class="modal media-mod team-modal" id="m<?php echo $i; ?>">

				<div class="container-l-auto">

					<div class="modal-dialog">

						<div class="modal-content">

							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">
									&times;
								</button>
							</div>

							<div class="modal-body">

								<div class="team-modal-wrap">

									<div class="row">

										<div class="col-md-2 col-sm-2 col-xs-12 p-0">

											<div class="team-mod-img">

												<img src="<?php echo $md['profile_image']; ?>" 
												alt="<?php echo $md['name']; ?>">

											</div>

										</div>

										<div class="col-md-10 col-sm-10 col-xs-12 p-0 md-border">

											<div class="van-title team-mod-title">

												<h2><?php echo $md['name']; ?></h2>

												<p><?php echo $md['designation']; ?></p>

											</div>

										</div>

									</div>

									<div class="row">

										<div class="col-md-2 col-sm-2 col-xs-12 p-0"></div>

										<div class="col-md-10 col-sm-10 col-xs-12 p-0 md-border">

											<div class="van-desc">

												<?php echo $md['description']; ?>

											</div>

											<?php if($md['link']){ ?>

											<div class="md-border p-35 bl-0">

												<a href="<?php echo $md['link']; ?>" 
												target="_blank">

													LinkedIn

												</a>

											</div>

											<?php } ?>

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

			<?php $i++; } ?>

		</div>

	</div>
</section>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<?php get_footer(); ?>