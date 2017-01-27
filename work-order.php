<?php include "header.php" ?>
<?php include "connection.php" ?>

<title> Home </title>

<div class="container">
    <h3> Dodaj nowego klienta</h3> 
    <form role="form" action="work-order-add.php" method="post">
     <div class="row">
        <div class="col-md-4">
        
            <div class="form-group">
                <label> Imię</label>
                <input name="imie" type="text" class="form-control" placeholder="Imię">
            </div>
            
            <div class="form-group">
                <label> Nazwisko</label>
                <input name="nazwisko" type="text" class="form-control"  placeholder="Nazwisko">
            </div>
        
            <div class="form-group">
                <label> Pesel</label>
                <input name="pesel" type="number" class="form-control" placeholder="Pesel">
            </div>
			<div class="form-group">
                <label> Miasto</label>
                <input name="miasto" type="text" class="form-control" placeholder="Miasto">
            </div>
		</div>	
		<div class="col-md-4">
			<div class="form-group">
                <label> Ulica</label>
                <input name="ulica" type="text" class="form-control" placeholder="Ulica">
            </div>
			<div class="form-group">
                <label> Kod pocztowy</label>
                <input name="kod_pocztowy" type="number" class="form-control" placeholder="Kod pocztowy">
            </div>
			<div class="form-group">
                <label> Telefon</label>
                <input name="telefon" type="number" class="form-control" placeholder="Telefon">
            </div>
		</div>	
		<div class="col-md-4">
			<div class="form-group">
                <label> Komentarz</label>
                <textarea name="komentarz" type="text" class="form-control" placeholder="Komentarz"cols="50" rows="12"></textarea>
            </div>
        </div> <!-- /col --> 
        
            
        
    </div> <!-- /row --> 
    <hr>
        <button type="submit" class="btn btn-default">Dodaj</button>
    </form>
</div> <!-- end of body --> 

<?php include "footer.php" ?>

