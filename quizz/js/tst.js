<script>
	$('#nav a').click(function(e){
		e.preventDefault();
		hash = this.hash;
		position = $(hash).offset().top;
		
		$('html').animate({
           scrollTop: position
		},800);
	})
</script>