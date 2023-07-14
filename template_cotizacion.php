<html>
    <body>
        <header style="background-image: url('http://www.mrkados.com/images/amarillo-back.png'); width:100%; color:black; font-weight:bold; text-align:center;">
            <img src="http://www.mrkados.com/images/Logo-shadow.png" style="width:20%"/>
        </header>
        <div style="background:white; width:100%; color:black; font-weight:bold; text-align:center;">
            <p>
            {{firstname}} ha pedido una cotizacion.
             </p>
        </div>
        <div style="background:white; width:100%; color:black; text-align:center;">
            <p>
            Detalles de la Ficha:
            </p>
        </div>
        <div style="background:white; width:100%; color:black;">
            <table>
                <tr>
                    <td>Nombre: {{firstname}}</td>
                </tr>

                <tr>
                    <td>Compania: {{company}}</td>
                </tr>

                <tr>    
                    <td>Giro: {{giro}}</td>
                </tr>

                <tr>
                    <td>Servicio: {{service}}</td>
                </tr>

                <tr>
                    <td>Comentario: {{mas}}</td>
                </tr>
            </table>
        </div>
        <footer style="width:100%; text-align:center;">
            <img src="http://www.mrkados.com/images/mrkado-feliz.png" style="width:20%"/>
        </footer>
    </body>
</html>