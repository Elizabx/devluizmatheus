<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <title>Inicio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
    <link href="../css/custom.css" rel="stylesheet">
    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          locale: 'pt-br'
        });
        calendar.render();
      });

    </script>
  </head>
  <body>
    <div id='calendar'></div>
    <!-- Modal Visualizar-->
    <div class="modal fade" id="visualizarModal" tabindex="-1" aria-labelledby="visualizarModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="visualizarModalLabel">Detalhes do Evento</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <dl class="row">

              <dt class="col-sm-3">ID: </dt>
              <dd class="col-sm-9" id="visualizar_id"></dd>
              
              <dt class="col-sm-3">Titulo: </dt>
              <dd class="col-sm-9" id="visualizar_title"></dd>
              
              <dt class="col-sm-3">Início: </dt>
              <dd class="col-sm-9" id="visualizar_start"></dd>
              
              <dt class="col-sm-3">Fim: </dt>
              <dd class="col-sm-9" id="visualizar_end"></dd>

          </div>
          
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src='.. /JS/index.global.min.js'></script>
    <script src="../JS/bootstrap5/index.global.min.js"></script>
    
    <script src="../JS/custom.js"></script>
      
  </body>
</html>