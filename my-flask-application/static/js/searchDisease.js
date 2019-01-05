// Update this variable to point to your domain.
var apigatewayendpoint = 'https://ru88984lmi.execute-api.us-east-1.amazonaws.com/disease';
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
        let Hospital = results[item]._source.Hospital;
        let Speciality = results[item]._source.Speciality;
        let Operation = results[item]._source.Operation;
        let Option = results[item]._source.Option;
        let OrignalDescription = results[item]._source.OrignalDescription;
        let OpTheatrAndAssoMtrlCharges = results[item]._source.OpTheatrAndAssoMtrlCharges;
        let AnaesthetistFees = results[item]._source.AnaesthetistFees;
        let DoctorFees = results[item]._source.DoctorFees;
        let TotalCharges = results[item]._source.TotalCharges;
        let Website = results[item]._source.Website;

        
        // Construct the full HTML string that we want to append to the div '<div><h2><a href="' + url + '">' + name + '</a></h2><p>'
        resultdiv.append('<div class="result">' +
        '<div>Speciality : ' + Speciality +
        '<p><strong> Operation </strong><p>'+
        ' Operation: ' + Operation +
        '<p><strong> Description </strong><p>'+
        ' Option: ' + Option + ' &mdash; ' +
        ' Orignal Description: ' + OrignalDescription +
        '<p><strong> Fees </strong><p>'+
        ' Operating Theatre Charges: ' + OpTheatrAndAssoMtrlCharges +
        ' Anaesthetist Fees : ' + AnaesthetistFees +
        ' Doctor Fees : ' + DoctorFees +
        ' Total Charges : ' + TotalCharges +
        '</div></div><p>');
      }
    } else {
      noresults.show();
    }
  }
  loadingdiv.hide();
}

