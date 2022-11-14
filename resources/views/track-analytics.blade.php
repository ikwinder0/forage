<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="../">
		<title>Admin Panel | Track Analytics</title>
		
		<!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-232725969-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        
        
        
        gtag('config', 'UA-232725969-1');
        </script>
	</head>
	<body>
	    
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
	    window.location = "{{url($redirect_url)}}";
	});
	</script>
	</html>