<?php
    $sonuc=0;
    $sayi1=0;
    $sayi2=0;
	if(isset($_POST["topla"])){
		$sayi1=$_POST["sayi1"];
		$sayi2=$_POST["sayi2"];
		$sonuc=$sayi1+$sayi2;        
	}
    else if(isset($_POST["cikar"])){
		$sayi1=$_POST["sayi1"];
		$sayi2=$_POST["sayi2"];
		$sonuc=$sayi1-$sayi2;        
	}
    else if(isset($_POST["carp"])){
		$sayi1=$_POST["sayi1"];
		$sayi2=$_POST["sayi2"];
		$sonuc=$sayi1*$sayi2;        
	}
    else if(isset($_POST["bol"])){
		$sayi1=$_POST["sayi1"];
		$sayi2=$_POST["sayi2"];
        if($sayi2>0)
        {
            $sonuc=$sayi1/$sayi2; 
            $sonuc=round($sonuc,2);
        }		  
        else
            $sonuc="Sıfıra Bölünemez!";       
	}	
	?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP ÖRNEKLER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 mt-5">
                <h2 class="text-center" >İki sayının Toplamı</h2>
            <form method="POST">
                <div class="mb-3">
                    <label for="" class="form-label">1. Sayı</label>
                    <input type="text" name="sayi1" class="form-control" value="<?php echo $sayi1 ?>" id="" >                   
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">2. Sayı</label>
                    <input type="text" name="sayi2" class="form-control" id="" value="<?php echo $sayi2 ?>" >                   
                </div>    
                <div class="mb-3">
                    <label for="" class="form-label">Sonuç</label>
                    <input type="text" disabled name="sonuc" value="<?php echo $sonuc ?>" class="form-control" id="" >                   
                </div>             
                <button type="submit" name="topla" class="btn btn-primary">Topla</button>
                <button type="submit" name="cikar" class="btn btn-secondary">Çıkar</button>
                <button type="submit" name="carp" class="btn btn-info">Çarp</button>
                <button type="submit" name="bol" class="btn btn-danger">Böl</button>
            </form>    
            </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>