
<h2><?php echo $title; ?></h2> 
<?php echo validation_errors(); ?> 
<?php echo form_open('quiz/create'); ?>     
    
    <table> 
        <tr>
            <td><label for="id">Kode</label></td> 
            <td><input type="input" name="id" size="30" /></td> 
        </tr>
        <tr>
            <td><label for="Nama">Nama</label></td> 
            <td><input type="input" name="Nama" size="30" /></td> 
        </tr>
        <tr>
            <td><label for="Jumlah">Jumlah</label></td> 
            <td><input type="input" name="Jumlah" size="30" /></td> 
        </tr>
        <tr>
            <td><label for="Harga">Harga</label></td> 
            <td><input type="input" name="Harga" size="30" /></td> 
        </tr>
        <tr>
            <td><label for="Total">Total</label></td> 
            <td><input type="input" name="Total" size="30" /></td> 
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Kirim" /></td>
        </tr>
</form>