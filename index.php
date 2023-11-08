
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AJAX ORNEK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 mt-5">
                <h2 class="text-center" >İki sayının Toplamı</h2>
            <form>
                <div class="mb-3">
                    <label for="" class="form-label">1. Sayı</label>
                    <input type="text"  class="form-control" value="0" id="sayi1" >                   
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">2. Sayı</label>
                    <input type="text"  class="form-control" id="sayi2" value="0" >                   
                </div>    
                <div class="mb-3">
                    <label for="" class="form-label">Sonuç</label>
                    <input type="text" disabled  value="0" class="form-control" id="sonuc" >                   
                </div>             
                <button type="button" id="topla" class="btn btn-primary">Topla</button>
                <button type="button" id="cikar" class="btn btn-secondary">Çıkar</button>
                <button type="button" id="carp" class="btn btn-info">Çarp</button>
                <button type="button" id="bol" class="btn btn-danger">Böl</button>
            </form>    
            </div>
        </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script>
            $(function () {
                $('#topla').click(function(){
                    var sayi1=Number($("#sayi1").val());
                    var sayi2=Number($("#sayi2").val());
                    var islem="+";
                    $.ajax({ 
                        type: 'POST',
                        url: 'dortislem.php',
                        data: {
                            sayi1: sayi1,
                            sayi2:sayi2,
                            islem:islem
                        },
                        success:function(data)
                        {                       
                            $('#sonuc').val(data);           
                        } 
                            
                     });
                });
                $('#cikar').click(function(){
                    var sayi1=Number($("#sayi1").val());
                    var sayi2=Number($("#sayi2").val());
                    var islem="-";
                    $.ajax({ 
                        type: 'POST',
                        url: 'dortislem.php',
                        data: {
                            sayi1: sayi1,
                            sayi2:sayi2,
                            islem:islem
                        },
                        success:function(data)
                        {                       
                            $('#sonuc').val(data);           
                        } 
                            
                     });
                });
                $('#carp').click(function(){
                    var sayi1=Number($("#sayi1").val());
                    var sayi2=Number($("#sayi2").val());
                    var islem="*";
                    $.ajax({ 
                        type: 'POST',
                        url: 'dortislem.php',
                        data: {
                            sayi1: sayi1,
                            sayi2:sayi2,
                            islem:islem
                        },
                        success:function(data)
                        {                       
                            $('#sonuc').val(data);           
                        } 
                            
                     });
                });
                $('#bol').click(function(){
                    var sayi1=Number($("#sayi1").val());
                    var sayi2=Number($("#sayi2").val());
                    var islem="/";
                    $.ajax({ 
                        type: 'POST',
                        url: 'dortislem.php',
                        data: {
                            sayi1: sayi1,
                            sayi2:sayi2,
                            islem:islem
                        },
                        success:function(data)
                        {                       
                            $('#sonuc').val(data);           
                        } 
                            
                     });
                });
             
            })
      </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>