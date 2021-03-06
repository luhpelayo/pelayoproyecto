var eventsData= '[';
var eventsContent= [];

function loadEvents(reference) {
  for (var i = 0; i < reference.length; i++) {
    eventsData+= '{"title": "'+ reference[i].title +'", "start": "'+ reference[i].event_date.split(" ")[0] +'", "info": {"fecha": "'+ reference[i].event_date.split(" ")[0] +'", "img": "'+ reference[i].url_img +'", "document": "'+ reference[i].url_document +'", "sede": "'+ reference[i].lugar;

    eventsData+= '", "content_id": "'+ eventsContent.length +'"}}';
    eventsContent.push(reference[i].content);
    if (i != (reference.length-1))
      eventsData+= ',';
    else
      eventsData+= ']';
  }
  try {
    eventsData= JSON.parse(eventsData);
  } catch(err) {
    eventsData= JSON.parse('{}');
  }
}

jQuery(document).ready(function($) {
  /////////////// Calendar ////////////////////
  $('#calendar').fullCalendar({
    eventSources: [
      {
        events: eventsData
      }
      // any other event sources...src="{{ asset('images/eventos/'.$evento->url_img) }}"
    ],
    eventClick: function(calEvent) {
      $('#eventTitle').text(calEvent.title);
      if(calEvent.info.img !== "null") {
        $('#eventImg').attr('src', "./images/eventos/"+ calEvent.info.img);

        $('#eventImg').addClass('col-xs-12 col-md-6');
        $('#blockDivider').removeClass('hide');
      } else {
        $('#eventImg').removeAttr('src');
        $('#eventImg').removeClass('col-xs-12 col-md-6');
        $('#blockDivider').addClass('hide');
      }
      $('#eventInfo').html('Fecha: ' + calEvent.info.fecha + '<br>Sede: ' + calEvent.info.sede);
      if(calEvent.info.document !== 'null') {
        $('#eventDocument > a').removeClass('hide');
        $('#eventDocument > a').attr('href', '/file/getEvento/'+ calEvent.info.document);
        $('#eventDocument > a > span').text(' '+ calEvent.info.document);
      } else {
        $('#eventDocument > a').addClass('hide');
        $('#eventDocument > a').attr('href', '');
        $('#eventDocument > a > span').text(' ');
      }
      $('#eventContent').html(eventsContent[calEvent.info.content_id]);
      if($(window).height() > $(window).width())
        $('#tableNextEvents').fadeOut();
      $('#allEvents').fadeOut();
      $('#eventDetails').fadeIn();
    }
  });

  $('#event_Exit').on('click', function () {
    $('#eventDetails').fadeOut();
    if($(window).height() > $(window).width())
      $('#tableNextEvents').fadeIn();
    $('#allEvents').fadeIn();
  });
});
