<div class="agregaPerfiles">
    <div class="nav_wrapper">
    <nav class="nav-menu">
        <ul class="clearfix"> 
            <a href='?c=administracionDeReservaciones'>
                <li style="margin-right: 20px; color: black;">Administrar Reservación</li> 
            </a>
            <a href='?c=vistazoCalendario'>
                <li style="margin-right: 20px; color: black;">Vistazo Calendario</li>
            </a>   
            <a href='?c=reportes'>
                <li style="margin-right: 20px; color: black;">Reportes</li>
            </a>
            <a href='?c=administracionPerfiles'>
                <li style="margin-right: 20px; color: black;">Administración de Perfiles</li>
            </a> 
        </ul>  
    </nav>

    </div><br>
    <form action="?c=administracionPerfiles" method="post">
        <div class="agregarPerfcuerpo" style="border: solid 2px; width: 300px; margin: auto; padding: 10px;" >
            <label>NUEVO PERFIL</label>
            <hr/>
            <label style="margin-left: 20px;">ID</label>
            <input name="idPatrocinador"type="text" style="margin-left: 55px;">
            <br><br>
            <label style="margin-left: 5px;">NOMBRE</label>
            <input name="nombre" type="text" style="margin-left: 15px;">
            <br><br>
            <label>CORREO</label>
            <input name="correo"type="text" style="margin-left: 25px;">
            <br><br>
            <label>CLAVE</label>
            <input name="clave" type="text" style="margin-left: 30px;">
            <br><br>
            <label style="margin-left: 1px;">TELEFONO</label>
            <input name="tel"type="tel" style="margin-left: 10px;">
            <br><br>
            <label style="margin-left: 30px;">TIPO</label>
            <select name="tipo"style="margin-left: 20px;">
                <option value="Suplente">Suplente</option>
                <option value="Administrador">Administrador</option>
            </select>
            <br><br>
            <button type="submit"  value="GuardarP" name="a" class="botonesAgregarPerfil">Guardar</button>
            <button type="submit"  value="Cancelar" name="a" class="botonesAgregarPerfil">Cancelar</button>
        </div>
    </form>
    
</div>