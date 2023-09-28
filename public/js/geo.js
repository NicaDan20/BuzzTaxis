let autocompletes = [];

let options = {
    types: ["establishment"],
    componentRestrictions: {'country': 'UK'},
    fields: ['place_id', 'geometry', 'name']
  };

function initAutocomplete() {
    let inputs = document.getElementsByClassName('address-container');
    for (i=0;i<inputs.length;i++) {
        let autocomplete = new google.maps.places.Autocomplete(inputs[i], options);
        autocomplete.inputId = inputs[i].id;
        autocomplete.addListener('place_changed', onPlaceChanged);    
        autocompletes.push(autocomplete);
    }
}

function onPlaceChanged() {
    var place = this.getPlace();
    if (!place.geometry) {
        document.getElementById('address-container').placeholder = "Enter a place";
    } else {
        document.getElementById('details').innerHTML = place.name;
    }
}