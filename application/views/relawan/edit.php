
<h2><?php echo $title; ?></h2> 
<?php echo validation_errors(); ?> 
<?php echo form_open('crelawan/edit/'.$news_item['id']); ?> 

    <table> 
        <tr>
            <td><label for="id">Id</label></td> 
            <td><input type="input" name="id" size="50" value="<?php echo $news_item['id'] ?>"/></td>
        </tr>
        <tr>
            <td><label for="nim">Nim</label></td> 
            <td><input type="input" name="nim" size="50" value="<?php echo $news_item['nim'] ?>"/></td>
        </tr>
        <tr>
            <td><label for="nama">Nama</label></td> 
            <td><input type="input" name="nama" size="50" value="<?php echo $news_item['nama'] ?>"/></td>
        </tr>
        <tr>
            <td><label for="alamat">Alamat</label></td> 
            <td><input type="input" name="alamat" size="50" value="<?php echo $news_item['alamat'] ?>"/></td>
        </tr>
        <tr>
            <td><label for="notelp">Notelp</label></td> 
            <td><input type="input" name="notelp" size="50" value="<?php echo $news_item['notelp'] ?>"/></td>
        </tr>
        <tr>
            <td><label for="kdwil">Kode Wilayah</label></td> 
            <td><input type="input" name="kdwil" size="50" value="<?php echo $news_item['kdwil'] ?>"/></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit news item" /></td> 
        </tr>
    </table>
</form>