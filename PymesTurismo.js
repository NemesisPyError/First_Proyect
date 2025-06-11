
  function enviarPregunta() {
    const pregunta = document.getElementById("preguntas").value;
    const respuestaDiv = document.getElementById("respuestaChat");

    let respuesta = "";

    switch (pregunta) {
      case "visitar":
        respuesta = "Puedes visitar museos, parques, y centros culturales en la zona.";
        break;
      case "horarios":
        respuesta = "Estamos abiertos de lunes a sábado de 8:00 a 18:00.";
        break;
      case "precio":
        respuesta = "El precio por visita es de 25.000 Gs por persona.";
        break;
      case "dias":
        respuesta = "Puedes visitarnos de lunes a sábado. Domingos estamos cerrados.";
        break;
      default:
        respuesta = "Por favor selecciona una pregunta válida.";
    }

    respuestaDiv.innerHTML = `<strong>Chatbot:</strong> ${respuesta}`;
  }
