<form action="include/procesa.php" method="post">
    <div id="formulario">
        <label>Nombre y apellidos:
            <input type="text" name="nombre">
        </label>
        <label>Para cuantas personas es el menu:
            <input type="number" name="cantidad_personas" min="1" max="6">
        </label>
        <label>Elige el tipo de pasta:
            <select name="tipo_pasta">
                <option value="espaguetis">Espaguetis</option>
                <option value="macarrones">Macarrones</option>
                <option value="raviolis">Raviolis</option>
            </select>
        </label>
        <label>Elige el tipo de salsa:
            <input type="radio" name="salsa" value="boloñesa">Boloñesa
            <input type="radio" name="salsa" value="carbonara">Carbonara
            <input type="radio" name="salsa" value="pesto">Pesto
        </label>
        <label>Elige una bebida: </label>
            <label><input type="checkbox" name="bebida0" value="naranja">Fanta de naranja</label>
            <label><input type="checkbox" name="bebida1" value="agua">Agua</label>
            <label><input type="checkbox" name="bebida2" value="limon">Fanta de limón</label>
            <label><input type="checkbox" name="bebida3" value="cola">Coca cola</label>
            <label><input type="checkbox" name="bebida4" value="cerveza">Cerveza</label>
        
        <label>Elige un color para el fondo:
            <input type="radio" name="fondo" value="verde">Verde
            <input type="radio" name="fondo" value="rojo">Rojo
            <input type="radio" name="fondo" value="azul">Azul
        </label>
        <label>Escribe tu opinión:
            <textarea name="comentario" cols="100" rows="4"></textarea>
        </label>
        <label>Puntua la web:
            <input type="number" name="puntuacion" min="0" max="5">
        </label>
    </div>
    <div id="botones">
        <button type="submit">Enviar</button>
        <button type="reset">Borrar</button>
    </div>
</form>