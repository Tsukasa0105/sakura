<?php
/**
 * News section.
 * Pulls the 3 latest posts from the standard WordPress blog (Posts screen)
 * so this area can be updated from the admin, as noted in the CodePen copy.
 * If no posts have been published yet, the original mock-up copy is shown instead.
 */

$sakura_news_query = new WP_Query(
	array(
		'post_type'           => 'post',
		'posts_per_page'      => 3,
		'ignore_sticky_posts' => true,
		'no_found_rows'       => true,
	)
);
?>
<section class="section" id="news">
	<div class="container">
		<div class="section-heading">
			<p class="section-label">NEWS</p>
			<h2>講習のご案内</h2>
			<p>
				こちらはCMSで更新投稿する想定のエリアです。春期・夏期・冬期講習などのお知らせ掲載に対応できます。
			</p>
		</div>

		<div class="news-layout">
			<div class="image-placeholder news-image">
				<span>画像が入ります</span>
			</div>

			<div class="news-list">
				<?php if ( $sakura_news_query->have_posts() ) : ?>
					<?php
					while ( $sakura_news_query->have_posts() ) :
						$sakura_news_query->the_post();
						$sakura_categories = get_the_category();
						$sakura_tag_name   = ! empty( $sakura_categories ) ? $sakura_categories[0]->name : '講習';
						?>
						<article class="news-card">
							<div class="news-meta">
								<span><?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?></span>
								<span class="tag"><?php echo esc_html( $sakura_tag_name ); ?></span>
							</div>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 40 ) ); ?></p>
						</article>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<article class="news-card">
						<div class="news-meta">
							<span>2026.06.01</span>
							<span class="tag">講習</span>
						</div>
						<h3>夏期講習のご案内を掲載予定です。</h3>
						<p>CMS連携を想定した投稿エリアです。実運用時には投稿機能で更新できます。</p>
					</article>

					<article class="news-card">
						<div class="news-meta">
							<span>2026.03.01</span>
							<span class="tag">講習</span>
						</div>
						<h3>春期講習のご案内を掲載予定です。</h3>
						<p>短期集中で基礎の定着と次学年への準備を行うための講習を想定しています。</p>
					</article>

					<article class="news-card">
						<div class="news-meta">
							<span>2025.11.01</span>
							<span class="tag">講習</span>
						</div>
						<h3>冬期講習のご案内を掲載予定です。</h3>
						<p>受験対策や定期テスト対策に合わせて、必要な学習内容を整理して取り組みます。</p>
					</article>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
