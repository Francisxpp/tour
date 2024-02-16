<html>
<script>
  // Função para obter a localização do usuário e atualizar a página
  function getLocationAndSetCity() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;

        // Chamada para a API do Google Maps Geocoding para obter o nome da cidade e UF
        fetch(`https://maps.googleapis.com/maps/api/geocode/json?latlng=${latitude},${longitude}&result_type=locality&key=AIzaSyDHH5J-q-axMz5d82Kb1D_5MwB6jNamI38`)
          .then(response => response.json())
          .then(data => {
            const cityInfo = extractCityInfo(data);
            document.getElementById("cityName").innerText = cityInfo || "Coordenadas: " + latitude + ", " + longitude;
            document.getElementById("subTitle").innerText = "Estes são os melhores destinos mais próximos de você, aproveite!";
          })
          .catch(error => console.error("Erro ao obter dados de geocodificação", error));
      });
    } else {
      alert("Geolocalização não é suportada pelo seu navegador.");
    }
  }

  // Função para extrair o nome da cidade + UF dos dados de geocodificação
  function extractCityInfo(geocodingData) {
    if (geocodingData.status === "OK") {
      const addressComponents = geocodingData.results[0].address_components;
      let cityName = null;
      let stateCode = null;

      for (const component of addressComponents) {
        if (component.types.includes("locality")) {
          cityName = component.long_name;
        } else if (component.types.includes("administrative_area_level_1")) {
          stateCode = component.short_name;
        }
      }

      // Construir a string final com nome da cidade + UF
      if (cityName && stateCode) {
        return cityName + ", " + stateCode;
      } else if (cityName) {
        return cityName;
      }
    }

    // Se não for possível obter a cidade, retorna as coordenadas
    return null;
  }

  // Chama a função para obter a localização do usuário e atualizar a página
  getLocationAndSetCity();
</script>
</html>