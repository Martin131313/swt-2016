<?php  

$blogPosts = [
	[
		'naslov' => 'Title 1',
		'sodrzina' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus alias porro laudantium enim, possimus magnam debitis minima, quo amet velit accusantium placeat distinctio non, optio eaque rem libero. Excepturi, dolorem! ipsum dolor sit amet, consectetur adipisicing elit. Minima assumenda fugit, quibusdam est, optio labore tempore quas eaque delectus, modi amet, sequi placeat aliquam ipsam autem dignissimos quia sapiente blanditiis.'
	],
	[
		'naslov' => 'Title 2',
		'sodrzina' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptatem dolores soluta non ipsa quidem tenetur ad fugiat, quis, illum cupiditate mollitia aspernatur minus. Mollitia, unde explicabo eaque reprehenderit temporibus. ipsum dolor sit amet, consectetur adipisicing elit. Cum repellendus quaerat nemo alias qui voluptatibus laudantium sequi dolore quis velit recusandae iure ipsa, voluptate cumque earum totam tempora. Necessitatibus, natus.'
	],
	[
		'naslov' => 'Title 3',
		'sodrzina' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, cum iste accusantium adipisci obcaecati repudiandae saepe nostrum, dolorem, sit quasi minima quisquam voluptate, molestias ratione tempore quia explicabo! Repudiandae, esse? ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ullam, sunt veritatis quod ratione eligendi, itaque nam culpa sint soluta illum quisquam unde impedit excepturi sapiente? Tenetur hic quaerat molestiae.'
	]
];


// foreach ($blogPosts as $post) {
// 	echo '<h3>.'.$post['naslov'].'</h3>;
// 	echo '<p>'.$post['naslov'].'</p>';
// }



?>


<?php foreach($blogPosts as $post){ ?>
	<h2><?=$post['naslov']?></h2>
	<p><?=$post['sodrzina']?></p>	
<?php } ?> <!-- ova e PHP kod vo HTML se zatvara so tagovi '<?php  ?>' -->




 

