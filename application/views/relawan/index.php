<h2><?php echo $title; ?></h2>
<a href="<?php echo site_url('crelawan/create'); ?>"> Tambah </a>  
<table border='1' cellpading='4'>
	<tr>
		<td><strong>Id</strong></td>
		<td><strong>Nim</strong></td>
		<td><strong>Nama</strong></td>
        <td><strong>Alamat</strong></td>
		<td><strong>Notelp</strong></td>
        <td><strong>Kode Wilayah</strong></td>
        <td><strong>Action</strong></td>
	</tr>
<?php foreach($relawan as $news_item): ?>
	<tr>
		<td><?php echo $news_item['id']; ?></td> 
		<td><?php echo $news_item['nim']; ?></td> 
		<td><?php echo $news_item['nama']; ?></td> 
        <td><?php echo $news_item['alamat']; ?></td> 
        <td><?php echo $news_item['notelp']; ?></td> 
        <td><?php echo $news_item['kdwil']; ?></td> 
		<td>
			<a href="<?php echo site_url('crelawan/edit/'.$news_item['id']); ?>">Edit</a> |
			<a href="<?php echo site_url('crelawan/delete/'.$news_item['id']); ?>" onClick="return 
				confirm('Are you sure you want to delete?')"> Delete </a>
		</td>
	</tr>
<?php endforeach; ?>
</table>