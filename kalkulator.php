<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <input type="text" name="input1" placeholder="inputan 1">
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option> 
    </select>
    <input type="text" name="input2" placeholder="inputan 2">

    <!--<input type="text" name="hasil" placeholder="hasil">-->
    <button type="submit" name="proses">Hitung</button>
    
    <?php
    if(isset($_POST['proses'])){
        // kalkulasi
        $input1 = $_POST['input1'];
        $input2 = $_POST['input2'];
        //$hasil  = $_POST['hasil'];
        $operator = $_POST['operator'];
        
        if($operator=='+'){
            $hasil = $input1+$input2;
        }elseif($operator=='-'){
            $hasil = $input1-$input2;
        }elseif($operator=='*'){
            $hasil = $input1*$input2;
        }
        else{
            $hasil = $input1/$input2;
        }
        echo $hasil;
    }
    ?>
</form>