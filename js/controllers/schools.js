
		wbcce.controller("schoolsCtrl", schoolsController)
		function schoolsController(){
			var vm = this;
			
			vm.message = "This text is in School controller";
			vm.data = schooldata;
			vm.activeSchool = {};
		
		};

		var schooldata = [
			{
				name: "University of the Philippines Diliman",
				site: "http://www.finduniversity.ph/universities/university-of-the-philippines-diliman/"
			},
			{
				name: "University of the Philippines Manila"
			},
			{
				name: "Ateneo de Manila University"
			},
			{
				name: "De La Salle University"
			},
			{
				name: "University of Santo Tomas"
			},
			{
				name: "Pamantasan ng Lungsod ng Maynila"
			},
			{
				name: "Mapúa Institute of Technology"
			},
			
		];
