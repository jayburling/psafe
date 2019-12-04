@extends('layout')

@section('content')
	
	<div class="container" id="dropdown-container">
		<div class="row" id="dropdown-row">
		</div>
	</div>
	<div class="container" id='survey-container' onLoad='helloWorld()'>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>
	<script src= '/js/surveyScript.js'></script>
	<script src= '/js/surveyUI.js'></script>
	<script>
		function testMethod() {
			console.log("testMethod()");
		}
		
		function parseSurveyData() {
			console.log("parseSurveyData()");
		}
@foreach ($ClassesToSurvey as $class)
		addNewSurvey('{{$class['Class_Name']}}','{{$class['Class_ID']}}','{{$class['Domain_Name']}}','{{$class['Domain_ID']}}','{{$class['Num_Students']}}');
@endforeach
		$(document).ready(finishSurveyFormatting());
	</script>
@endsection
