
    <form action="./retirar" method="post">
        <fieldset id="datos_estudiante">
            <legend>Datos del  Estudiante</legend>
            <div class="input_element">
                <label for="name_st">Nombre</label>
                <input name="name_st" type="text">
            </div>
            <div class="input_element">    
                <label for="lastname_st">Apellido</label>
                <input name="lastname_st" type="text">
            </div>
            <div class="input_element">
                <label for="dni_st">Cedula de identidad</label>
                <input name="dni_st" type="number">
            </div>
            <div class="input_element">
                <label for="degreeprogram_st">Carrera</label>
                <input name="degreeprogram_st" type="text">
            </div>
            <div class="input_element">
                <label for="numsemester_st">Numero de semestre con mas materias inscritas</label>
                <input name="numsemester_st" type="number">
            </div>
        </fieldset>
        <fieldset id="datos_asignatura">
            <legend>Datos de la asignatura</legend>
            <div class="input_element">
                <label for="name_course">Nombre de la asignatura</label>
                <input name="name_course" type="text">
            </div>
            <div class="input_element">
                <label for="id_course">Codigo de Asignatura</label>
                <input name="id_course" type="text">
            </div>
            <div class="input_element">
                <label for="uc_course">Unidades de Credito de la asignatura</label>
                <input name="uc_course" type="number">
            </div>
            <div class="input_element">
                <label for="cause"></label>
                <textarea name="cause" id="cause" cols="30" rows="10"></textarea>
            </div>
        </fieldset>
        <input type="hidden" name="hash" value="<?php echo HASH ?>">
        <button type="submit">
            Procesar Retiro
        </button>
    </form>