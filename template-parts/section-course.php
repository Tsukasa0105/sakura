<?php
/**
 * Course line-up section.
 */

$sakura_courses = array(
	array(
		'title' => '中学生コース',
		'text'  => '定期テスト対策から高校入試対策まで。「わからない」から「わかる」に、「わかる」から「自分で解けた」まで指導していきます。',
	),
	array(
		'title' => '高校生コース',
		'text'  => '定期テスト対策から進路選択、大学受験まで一人ひとりに合わせた個別指導でサポートしていきます。',
	),
	array(
		'title' => '定期テスト対策',
		'text'  => '出題範囲や苦手分野を整理しながら、得点につながる学習を効率よく進めます。',
	),
	array(
		'title' => '受験対策',
		'text'  => '「行ける高校、大学」ではなく「本気で行きたい高校、大学」進学を目指す学習環境を整えて、サポートしていきます。',
	),
	array(
		'title' => '期間講習',
		'text'  => '春期講習・夏期講習・冬期講習で、予習、復習、受験対策を行います。',
	),
	array(
		'title' => '指導体制',
		'text'  => '授業を先生1人と生徒2人の体制で行い、集中しやすく質問しやすい環境を整えています。',
	),
);
?>
<section class="section" id="course">
	<div class="container">
		<div class="section-heading">
			<p class="section-label">COURSE</p>
			<h2>コース</h2>
			<p>
				学年や目標に合わせて、日々の学習から受験まで無理なく積み上げていける指導を行います。
			</p>
		</div>

		<div class="course-grid">
			<?php foreach ( $sakura_courses as $sakura_course ) : ?>
				<article class="course-card">
					<h3><?php echo esc_html( $sakura_course['title'] ); ?></h3>
					<p><?php echo esc_html( $sakura_course['text'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
