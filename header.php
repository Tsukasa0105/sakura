<?php
/**
 * The header for the theme: <head> and the site navigation.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="top">
	<div class="header-inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand">
			<span class="brand-main">個別指導 さくら</span>
			<span class="brand-sub">神奈川県藤沢市辻堂</span>
		</a>

		<nav class="desktop-nav" aria-label="MENU">
			<span class="menu-label">MENU</span>
			<a href="#top">TOP</a>
			<a href="#news">講習のご案内</a>
			<a href="#teacher">講師挨拶</a>
			<a href="#course">コース</a>
			<a href="#access">アクセス</a>
			<a href="#contact">お問い合わせ</a>
		</nav>

		<button class="menu-toggle" id="menuToggle" aria-label="MENU" aria-expanded="false" aria-controls="mobileNav">
			<span class="menu-toggle-text">MENU</span>
			<span class="menu-bars">
				<span></span>
				<span></span>
				<span></span>
			</span>
		</button>
	</div>

	<nav class="mobile-nav" id="mobileNav" aria-label="MENU">
		<a href="#top">TOP</a>
		<a href="#news">講習のご案内</a>
		<a href="#teacher">講師挨拶</a>
		<a href="#course">コース</a>
		<a href="#access">アクセス</a>
		<a href="#contact">お問い合わせ</a>
	</nav>
</header>
