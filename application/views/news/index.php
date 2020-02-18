<h2><?php echo $title; ?></h2>
<marquee direction=right>
<a href="<?php echo site_url('news/create'); ?>"> Tambah </a>  
</marquee>
<marquee>
<table border='1' cellpading='4'>
	<tr>
		<td><strong>Id</strong></td>
		<td><strong>Title</strong></td>
		<td><strong>Content</strong></td>
		<td><strong>Action</strong></td>
	</tr>
<?php foreach($news as $news_item): ?>
	<tr>
		<td><?php echo $news_item['id']; ?></td> 
		<td><?php echo $news_item['title']; ?></td> 
		<td><?php echo $news_item['text']; ?></td> 
		<td>
			<a href="<?php echo site_url('news/view/'.$news_item['slug']); ?>">View</a> |  
			<a href="<?php echo site_url('news/edit/'.$news_item['id']); ?>">Edit</a> |
			<a href="<?php echo site_url('news/delete/'.$news_item['id']); ?>" onClick="return 
				confirm('Are you sure you want to delete?')"> Delete </a>
		</td>
	</tr>
<?php endforeach; ?>
</table>