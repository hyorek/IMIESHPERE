print ("Inserer name : ");
file = input();

cont = open("application/controleurs/"+file+"Controler.php", "x")
cont.write("<?php ?>")
cont.close
mod = open("application/models/"+file+"Model.php", "x")
mod.write("<?php ?>")
mod.close
view = open("application/views/IMIE/"+file+".php", "x")
view.write("<main></main>")
view.close