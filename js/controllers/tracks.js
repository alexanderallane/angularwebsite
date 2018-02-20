
wbcce.controller("tracksCtrl", tracksController)
		function tracksController(){
			var vm = this;
			
			vm.message = "Sorry, this page is under maintenance.";
			vm.course = coursesData;
			
		};

		var coursesData = [
			{
				name: "Agricultural Engineering"
			},
			{
				name: "Animal Science"
			},
			{
				name: "Food Technology"
			},
			{
				name: "Horticulture"
			},
			{
				name: "Forestry"
			},
			{
				name: "Veterinary Medicine"
			},
			{
				name: "Civil Engineering"
			},
			{
				name: "Chemical Engineering"
			},
			{
				name: "Computer Engineering"
			},
			{
				name: "Electrical Engineering"
			},
			{
				name: "Electronics & Communication Engineering"
			},
			{
				name: "Industrial Engineering"
			},
			{
				name: "Mechanical Engineering"
			},
			{
				name: "Doctor"
			},
			{
				name: "Nurse"
			},
			{
				name: "Pharmacist"
			},
			{
				name: "Physical Therapist"
			},
			{
				name: "Dentist"
			},
			{
				name: "Medical Technologist"
			},
			{
				name: "Computer Science"
			},
			{
				name: "Computer Technology"
			},
			{
				name: "Information Technology"
			},
			{
				name: "Banking"
			},
			{
				name: "Civil Service"
			},
			{
				name: "Financial Services"
			},
			{
				name: "Consulting"
			},
			{
				name: "Retail"
			}
		
			
			
		];