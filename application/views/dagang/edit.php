
<h2><?php echo $title; ?></h2> 
<?php echo validation_errors(); ?> 
<?php echo form_open('quiz/edit/'.$dagang_item['id']); ?> 

    <table> 
        <tr>
            <td><label for="id">Kode</label></td> 
            <td><input type="input" name="id" size="50" value="<?php echo $dagang_item['id'] ?>"/></td>
        </tr>
        <tr>
            <td><label for="Nama">Nama</label></td> 
            <td><input type="input" name="Nama" size="50" value="<?php echo $dagang_item['Nama'] ?>"/></td>
        </tr>
        <tr>
            <td><label for="Jumlah">Jumlah</label></td> 
            <td><input type="input" name="Jumlah" size="50" value="<?php echo $dagang_item['Jumlah'] ?>"/></td>
        </tr>
        <tr>
            <td><label for="Harga">Harga</label></td> 
            <td><input type="input" name="Harga" size="50" readonly value="<?php echo $dagang_item['Harga'] ?>"/></td>
        </tr>
        <tr>
            <td><label for="Total">Total</label></td> 
            <td><input type="input" name="Total" size="50" readonly value="<?php echo $dagang_item['Total'] ?>"/></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Kirim" /></td> 
        </tr>
    </table>
</form>