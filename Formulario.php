<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@700&family=Inter:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./styleFormulario.css">
    <title>login</title>
</head>

<body>
    <h1 class="tituloformulario">Formulario</h1>  

    
    <form class="contenido" method="post">
        <div  class="nombre">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>


        <div>   
        <label for="nombre">Apellido:</label>
            <input type="text" id="Apellido" name="apellido" required>
        </div>


        <div class="email">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="opciones"> Seleccione una opcion</label>
            <select id="opciones" name=""opciones>
                <option value="disabled selected hidden>seleccione..."</option>
                <option value="1">Robot1</option>
                <option value="2">Robot2</option>
                <option value="3">Robot3</option>
                <option value="4">Robot3</option>
                
            </select>
        </div>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</body>
</html>






















</body>

    