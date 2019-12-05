
//ISAAC'S METHODS
/*
Returns the titles of all surveys in the following format:
[ClassName1/DomainAbbr1, ClassName2/DomainAbbr2, ClassName3/DomainAbbr3,...]	
*/
function getSurveyTitles() {
	return ["test1/LD1", "test2/LD2", "test3/LD3"];
}

/*
Returns all the questions of a survey at {index} in the following format:
[Question 1, Question 2, Question 3,...]	
*/
function getSurveyQuestions(index) {
	return [index+"question1", index+"question2", index+"question3"];
}

/*
Uploads the 
[[class index],
[STR, SAT, NG, UNSAT, NA],
...,
[Grades?, Papers?, Presentations?, Exams?, Other?(String)]
*/
function parseSubmission(submission) {
	console.log("parseSubmission("+submission+")");
}



//Class Name, Class ID, Domain Abbr, Domain ID, Students
var surveys = [];

//Domain ID, Question ID, Question Text
var questions = [];

var teacherID = -1;


function addNewSurvey(className, classID, domainName, domainID, students) {
	console.log('addNewSurvey('+className+', '+classID+', '+domainName+', '+domainID+', '+students+')');
	var newSurvey = [className, parseInt(classID), domainName, parseInt(domainID), parseInt(students)];
	surveys.push(newSurvey);
}

function finishSurveyFormatting() {
	surveys.sort();
	console.log(surveys);
}

function printSurveyInput(surveyJSON) {
	console.log('pringSurveyInput('+surveyJSON+'');
}