
		wbcce.controller("schoolsCtrl", schoolsController)
		function schoolsController(){
			var vm = this;
			
			vm.message = "This text is in School controller";
			vm.data = schooldata;
		
		};

		var schooldata = [
			{
				name: "AMA",
				location: "san miguel",
				theme: "red",
			},
			{
				name: "STI",
				location: "pioneer",
				theme: "blue",
			}
		];
