// Funcion para generar Evento Con Html 
function enviarPregunta() {
  const pregunta = document.getElementById("preguntas").value;
  const respuestaDiv = document.getElementById("respuestaChat");

  let respuesta = "";
// switch de preguntas, por cada opcion una respuesta que ira conectada con otro archivo 
  switch (pregunta) {
    case "visitar":
      respuesta = "Puedes visitar museos y lugares turisticos ";
      break;

    case "horarios":
      respuesta = `
<strong>Casa de la Cultura:</strong> Lunes a viernes: 07:00–12:00 y 14:00–17:00<br>
Sábados: 08:00–12:00<br><br>

<strong>Granja Paracelsus:</strong> Martes a sábado: 08:00–11:30 y 14:00–18:00<br>
Domingos: 14:00–18:00<br><br>

<strong>Museo Los Fundadores:</strong> Martes a sábado: 08:00–11:30 y 14:00–18:00<br><br>
<strong>Museo Casa Raatz:</strong> Lunes a viernes: 07:00–10:30 y 14:00–16:30<br>
Sábados: 07-10:30<br><br>

<strong>Aventura Selecta:</strong> Jueves a Martes: 08:30–17:30<br><br>

<strong>Club Caza y Pesca:</strong> Abierto todos los días<br><br> 
<strong>Museo Objetos Perdidos:</strong> Martes a Viernes: 08-17:00<br>
Sábados:08:00-11:00<br><br>`
        ;
      break;

    case "precio":
      respuesta = `
<strong>Casa de la Cultura:</strong> Entrada gratuita<br><br>

<strong>Granja Paracelsus:</strong> 25.000 Gs por persona<br><br>

<strong>Museo Los Fundadores:</strong> 10.000 Gs por persona<br><br>

<strong>Museo Casa Raatz:</strong> 10.000 Gs por persona<br><br>

<strong>Aventura Selecta:</strong> 10.000 Gs para nacionales / 30.000 Gs para extranjeros<br><br>

<strong>Club Caza y Pesca:</strong> 10.000 Gs por persona (entrada diaria)<br><br>

<strong>Museo Objetos Perdidos:</strong> No se dispone de información oficial sobre el precio. Se recomienda contactar directamente.<br><br>
`;
      break;

    case "reservar":
      respuesta= "Puedes agendar una reserva en la parte superior de la pagina ";
      break;

    default:
      respuesta = "Por favor selecciona una pregunta válida.";
  }
// Genera la respuesta mediante la opcion que elijamos 
  respuestaDiv.innerHTML = `<strong>Chatbot:</strong> ${respuesta}`;
}
