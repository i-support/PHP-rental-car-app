<?php include "header.php" ?>
<?php include "connection.php" ?>

<title> Home </title>

<div class="container">
    <h3> Dodaj nowy samochód</h3> 
    <form role="form" action="samochod-add.php" method="post">
    <div class="row">
        
            <div class="form-group">
                <label> Numer rejestracyjny</label>
                <input name="nr_rejestracyjny" type="text" class="form-control" placeholder="Numer rejestracyjny">
            </div>
            
            <div class="form-group">
                <label> Marka</label>
                <input name="marka" type="text" class="form-control"  placeholder="marka">
            </div>
        
            <div class="form-group">
                <label> Model</label>
                <input name="model" type="text" class="form-control" placeholder="model">
            </div>
			<div class="form-group">
                <label> Rok produkcji</label>
                <input name="rok" type="number" class="form-control" placeholder="2000">
            </div>
			<div class="form-group">
                <label> Pojemność cm3</label>
                <input name="pojemnosc" type="number" class="form-control" placeholder="1998">
            </div>
			<div class="form-group">
                <label> Paliwo</label><br />
				<select name="paliwo" >
					<option>Benzyna</option>
					<option>Diesel</option>
				</select>
            </div>
			<div class="form-group">
                <label> Moc (km)</label>
                <input name="moc" type="number" class="form-control" placeholder="moc">
            </div>
			<div class="form-group">
                <label> Cena (PLN)</label>
                <input name="cena" type="number" class="form-control" placeholder="cena">
            </div>
			<div class="form-group">
                <label> Komentarz</label>
                <input name="komentarz" type="text" class="form-control" placeholder="Komentarz">
            </div>
        </div> <!-- /col --> 
        
            
        
    </div> <!-- /row --> 
    <hr>
        <button type="submit" class="btn btn-default">Dodaj</button>
    </form>
</div> <!-- end of body --> 

<?php include "footer.php" ?>

