
<a href="index.php">back to overview</a><br />

<?php
foreach($this->_['cantons'] as $canton){
?>


<table class="table table-striped">
        <thead>
            <tr><h2><a href="resolver.php?service=kantone&methode=single&id=<?php echo $canton['Kürzel'] ?>"><?php echo $canton['Kanton'] ?></a><h2></tr>
        </thead>
        <tr><td>Standesstimme:</td><td><?php echo $canton['Standesstimme']; ?></td></tr>
        <tr><td>Beitritt:</td><td><?php echo $canton['Beitritt']; ?></td></tr>
        <tr><td>Hauptort:</td><td><?php echo $canton['Hauptort']; ?></td></tr>
        <tr><td>Einwohner:</td><td><?php echo $canton['Einwohner 1']; ?></td></tr>
        <tr><td>Auslaender:</td><td><?php echo $canton['Ausländer 2']; ?></td></tr>
        <tr><td>Flaeche:</td><td><?php echo $canton['Fläche 3']; ?></td></tr>
        <tr><td>Dichte:</td><td><?php echo $canton['Dichte 4']; ?></td></tr>
        <tr><td>Gemeinden:</td><td><?php echo $canton['Gemeinden 6']; ?></td></tr>
        <tr><td>Amtssprache:</td><td><?php echo $canton['Amtssprache']; ?></td></tr>
        
</table>

<?php
}
?>