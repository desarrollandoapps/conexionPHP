<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Formulario</title>
</head>
<body>
    <main class="container">
        <h1 class="text-center my-3">Formulario de registro</h1>
        <div class="card bg-light rounded shadow mb-3">
            <h5 class="card-header lead text-center">Registro</h5>
            <div class="card-body">
                <form action="php/acciones.php" method="post" class="needs-validation" novalidate>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" required>
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="edad" name="edad" placeholder="nombre">
                        <label for="edad">Edad</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="nombre">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="departamento" name="departamento" placeholder="nombre">
                        <label for="departamento">Departamento</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="municipio" name="municipio" placeholder="nombre">
                        <label for="municipio">Municipio</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="genero" name="genero">
                            <option selected value="" disabled>Seleccione...</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                        <label for="genero">Género</label>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="acepto" id="acepto" value=1 checked>
                            <label class="form-check-label" for="acepto">
                                Acepto
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="acepto" id="acepto" value=0>
                            <label class="form-check-label" for="acepto">
                                No acepto
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Regístrame</button>
                    <button type="reset" class="btn btn-info">Limpiar</button>
                </form>
            </div>
        </div>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
            }, false)
        })
        })()
    </script>

    
</body>
</html>