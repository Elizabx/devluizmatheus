//Executa quando o documento HTML for completamente carregado
document.addEventListener('DOMContentLoaded', function() {
    
    // Receber o SELETOR calendar do Atributo id
    var calendarEl = document.getElementById('calendar');

    // Instanciar FullCalendar.Calendar e atribuir a variável calendar
    var calendar = new FullCalendar.Calendar(calendarEl, {
      // Criar o cabeçalho do calendário
      //Bootstrap 5  
      themeSystem: 'bootstrap5',
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },

      locale: 'pt-br',
    //   initialDate: '2023-01-12',
      // initialDate: '2024-11-18',
      // Permitir cliclar nos nome dos dias da semana
      navLinks: true, // can click day/week names to navigate views
      // Permitir clicar e arrastar o mouse sobre vários dias no calendário
      selectable: true,

      //Indicar visualmente a área que será selecionada antes que o usuário 
      // solte o botão do mouse para confirmar a seleção
      selectMirror: true,
      // Permitir arrastar e redimensionar os eventos diretamente no calendário
      editable: true,
      
      // Número máximo de eventos em um determinado dia, se for true o numero de eventos será 
      //limitado à altura da Célula
      dayMaxEvents: true, // allow "more" link when too many events
      events: '../PHP/listar_evento.php',

      //Clique do usuário sobre o evento
      eventClick: function (info) {

        //Receber o seletor da janela modal
        const visualizarModal = new bootstrap.Modal(document.getElementById("visualizarModal"));

        // Enviar para a janela modal os dados do evento
        document.getElementById("visualizar_id").innerText = info.event.id;
        document.getElementById("visualizar_title").innerText = info.event.title;
        document.getElementById("visualizar_start").innerText = info.event.toLocaleString();
        document.getElementById("visualizar_end").innerText = info.event.end.toLocaleString();
        
        
        //Abrir a janela modal
        visualizarModal.show();
      }
    });
    calendar.render();
  });