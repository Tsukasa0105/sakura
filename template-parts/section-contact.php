<?php
/**
 * Contact section: LINE QR code + phone number.
 */
$sakura_line_url = 'https://line.me/ti/p/RNj6m2Y_64';
?>
<section class="section section-contact" id="contact">
	<div class="container">
		<div class="section-heading">
			<p class="section-label">CONTACT</p>
			<h2>お問い合わせ</h2>
			<p>
				ご質問・体験授業のお申し込みは、LINEまたはお電話でお気軽にご連絡ください。
			</p>
		</div>

		<div class="contact-grid">
			<div class="contact-card">
				<h3>LINEで相談する</h3>
				<a href="<?php echo esc_url( $sakura_line_url ); ?>" class="qr-placeholder" target="_blank" rel="noopener">
					<img
						src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/line-qr.png' ); ?>"
						alt="LINE友だち追加用QRコード"
						width="240"
						height="240"
						loading="lazy"
					>
				</a>
				<p>QRコードを読み取って友だち追加してください。</p>
			</div>

			<div class="contact-card contact-card-phone">
				<h3>お電話でのお問い合わせ</h3>
				<a href="tel:08014354888" class="btn btn-primary phone-link">080-1435-4888</a>
				<p>受付時間はお気軽にお問い合わせください。</p>
			</div>
		</div>
	</div>
</section>
