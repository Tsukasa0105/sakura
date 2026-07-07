<?php
/**
 * Course line-up section.
 */

$sakura_courses = array(
	array(
		'title' => '中学生コース',
		'text'  => '学校内容の理解を深めながら、定期テスト対策と基礎力の定着を重視して進めます。',
	),
	array(
		'title' => '高校生コース',
		'text'  => '日々の学習管理から評定対策、受験を見据えた学習まで丁寧に対応します。',
	),
	array(
		'title' => '定期テスト対策',
		'text'  => '出題範囲や苦手分野を整理しながら、得点につながる学習を効率よく進めます。',
	),
	array(
		'title' => '受験対策',
		'text'  => '志望校や現在の状況に応じて、必要な単元を見極めながら着実に取り組みます。',
	),
	array(
		'title' => '期間講習',
		'text'  => '春期・夏期・冬期それぞれの時期に合わせて、復習・先取り・受験準備を行います。',
	),
	array(
		'title' => '指導体制',
		'text'  => 'すべての授業を先生1人と生徒2人の体制で行い、集中しやすく質問しやすい環境を整えています。',
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
