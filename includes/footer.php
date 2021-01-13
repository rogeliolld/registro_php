</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script>
      
        $(document).ready(function() {
            
            $('#registar_programador').on('click', function() {
                jQuery.validator.messages.required = 'Este campo es obligatorio.';
                jQuery.validator.messages.number = 'Este campo debe ser num&eacute;rico.';
                jQuery.validator.messages.email = 'La direcci&oacute;n de correo es incorrecta.';
                var validado = $("#registroFrm").valid();
                 if(!validado){
                    alert('El formulario no es correcto.');
                }else{
                
                $.ajax({

                    type: 'POST',
                    url: 'registre.php',
                    dataType: "json",
                    data: {
                        nombre: $('#nombre').val(),
                        apellidos: $('#apellidos').val(),
                        cedula: $('#cedula').val(),
                        correo: $('#correo').val(),
                        lenguaje: $('#lenguaje').val(),

                    },
                    success: function(data) {
                        if (data.status == 'ok') {


                            $('#nombre').val('');
                            $('#apellidos').val('');
                            $('#cedula').val('');
                            $('#correo').val('');
                            $('#lenguaje').val('');
                            $('#alerta').removeClass('d-none');
                            $('#alerta').removeClass('alert-danger');
                            $('#alerta').addClass('alert-success');
                            $('#texto-alerta').html(data.result);
                        } else {
                            $('#alerta').removeClass('d-none');
                            $('#alerta').addClass('alert-danger');
                            $('#texto-alerta').html(data.result);
                        }
                    }

                });

            }

            });

           
        });
    </script>
</body>

</html>