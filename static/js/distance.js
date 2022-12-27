async function fetchUrl(url) {
  var myHeaders = new Headers();
  myHeaders.append("Accept", "application/json");

  const result = await fetch(url, {
    method: "GET",
    headers: myHeaders,
  });
  return result.json().then((data) => data);
}

async function getDistance(addressFrom, addressTo, unit = "") {
  // <!-- // Google API key -->
  let apiKey = "AIzaSyCARJ5JnRWxCD2ica1_3pjp73-278H3FaI";

  // <!-- // Change address format -->
  let formattedAddrFrom = addressFrom.replace(" ", "+");
  let formattedAddrTo = addressTo.replace(" ", "+");

  //   let distance = await fetchUrl(
  //     `https://maps.googleapis.com/maps/api/distancematrix/json?origins=${formattedAddrFrom}&destinations=${formattedAddrTo}&key=${apiKey}`
  //   );
  //   console.log("From data", distance.results);

  // <!--
  //     // Geocoding API request with start address -->
  let geocodeFrom = await fetchUrl(
    `https://maps.googleapis.com/maps/api/geocode/json?address=${formattedAddrFrom}&sensor=false&key=${apiKey}`
  );

  console.log("From data", geocodeFrom.results);
  // outputFrom = json_decode(geocodeFrom);
  if (geocodeFrom?.error_message) {
    return geocodeFrom?.error_message;
  }

  // <!-- // Geocoding API request with end address -->
  let geocodeTo = await fetchUrl(
    `https://maps.googleapis.com/maps/api/geocode/json?address=${formattedAddrTo}&sensor=false&key=${apiKey}`
  );

  console.log("From data", geocodeTo.results);
  // outputFrom = json_decode(geocodeTo);
  if (geocodeTo?.error_message) {
    return geocodeTo?.error_message;
  }

  // // <!-- // Get latitude and longitude from the geodata -->
  let latitudeFrom = geocodeFrom?.results[0]?.geometry?.location?.lat;
  let longitudeFrom = geocodeFrom?.results[0]?.geometry?.location?.lng;

  let latitudeTo = geocodeTo?.results[0]?.geometry?.location?.lat;
  let longitudeTo = geocodeTo?.results[0]?.geometry?.location?.lng;

  const matrix = new google.maps.DistanceMatrixService();

  matrix.getDistanceMatrix(
    {
      origins: [new google.maps.LatLng(latitudeFrom, longitudeFrom)],
      destinations: [new google.maps.LatLng(latitudeTo, longitudeTo)],
      travelMode: google.maps.TravelMode.DRIVING,
    },
    function (response, status) {
      //do something
      console.log("====================================");
      console.log(response);
      console.log(status);
      console.log("====================================");
    }
  );
  //   // Calculate distance between latitude and longitude -->
  let theta = longitudeFrom - longitudeTo;
  // let dist = sin(deg2rad(latitudeFrom)) * sin(deg2rad(latitudeTo)) + cos(deg2rad(latitudeFrom)) * cos(deg2rad(latitudeTo)) * cos(deg2rad(theta));
  // dist = acos(dist);
  // dist = rad2deg(dist);
  // miles = dist * 60 * 1.1515;

  // // Convert unit and return distance -->
  // unit = strtoupper(unit);
  // if (unit == "K") {
  //     return round(miles * 1.609344, 2) . ' km';
  // } elseif (unit == "M") {
  //     return round(miles * 1609.344, 2) . ' meters';
  // }
  // else
  // {
  //     return round(miles, 2).' miles';
  // }
}
//  Call the getDistance() function and pass two addresses between from which you want to calculate distance. -->

addressFrom = "idukki";
addressTo = "ernakulam";

// Get distance in km -->
getDistance(addressFrom, addressTo, "K").then((res) => {
  console.log(res);
});