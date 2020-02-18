<h2><?php echo $title; ?></h2>
<a href="<?php echo site_url('quiz/create'); ?>"> Tambah </a>  


<table border='1' cellpading='4'>
	<tr>
		<td><strong>Kode</strong></td>
        <td><strong>Nama</strong></td>
        <td><strong>Jumlah</strong></td>
        <td><strong>Harga</strong></td>
        <td><strong>Total</strong></td>
		<td><strong>Action</strong></td>
	</tr>
<?php foreach($dagang as $dagang_item): ?>
	<tr>
		<td><?php echo $dagang_item['id']; ?></td> 
		<td><?php echo $dagang_item['Nama']; ?></td> 
        <td><?php echo $dagang_item['Jumlah']; ?></td> 
        <td><?php echo $dagang_item['Harga']; ?></td> 
        <td><?php echo $dagang_item['Total']; ?></td> 
		<td>
			<!-- <a href="<?php echo site_url('quiz/view/'.$dagang_item['slug']); ?>">View</a> |   -->
			<a href="<?php echo site_url('quiz/edit/'.$dagang_item['id']); ?>">Edit</a> |
			<a href="<?php echo site_url('quiz/delete/'.$dagang_item['id']); ?>" onClick="return 
				confirm('Are you sure you want to delete?')"> Delete </a>
		</td>
	</tr>
<?php endforeach; ?>
</table>