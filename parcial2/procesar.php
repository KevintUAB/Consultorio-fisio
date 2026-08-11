<?php 
echo "<h1>Cita reservada en Óptica Mirasol</h1>"; 
echo "<p>Nombre: " . $_POST["nombre"] . "</p>"; echo "<p>Correo: " . $_POST["correo"] . "</p>"; 
echo "<p>Consulta: " . $_POST["consulta"] . "</p>"; 

$servicios = [ "Examen de vista - Bs 50", "Armazón clásico - Bs 180", "Lentes de sol - Bs 120" ]; 
echo "<h2>Servicios de la óptica</h2>"; 
echo "<ul>"; 
foreach ($servicios as $servicio) { 
    echo "<li>" . $servicio . "</li>"; 
} 
echo "</ul>"; 
echo "<p>Te atiende Kevin Yasmani Toledo Apulaca.</p>"; 
?>