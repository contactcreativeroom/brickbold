//$(window).on("load", function () {

//if($('#map').length > 0){

    // function initMap() {
    //     const map = new google.maps.Map(document.getElementById("map"), {
    //       center: { lat: 40.749933, lng: -73.98633 },
    //       zoom: 13,
    //       mapTypeControl: false,
    //     });
    //     const card = document.getElementById("pac-card");
    //     const input = document.getElementById("pac-input");
    //     const biasInputElement = document.getElementById("use-location-bias");
    //     const strictBoundsInputElement = document.getElementById("use-strict-bounds");
    //     const options = {
    //       fields: ["formatted_address", "geometry", "name"],
    //       strictBounds: false,
    //     };
      
    //     map.controls[google.maps.ControlPosition.TOP_LEFT].push(card);
      
    //     const autocomplete = new google.maps.places.Autocomplete(input, options);
      
    //     // Bind the map's bounds (viewport) property to the autocomplete object,
    //     // so that the autocomplete requests use the current map bounds for the
    //     // bounds option in the request.
    //     autocomplete.bindTo("bounds", map);
      
    //     const infowindow = new google.maps.InfoWindow();
    //     const infowindowContent = document.getElementById("infowindow-content");
      
    //     infowindow.setContent(infowindowContent);
      
    //     const marker = new google.maps.Marker({
    //       map,
    //       anchorPoint: new google.maps.Point(0, -29),
    //     });
      
    //     autocomplete.addListener("place_changed", () => {
    //       infowindow.close();
    //       marker.setVisible(false);
      
    //       const place = autocomplete.getPlace();
      
    //       if (!place.geometry || !place.geometry.location) {
    //         // User entered the name of a Place that was not suggested and
    //         // pressed the Enter key, or the Place Details request failed.
    //         window.alert("No details available for input: '" + place.name + "'");
    //         return;
    //       }
      
    //       // If the place has a geometry, then present it on a map.
    //       if (place.geometry.viewport) {
    //         map.fitBounds(place.geometry.viewport);
    //       } else {
    //         map.setCenter(place.geometry.location);
    //         map.setZoom(17);
    //       }
      
    //       marker.setPosition(place.geometry.location);
    //       marker.setVisible(true);
    //       infowindowContent.children["place-name"].textContent = place.name;
    //       infowindowContent.children["place-address"].textContent =
    //         place.formatted_address;
    //       infowindow.open(map, marker);
    //     });
      
    //     // Sets a listener on a radio button to change the filter type on Places
    //     // Autocomplete.
    //     function setupClickListener(id, types) {
    //       const radioButton = document.getElementById(id);
      
    //       radioButton.addEventListener("click", () => {
    //         autocomplete.setTypes(types);
    //         input.value = "";
    //       });
    //     }
      
    //     setupClickListener("changetype-all", []);
    //     setupClickListener("changetype-address", ["address"]);
    //     setupClickListener("changetype-establishment", ["establishment"]);
    //     setupClickListener("changetype-geocode", ["geocode"]);
    //     setupClickListener("changetype-cities", ["(cities)"]);
    //     setupClickListener("changetype-regions", ["(regions)"]);
    //     biasInputElement.addEventListener("change", () => {
    //       if (biasInputElement.checked) {
    //         autocomplete.bindTo("bounds", map);
    //       } else {
    //         // User wants to turn off location bias, so three things need to happen:
    //         // 1. Unbind from map
    //         // 2. Reset the bounds to whole world
    //         // 3. Uncheck the strict bounds checkbox UI (which also disables strict bounds)
    //         autocomplete.unbind("bounds");
    //         autocomplete.setBounds({ east: 180, west: -180, north: 90, south: -90 });
    //         strictBoundsInputElement.checked = biasInputElement.checked;
    //       }
      
    //       input.value = "";
    //     });
    //     strictBoundsInputElement.addEventListener("change", () => {
    //       autocomplete.setOptions({
    //         strictBounds: strictBoundsInputElement.checked,
    //       });
    //       if (strictBoundsInputElement.checked) {
    //         biasInputElement.checked = strictBoundsInputElement.checked;
    //         autocomplete.bindTo("bounds", map);
    //       }
      
    //       input.value = "";
    //     });
    //   }
      
      //window.initMap = initMap;


      //google.maps.event.addDomListener(window, 'load', initAutocomplete);
      //window.initAutocomplete = initAutocomplete;

      var addressSaved = document.getElementById("__address_saved").value;


      document.getElementById('__address').addEventListener('focusout', () => {
        document.querySelector("#__address").value = document.getElementById("__address_saved").value;
    });

    function initAutocomplete() {
        addressField = document.querySelector("#__address");
        //postalField = document.querySelector("#__address_postcode");

        addressField.addEventListener('keydown', function (event) {
            if (event.key === 'Enter') { 
                event.preventDefault(); // Prevent form submission
            }
        }); 
        autocomplete = new google.maps.places.Autocomplete(addressField, {
            //fields: ["address_components", "geometry", "place_id", "name", "formatted_address"],
            fields: ["address_components", "place_id", "geometry", "formatted_address", "name"],
            //types: ["address"],
            componentRestrictions: {country: ["in"]}
        });
        // addressField.focus();
        autocomplete.addListener("place_changed", fillInAddress);

    }



      function fillInAddress() {
          // Get the place details from the autocomplete object.
          const place = autocomplete.getPlace();

          var address = [];
          var postcode;
          //document.querySelector("#__address_lat").value = place.geometry.location.lat();
          //document.querySelector("#__address_lng").value = place.geometry.location.lng();

          console.log(place)
          
          for (const component of place.address_components) {
              // @ts-ignore remove once typings fixed
              const componentType = component.types[0];
              switch (componentType) {
                  case "street_number":
                      address.push(component.long_name)
                      break;

                  case "route":
                      address.push(component.long_name)
                      break;

                  case "neighborhood":
                      address.push(component.long_name)
                      break;

                  case "sublocality_level_2":
                      address.push(component.long_name)
                      break;

                  case "sublocality_level_1":
                      address.push(component.long_name)
                      break;
                  case "postal_code":
                      postcode = component.long_name;
                      break;

                  case "postal_code_suffix":
                      postcode.push(component.long_name);
                      break;

                  case "locality":
                      if($('#__address_city').length > 0){
                          document.querySelector("#__address_city").value = component.long_name;
                      }
                      if($('#__address_city').parent().find('.invalid-feedback').length > 0){
                          document.querySelector("#__address_city").parentNode.querySelector('.invalid-feedback').classList.remove('d-block');
                      };
                      break;

                  case "administrative_area_level_1":
                      if($('#__address_state').length > 0){
                          document.querySelector("#__address_state").value = component.long_name;
                      }
                      if($('#__address_state_code').length > 0){
                          document.querySelector("#__address_state_code").value = component.short_name;
                      }
                      if($('#__address_state').parent().find('.invalid-feedback').length > 0){
                          document.querySelector("#__address_state").parentNode.querySelector('.invalid-feedback').classList.remove('d-block');
                      }
                      break;

                  case "country":
                      if($('#__address_country').length > 0){
                          document.querySelector("#__address_country").value = component.long_name;
                      }
                      if($('#__address_country_code').length > 0){
                          document.querySelector("#__address_country_code").value = component.short_name;
                      }
                      if($('#__address_country').parent().find('.invalid-feedback').length > 0){
                          document.querySelector("#__address_country").parentNode.querySelector('.invalid-feedback').classList.remove('d-block');
                      }
                      break;
              }
          }
          
          // addressField.value = address.join(', ');
          // if($('#__address').parent().find('.invalid-feedback').length > 0){
          //     document.querySelector("#__address").parentNode.querySelector('.invalid-feedback').classList.remove('d-block');
          // }
          
          // if (postcode.length > 0) {
          //     postalField.value = postcode.join(', ');
          //     if($('#__address_postcode').parent().find('.invalid-feedback').length > 0){
          //         document.querySelector("#__address_postcode").parentNode.querySelector('.invalid-feedback').classList.remove('d-block');
          //     }
          // }
          

          // var isPlaceID = document.getElementById("save-place-id");
          // if(isPlaceID){
          //     document.getElementById('save-place-id').value=place.place_id;
          // }

          console.log(address);
          console.log(postcode);

          $('#__address').val(place.formatted_address);

          $('#__address_saved').val(place.formatted_address);
          addressSaved = place.formatted_address;

          $('#__address_lat').val(place.geometry.location.lat());
          $('#__address_lng').val(place.geometry.location.lng());
          $('#__address_postcode').val(postcode);
          $('#__address_place_id').val(place.place_id);
          
          //$('#__address_lat').val(place.formatted_address);

          document.getElementById("remove-address").classList.remove("d-none")

          return false;
          //getPlaceID();
      //}
      
}

//});