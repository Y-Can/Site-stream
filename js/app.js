var vm = new Vue({
	el: '#vueDerniersEpisodes',

	data:{
		message:'Derniers Episodes',
		indice: 0,
		listeEpisodes:['ONE PIECE', "MY HERO ACADEMYA", "ATTAQUE DES TITANS", "NARUTO SHIPPUDEN"],
		listeImagesEpisodes:["assets/onePiece.jpg","assets/MyHeroAcademya", "assets/SNK.jpg", "assets/narutoShippuden"],

		titreEpisode:"ONE PIECE",
		titreEpisode2:"MY HERO ACADEMYA",
		imageEpisode:'assets/onePiece.jpg',
		imageEpisode2:'assets/MyHeroAcademya',
		afficherFleche: false,
		imgSlide:true,
		directionSlide:"",
	},

	methods:{

		episodeSuivant:function()
		{
			this.indice++;
			this.directionSlide="slideDroite";
			if(this.indice>=this.listeEpisodes.length)
			{
				this.indice=0;
			}
			if(this.indice<0)
			{
				this.indice = this.listeEpisodes.length - 1;
			}
			if(this.indice%2===0)
			{
				this.imgSlide=true;
				this.titreEpisode=this.listeEpisodes[this.indice];
				this.imageEpisode=this.listeImagesEpisodes[this.indice];
			}
			else{
				this.imgSlide=false;
				this.titreEpisode2=this.listeEpisodes[this.indice];
				this.imageEpisode2=this.listeImagesEpisodes[this.indice];
			}
			
			
		},

		episodePrecedent:function()
		{
			this.indice--;
			this.directionSlide="slideGauche";
			if(this.indice<0)
			{
				this.indice = this.listeEpisodes.length - 1;
			}
			if(this.indice>=this.listeEpisodes.length)
			{
				this.indice=0;
			}
			if(this.indice%2===0)
			{
				this.imgSlide=true;
				this.titreEpisode=this.listeEpisodes[this.indice];
				this.imageEpisode=this.listeImagesEpisodes[this.indice];
			}
			else{
				this.imgSlide=false;
				this.titreEpisode2=this.listeEpisodes[this.indice];
				this.imageEpisode2=this.listeImagesEpisodes[this.indice];
			}
			
		}, 

	}

})
