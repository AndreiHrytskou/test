<?php
/**
  *Template Name: Страница Mobile App
*@link https://developer.wordpress.org/themes/basics/template-hierarchy/

*Template Post Type: page
 */

 get_header();

?>

<div class="wrapper">
	<div class="container">
		<div class="banner" style="background-image: url('<?php the_field("banner1-bg") ?>')">
			
			<div>
					<div i itemscope="" itemtype="http://schema.org/BreadcrumbList">
						<div class="page" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
							<a href="<?php the_field("home-link") ?>" class="page-link" itemprop="item">
								<span itemprop="name"><?php the_field("page") ?></span>
								<meta itemprop="position" content="1">
							</a>
							<span class="check">
								<a href="<?php the_field("page-link") ?>"><?php the_field("check") ?></a>
							</span>
						</div>
					</div>
					<h1 class="banner-title"><?php the_field("title-banner") ?></h1>
					<div class="banner-box">
						<div class="banner-box-btn">
							<a href="#" class="banner-box-singup">sign up</a>
						</div>
					</div>
				</div>
				<img src="<?php the_field("bg1-1") ?>" alt="bg1-1" class="banner-img">
			</div>
		</div>
	</div>
</div>
<div class="wrapper">
	<div class="container">
		<div class="contant">
			<h2 class="contant-title"><?php the_field("contant-title") ?></h2>
			<div class="contant-text"><?php the_field("contant-text") ?></div>
		</div>
	</div>
</div>
<div class="color-footer">
	<div class="wrapper footer-wrapper" >
		<div class="container">
			<div class="download-container">
				<div class="download-rating">
					<div class="mobile-rank-wrap" itemscope="" itemtype="https://schema.org/Game">
						<span class="mobile-rank-text">Reviews from Gamblers <span itemprop="name" content="Casinowoo"></span>
							<span itemprop="description" content="Ещё один сайт на WordPress"></span>
						</span>
           			<div itemprop="aggregateRating" itemscope="" itemtype="https://schema.org/AggregateRating">
              			<p class="mobile-rank-rating">
								<span itemprop="ratingValue" content="99"></span>
								<span itemprop="worstRating" content="1"></span>
								<span itemprop="bestRating" content="100"></span>
								<span itemprop="ratingCount" content="894"></span>
              			</p>
            		</div>
            		<div class="mobile-star-rank">
              			<div class="mobile-rank-star-block">
								<span class="mobile-rank-star"><img src="<?php the_field("rating-star") ?>" alt="star"></span>
								<span class="mobile-rank-star"><img src="<?php the_field("rating-star") ?>" alt="star"></span>
								<span class="mobile-rank-star"><img src="<?php the_field("rating-star") ?>" alt="star"></span>
								<span class="mobile-rank-star"><img src="<?php the_field("rating-star") ?>" alt="star"></span>
								<span class="mobile-rank-star-1"><img src="<?php the_field("star-1") ?>" alt="star"></span>
              			</div>
              			<span class="mobile-rank-value">Rank: 
								<span class="mobile-rank-num" itemprop="ratingValue">99</span>
								<span class="mobile-rank-best" itemprop="bestRating">/100</span> 
								<span itemprop="worstRating" content="1"></span>
								<span itemprop="ratingCount" content="787"></span>
							</span>
            		</div>
          		</div>
				</div>
				<div class="download">
					<img src="<?php the_field("logo") ?>" alt="logo" class="download-img">
					<a href="<?php the_field("download-link") ?>" class="download-box">
						<img src="<?php the_field("download") ?>" alt="download" class="download-img-icon">
						<p class="download-box-singup">download</p>
					</a>
				</div>
			</div>
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
		<div class="bonuses-btn-box">
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
		<div class="bonuses-btn-box">
			<a href="#" class="banner-box-singup">sign up</a>
		</div>
	</div>
</div>
<div class="wrapper">
	<div class="container">
		<div class="questions" itemscope="" itemtype="https://schema.org/FAQPage">
			<h2 class="questions-title"><?php the_field("questions-title") ?></h2>
			<?php 
					$questions = get_field("questions-box");
					echo '<div class="questions-contant">';
					foreach ($questions as $quest){
						?>
						<div class='questions-contant-box' itemprop='mainEntity' itemscope='' itemtype='https://schema.org/Question'>
							<h3 class="questions-contant-box-title" itemprop="name"><?= $quest["questionsboxtitle"] ?></h3>
							<span itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
								<div class="questions-contant-box-answer" itemprop="text"><?= $quest["questions-box-answer"] ?></div>
							</span>
						</div>
						<?php
						}
						echo "</div>";
						?>
		</div>
</div>
<?php
get_footer();