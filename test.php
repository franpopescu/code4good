<form action = "json.php" method = "POST">
<br>
Region:
<select id = "Region" name = "Region"></select><br><hr>
Country:
<select id = "Country" name = "Country"></select><br>
Gender:
<select id = "Gender" name = "Gender">
	<option id = "male" value="male">Male</option>
	<option id="female" value ="female">Female</option>
</select><br>
Year From:
<select id = "From" name = "From"></select><br>
Year To:
<select id = "To" name = "To"></select><br>
<input type = "submit" value = "Muie Steaua">
</form>



<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">

var yearFrom;
var yearTo;

var data = [ // The data
    ['Europe', [
        'Austria','Belgium', 'Bosnia', 'Bulgaria', 'Denmark', 'Faroe Islands', 'Finland', 'France', 'Germany', 'Greece', 
        'Hungary', 'Iceland', 'Ireland', 'Italy', 'Lithuania', 'Luxembourg', 'Northern Ireland', 'Norway', 'Poland',
        'Portugal', 'Romania', 'Russia', 'Spain', 'Sweden', 'Switzerland', 'the Netherlands', 'Turkey', 'United Kingdom'
    ]],
    ['Americas', [
        'Argentina', 'Barbados', 'Canada', 'Chile', 'Colombia', 'Costa Rica', 'Guatemala', 'Mexico', 'Peru', 'Saint Lucia',
        'USA'
    ]],
    ['Africa', [
        'Algeria', 'Egypt', 'Ghana', 'Kenya', 'Madagascar', 'Nigeria', 'South Africa'
    ]],
    ['Asia', [
        'Azerbaijan', 'Bangladesh', 'British India', 'Democratic Republic of Vietnam', 'East Timor', 'India', 'Indonesia', 
        'Iran', 'Japan', 'Korea', 'Myanmar', 'Pakistan', 'Taiwan', 'Tibet', 'Yemen'
    ]],
    ['Oceania', [
        'Australia', 'New Zealand'
    ]]
];

var years = new Array();
for(var i = 0; i< 114; ++i){
	years[i] = i + 1901;
}

$Region = $('#Region'); // The dropdowns
$Country = $('#Country');
$From = $('#From');
$To = $('#To');

for(var i = 0; i < data.length; i++) {
    var first = data[i][0];
    $Region.append($("<option>"). // Add options;
       attr("value",first).
       data("sel", i).
       text(first));
}

for(var i = 0; i< years.length; ++i){

	var currentYear = years[i];
	$From.append($("<option>").
	attr("value", currentYear).
	data("sel",i).
	text(currentYear));
}

$('#From')
  .change(function () {
   yearFrom = $(this).val();
   var yearFromIndex = yearFrom - 1901;
   var yearsTo = new Array();

   for(var i = yearFromIndex + 1; i< 114; ++i){
		yearsTo[i] = i + 1901;
	}
	$To.empty();
	yearTo = $(this).val();
   for(var i = yearFromIndex +1; i< yearsTo.length; ++i){

		var currentYear = yearsTo[i];
		$To.append($("<option>").
		attr("value", currentYear).
		data("sel",i).
		text(currentYear));
	}
  });



$Region.change(function() {
    var index = $(this).children('option:selected').data('sel');
    var second = data[index][1]; // The second-choice data

    $Country.html(''); // Clear existing options in second dropdown

    for(var j = 0; j < second.length; j++) {
        $Country.append($("<option>"). // Add options
           attr("value",second[j]).
           data("sel", j).
           text(second[j]));
    }
}).change();

</script>


