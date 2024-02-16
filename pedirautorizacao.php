<html>
  <script>
    
     // Função para exibir a mensagem personalizada antes de solicitar a localização
  function showLocationMessage() {
    document.getElementById("locationMessage").style.display = "block";
  }
    
    
    
    
    
    
    
    // Função para solicitar a localização quando o botão é clicado
  function requestLocation() {
    navigator.permissions.query({ name: 'geolocation' })
      .then(permissionStatus => {
        if (permissionStatus.state === 'prompt' || permissionStatus.state === 'denied') {
          navigator.geolocation.getCurrentPosition(() => {
            getLocationAndSetCity();
          }, () => {
            alert('Permissão negada. Não é possível obter a localização.');
          });
        } else if (permissionStatus.state === 'granted') {
          getLocationAndSetCity();
        }
      });
  }
  </script>
</html>