// Update this variable to point to your domain.
var apigatewayendpoint = 'https://ru88984lmi.execute-api.us-east-1.amazonaws.com/dev';
var loadingdiv = $('#loading');
var noresults = $('#noresults');
var resultdiv = $('#results');

var searchbox = $('input#search');
var timer = 0;

// Executes the search function 250 milliseconds after user stops typing
searchbox.keyup(function () {
  clearTimeout(timer);
  timer = setTimeout(search, 250);
});

async function search() {
  // Clear results before searching
  noresults.hide();
  resultdiv.empty();
  loadingdiv.show();
  // Get the query from the user
  let query = searchbox.val();
  // Only run a query if the string contains at least three characters
  if (query.length > 2) {
    // Make the HTTP request with the query as a parameter and wait for the JSON results
    let response = await $.get(apigatewayendpoint, { q: query, size: 25 }, 'json');
    // Get the part of the JSON response that we care about
    let results = response['hits']['hits'];
    if (results.length > 0) {
      loadingdiv.hide();
      // Iterate through the results and write them to HTML
      resultdiv.append('<p>Found ' + results.length + ' results.</p>');
      for (var item in results) {
        let name = results[item]._source.Body.name;
        let specialty = results[item]._source.Body.specialty;
        let qualifications = results[item]._source.Body.qualifications;
        let url = results[item]._source.Body.url;
        let gender = results[item]._source.Body.gender;
        let address = results[item]._source.Body.registered_address;
        let district = results[item]._source.Body.district;
        let type_of_practice = results[item]._source.Body.type_of_practice;
        let telephone = results[item]._source.Body.telephone;
        let fax = results[item]._source.Body.fax;
        let mobile_phone = results[item]._source.Body.mobile_phone;
        let email = results[item]._source.Body.email;
        
        // Construct the full HTML string that we want to append to the div '<div><h2><a href="' + url + '">' + name + '</a></h2><p>'
        resultdiv.append('<div class="card border-light mb-3">' + 
        '<div><h5 class="card-header"><a href="' + url + '">' + name + '</a></h2><p>' + 
        '<div class="card-body text-dark"><font size="3">' +
        '<p> Gender : ' + gender  +  '</font><font size="3">' +
        ' <p>Specialty : '+ specialty + '</font><font size="3">' +
        ' <p>Qualifications : '+ qualifications +'</font><font size="3">' +
        ' <p>Type of practice : '+ type_of_practice +'</font><font size="3">' +
        '<p><strong> Contact information </strong><p>'+'</font><font size="3">' +
        ' Address : ' + address+' &mdash; ' + district +'</font><font size="3">' +
        '<p> Telephone : '+ telephone +'</font><font size="3">' +
        '  Fax : '+ fax +'</font><font size="3">' +
        '  Mobile phone : '+ mobile_phone +'</font><font size="3">' +
        '<p> Email : '+ email +'</font>'+
        '</p></div></div></div>');
        
      }
    } else {
      noresults.show();
    }
  }
  loadingdiv.hide();
}

