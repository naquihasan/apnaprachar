<style type="text/css">

	/*@import url('https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&display=swap');*/


	@import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap');
	/*@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap');*/



	*{
		margin: 0px;
		padding: 0px;
	}



:target{
	top: 40px;
}


	.header-part{
		padding: .5rem 3rem;
	}	


	.header-part img{
		width: 110px;
		height: auto;
	}



	p, label{
		font-family: 'Merriweather', serif;
		/*font-family: 'Oswald', sans-serif;*/
	}



	.btn-dark{
		font-family: 'Source Sans Pro', sans-serif;


	}


	.modal .form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + .75rem + 11px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}


.modal-header {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: start;
    align-items: flex-start;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 1rem 1rem;
    border-bottom: 1px solid #dee2e6;
    border-top-left-radius: calc(.3rem - 1px);
    border-top-right-radius: calc(.3rem - 1px);
    background-image: linear-gradient( 
90deg, rgb(38, 38, 40) 0%, rgb(89, 89, 89) 35%, rgb(112, 118, 120) 100%);
    color: white;
}



.close{
	color: white;
}

.close:hover {
    color: #afaaaa;
    text-decoration: none;
    transition: .2s;


}


.btn-info {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8;
    border-radius: 0rem;
}

.btn-dark {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40;
    border-radius: 0rem;
}



	/*media-query*/

	@media(max-width: 768px){
		.header-part{
			padding: .5rem 0rem;
		}	


		.header-part img{
			width: 70px;
			height: auto;
		}

	}

	@media (max-width: 700px){
.btn-info {
    
    border-radius: 0rem;
    padding: 0.2rem 1rem;
    font-size: 1rem;
    font-family: 'Source Sans Pro', sans-serif;
}

}


@media(max-width: 576px){

	.header-part .quote{
		display: none;
	}

	.nav-tabs .nav-link {
    border: 1px solid #0000001f;
    border-top-left-radius: 0rem;
    border-top-right-radius: 0rem;
    color: #585858;
    font-family: 'Source Sans Pro', sans-serif;
    letter-spacing: .5px;
    margin: 0px 5px 5px 0px;
    font-size: 13px;
}


}



@media(max-width: 576px){

.garphics_content .form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: .8rem;
    font-weight: 400;
     font-family: 'Merriweather', serif;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}


::placeholder{

    font-family: 'Merriweather', serif;
    font-size: 12px;

}

	










</style>




<section class="header-part">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md">
				<div class="d-flex">
					<div class="mr-auto p-2">
						<img src="images/Untitled-1.png">
					</div>
					<div class="p-2">
						<a href="" class="btn btn-info ">Sign In</a>
						<a href="" class="btn btn-dark">Sign In</a>
						<a href="" class="btn btn-dark quote" data-toggle="modal" data-target="#exampleModal">Get Quote!</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>








<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Get Quote </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="m-3">
					<div class="form-row">
						<div class="col-md mb-3">
							<label>Name*</label>
							<input type="text" class="form-control " placeholder="First name">
						</div>
						<div class="col-md mb-3">
							<label>Mobile*</label>
							<input type="text" class="form-control " placeholder="Mobile">
						</div>
						<div class="col-md mb-3">
							<label>Email Id*</label>
							<input type="email" class="form-control " placeholder="Email">
						</div>
					</div>

					<div class="form-row">
						<div class="col-md mb-4">
							<label>Write Description</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>
					</div>

					<div class="form-row">
						<div class="col-md mb-2">
							<a href="" class="btn btn-dark float-right">SUBMIT</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>



<!-- 

<form>
	<h6 class="mb-3">Fill Below Form To Book Services</h6>
	<div class="form-row">
		<div class="col-md mb-3">
			<label>Name*</label>
			<input type="text" class="form-control " placeholder="First name">
		</div>
		<div class="col-md mb-3">
			<label>Mobile*</label>
			<input type="text" class="form-control " placeholder="Last name">
		</div>
		<div class="col-md mb-3">
			<label>Email Id*</label>
			<input type="email" class="form-control " placeholder="Email">
		</div>
	</div>

	<div class="form-row">
		<div class="col-md mb-4">
			<label>Write Description</label>
			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>
	</div>

	<div class="form-row">
		<div class="col-md mb-2">
			<a href="" class="btn btn-dark float-right">SUBMIT</a>
		</div>
	</div>
</form> -->