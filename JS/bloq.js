window.addEventListener('load', function(){
	new Glider(document.querySelector('.lista'), {
		
        //Para los SmP
        slidesToShow: 1,
		slidesToScroll: 1,
        draggable:true,
        rewind:true,
		dots: '.carousel__indicadores',
		arrows: {
			prev: '.carousel__anterior',
			next: '.carousel__siguiente'
		},

		responsive: [
			{
			  breakpoint: 550, //a partir de 550px
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}},
            {
			  breakpoint: 800, //a partir de 800px
			  settings: {
				slidesToShow: 3,
				slidesToScroll: 3
			}}
		]
	});

    new Glider(document.querySelector('.lista1'), {
		
        //Para los SmP
        slidesToShow: 1,
		slidesToScroll: 1,
        draggable:true,
        rewind:true,
		dots: '.carousel__indicadores1',
		

		responsive: [
			{
			  breakpoint: 450, //a partir de 450px
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}},
            {
			  breakpoint: 800, //a partir de 800px
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}}
		]
	});
    
});

