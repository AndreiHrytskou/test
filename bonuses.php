<?php
/**
  *Template Name: Страница Bonuses
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
		<?php
		$banner = get_field('banner');
		echo "<div>";
		foreach ($banner as $ban){
			?><h2 class="banner3-title"><?= $ban["banner-title"] ?></h2>
			<div class="banner3" style="background-image: url('<?= $ban["bg"] ?>')">
				<div class="banner3-box">
					<div class="banner3-box-left">
						<img src="<?= $ban["person"] ?>" alt="person">
					</div>
					<div class="banner3-box-right">
						<div  class="banner3-box-text"><?= $ban["banner-text"] ?></div>
						<div class="btn-box">
							<a href='#' class="banner-box-singup">sign up</a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}
				echo '</div>'
					?>
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
							<h3 class="questions-contant-box-title"itemprop="name"><?= $quest["questionsboxtitle"] ?></h3>
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
</div>
<?php
get_footer();