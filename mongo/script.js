const locationList = document.getElementById('location');
const restaurantList = document.getElementById('restaurant');
const form = document.forms.namedItem('restaurantList');

//set listener for location chooser
locationList.addEventListener('change', () => {
  let location = form.elements.namedItem('location').value;
  //create a new request
  let req = new XMLHttpRequest();
  req.open('POST', './data.php', true);
  req.onreadystatechange = () => {
    if (req.readyState === 4) {
      if (req.status === 200) {
        //removing all restaurants of the previous location
        restaurantList.childNodes.forEach(e => {
          e.remove();
        });
        let data = JSON.parse(req.responseText);
        //creating a list of unique restaurants
        let set = new Set(data);
        //render options with new restaurants
        if ([...set].length > 1) {
          [...set].forEach(e => {
            let option = document.createElement('option');
            option.value = e;
            option.innerHTML = e;
            restaurantList.appendChild(option);
          })
        }
      }
      else if (req.status === 204) {
        //show alert if no restaurants are found
        alert('No data found');
      }
    }
  }
  req.send(JSON.stringify(location));
})

