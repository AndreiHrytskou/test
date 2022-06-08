<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package woo-casino
 */

get_header();
?>
<div class="wrapper">
	<div class="container">
		<div class="banner" style="background-image: url('<?php the_field("banner1-bg") ?>')">
			<div>
					<h1 class="banner-title"><?php the_field("title-banner") ?></h1>
					<div class="banner-box">
						<div class="banner-box-btn">
							<a href="#" class="banner-box-singup">sign up</a>
						</div>
						<div class="banner-rating">
							<div class="banner-box-rating">
								<div class="banner-box-rating-item" itemscope="" itemtype="https://schema.org/Game">
									<div itemprop="aggregateRating" itemscope="" itemtype="https://schema.org/AggregateRating">
									<div>
										<div itemprop="itemreviewed" content="Cookiecasino"></div>
										<span itemprop="ratingValue" content="4"></span>
										<span itemprop="worstRating" content="1"></span>
										<span itemprop="bestRating" content="5"></span>
										<span itemprop="ratingCount" content="894"></span>
									</div>
                    </div>
								<h4 class="banner-box-rating-title">Rating:</h4>
								<img src="<?php the_field("star") ?>" alt="star" class="banner-box-rating-star">
								<img src="<?php the_field("star") ?>" alt="star" class="banner-box-rating-star">
								<img src="<?php the_field("star") ?>" alt="star" class="banner-box-rating-star">
								<img src="<?php the_field("star") ?>" alt="star" class="banner-box-rating-star">
								<img src="<?php the_field("star") ?>" alt="star" class="banner-box-rating-star">
								<p class="banner-box-rating-voice" itemprop="ratingValue">(857 Votes)</p>
								<span class="rank-best" itemprop="bestRating"></span> 
								<span itemprop="worstRating" content="1"></span>
								<span itemprop="ratingCount" content="787"></span>
							</div>
							<div class="banner-box-rating-safe">
								<span>Safe Online Casino in Canada's Gambling Market</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<img src="<?php the_field("bg1-1") ?>" alt="bg1-1" class="banner-img">
		</div>
	</div>
</div>
	<div class="wrapper">
	<div class="container">
		<div class="contant">
			<h2 class="contant-title"><?php the_field("contant-title") ?></h2>
			<div class="contant-text"><?php the_field("contant-text") ?></div>
		</div>
		<div class="banner2" style="background-image: url('<?php the_field("banner2-bg") ?>')">
			<img src="<?php the_field("banner1-2") ?>" alt="person1" class="banner2-img">
			<div class="banner2-box">
				<div class="banner2-box-text"><?php the_field("banner-text") ?><br><span class="pink"><?php the_field("banner-pink") ?></span><br><span class="blue"><?php the_field("banner-blue") ?></span><br><span class="bold"><?php the_field("banner-bold") ?></span></div>
				<div class="btn-box">
					<a href="#" class="banner-box-singup">sign up</a>
				</div>
			</div>
			<img src="<?php the_field("banner1-3") ?>" alt="person2" class="banner2-img">
		</div>
	</div>
</div>
<div class="wrapper">
	<div class="container">
		<?php
		$descriptions = get_field('description');
		echo '<div class="description">';
		foreach ($descriptions as $descrip){
			?>
			<h2 class="description-title"><?= $descrip["description-title"] ?></h2>
			<div class="description-text"><?= $descrip["description-text"] ?></div>
		<?php
		}
					echo '</div>';
					?>
		<div class="text-btn">
			<a href="#" class="banner-box-singup">sign up</a>
		</div>
		<?php
		$descript = get_field('descript');
		echo '<div class="description">';
		foreach ($descript as $desc){
			?>
			<h2 class="description-title"><?= $desc["description2-title"] ?></h2>
			<div class="description-text"><?= $desc["description2-text"] ?></div>
		<?php
		}
					echo '</div>';
					?>
		<div class="text-btn">
			<a href="#" class="banner-box-singup">sign up</a>
		</div>
		<div class="questions" itemscope="" itemtype="https://schema.org/FAQPage">
			<h2 class="questions-title"><?php the_field("questions-title") ?></h2>
					<?php 
					$questions = get_field("questions-box");
					echo '<div class="questions-contant">';
					foreach ($questions as $quest){
						?>
						<div class='questions-contant-box' itemprop='mainEntity' itemscope='' itemtype='https://schema.org/Question'>
							<h3 class="questions-contant-box-title" itemprop="name"><?= $quest["questionsboxtitle"] ?></h3>
							<div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
								<div class="questions-contant-box-answer" itemprop="text"><?= $quest["questions-box-answer"] ?></div>
							</div>
						</div>
						<?php
					}
						echo "</div>";
						?>
			</div>	
		</div>
	</div>

<?php
get_footer();
