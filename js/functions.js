document.addEventListener("DOMContentLoaded", function(event) { 
	document.getElementById('display').onclick = function(){
		var student_grade = new Array();
		var gradeList = document.querySelectorAll('.grade');
		Array.from(gradeList).forEach(function(el) {
			student_grade.push(el.value);
		});
		var grade = student_grade.filter(function(el) { return el; });

		
		function sum(obj) {
		  var sum = 0;
		  for( var el in obj ) {
			if( obj.hasOwnProperty( el ) ) {
			  sum += parseFloat( obj[el] );
			}
		  }
		  return sum;
		}
			
		var x = grade;
		var total = sum(x);
		var avg = total / grade.length;
		
		
		
		
		var median = grade[Math.round((grade.length - 1) / 2)];

		var mode = function mode(grade) {
		return grade.reduce(function(current, item) {
			var val = current.numMapping[item] = (current.numMapping[item] || 0) + 1;
			if (val > current.greatestFreq) {
				current.greatestFreq = val;
				current.mode = item;
			}
			return current;
		}, {mode: null, greatestFreq: -Infinity, numMapping: {}}).mode;
	};


	if(total >= 1600){
		document.getElementById('letter').innerHTML = "A+";
	}
	else if(total < 1600 && total >= 1440) {
		document.getElementById('letter').innerHTML = "A";
	}
	else if(total < 1440 && total >= 1280) {
		document.getElementById('letter').innerHTML = "B";
	}
	else if(total < 1280 && total >= 1120) {
		document.getElementById('letter').innerHTML = "C";
	}
	else if(total < 1120 && total >= 960) {
		document.getElementById('letter').innerHTML = "D";
	}
	else {
		document.getElementById('letter').innerHTML = "F";
	}
	

				
	if (isNaN(avg)) {
		document.getElementById('average').innerHTML = "0";
	}
	else {
		document.getElementById('average').innerHTML = avg.toFixed(2);
	}
	
	
	
	if (median == 'undefined' || median == null) {
		document.getElementById('median').innerHTML = "0";
	}
	else {
		document.getElementById('median').innerHTML = median;
	}
	
	
	if(mode(grade) == 'undefined' || mode(grade) == null) {
		document.getElementById('mode').innerHTML = "0";
	}
	else {
		document.getElementById('mode').innerHTML = mode(grade);
	}
	
		document.getElementById('total').innerHTML = total;
						
		
		
	
	};
	
	document.getElementById('reset').onclick = function(){
		document.getElementById('grade_form').reset();	
		document.getElementById('letter').innerHTML = "";		
		document.getElementById('total').innerHTML = "";
		document.getElementById('mode').innerHTML = "";
		document.getElementById('median').innerHTML = "";
		document.getElementById('average').innerHTML = "";
	}
});

