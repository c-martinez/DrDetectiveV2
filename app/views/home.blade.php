@extends('layout')

@section('content')
	<div class='col-xs-9 maincolumn' style="background:none; width:72%">
		<div class='row '>
			<div class='col-xs-6 content_box' style='background:none' >
				<h1 style='background:#424242; color:#F8F8F8;  border-radius:10px; border: 1px solid grey; padding:5px;  font-size:22px;'>&nbsp;&nbsp;New literature <b style="font-size:12px; position:relative; top:0px; left:158px;">Costs: 15</b> <img class='coins' style="position:relative; left:158px;" src='img/coins.png'></img></h1>
				<h5 style='background:white; position:relative; border-radius:10px; border:solid 1px; border-top-left-radius:0px; border-top-right-radius:0px;  border-color:#919090; top:-17px; height:70%; padding:5px; solid rgb(200, 200, 200); '>
					<span style=" position:relative;left:10px;"><br /><b><a href="#" style="color:#333;" id="link">Sea urchin neural development and the metazoan paradigm of neurogenesis.</a></b><br />Summary:Urchin embryos continue to prove useful as a means of studying embryonic signaling and gene regulatory networks, which together..</span><br />
					<span style=" position:relative;left:10px;"><br /><b><a href="#" style="color:#333;" id="link">Enhancing stress-resistance for efficient microbial biotransformations by synthetic biology. </a></b><br />Chemical conversions mediated by microorganisms, otherwise known as microbial biotransformations, are playing an increasingly important role within the.. </span>
					<span style=" position:relative;left:90%;"><br /><b><a href="#" style="color:#464945;" onclick="fullVersion()">More</a></b></span>
				</h5>
			</div>
			<div class='col-xs-6 content_box'>
				<h1 style='background:#424242; color:#F8F8F8;  border-radius:10px;  border: 1px solid grey; padding:5px;  font-size:22px;'>&nbsp;&nbsp;High urgency literature <b style="font-size:12px; position:relative; top:0px; left:74px;">Costs: 10</b> <img class='coins' style="position:relative; left:74px;" src='img/coins.png'></img></h1>
				<h5 style='background:white; position:relative;  border-radius:10px; border:solid 1px; border-top-left-radius:0px; border-top-right-radius:0px;  border-color:#919090; top:-17px; height:70%; padding:5px; solid rgb(200, 200, 200); '>
					<span style=""><br /><b style="position:relative; left:10px;"><a href="#" style="color:#333;" id="link">Body-Mass Index and mortality among Adults with Incident Type 2 Diabetes</a></b><br /><text style="position:relative; left:10px;">The relation between body weight and mortality among persons with type 2 diabetes remains unsolved..</text></span><br />
					<span style=" position:relative;left:10px;"><br /><b><a href="#" style="color:#333;" id="link">Young blood reverses age-related impairments in cognitive function and synaptic plasticity in mice</a></b><br />As human lifespan increases, a greater fraction of the population is suffering from age-related cognitive impairments, making it important to elucidate a means to combat the effects of aging. </span>
					<span style=" position:relative;left:90%;"><br /><b><a href="#" style="color:#333;" onclick="fullVersion()">More</a></b></span>
				</h5>
			</div>
			<div class='col-xs-6 content_box' style='background:none'>
				<h1 style='background:#424242; color:#F8F8F8; border-radius:10px;  border: 1px solid grey; margin-top:-10px; padding:5px;font-size:22px;'>&nbsp;&nbsp;Most popular literature <b style="font-size:12px; position:relative; left:73px;">Costs: 25</b> <img class='coins' style="position:relative; left:73px;" src='img/coins.png'></img></h1>
				<h5 style='background:white; position:relative; border-radius:10px; border:solid 1px; border-top-left-radius:0px; border-top-right-radius:0px; border-color:#919090; top:-17px; height:70%; padding:5px; solid rgb(200, 200, 200); '>
					<span style=""><br /><b style="position:relative; left:10px;"><a href="#" style="color:#333;" id="link">CellProfiler: free, versatile software for automated biological image analysis</a></b><br /><text style="position:relative; left:10px;">Careful visual examination of biological samples is quite powerful, but many..</text></span><br />
					<span style=" position:relative;left:10px;"><br /><b><a href="#" style="color:#333;" id="link">Crowdsourcing for Usability: Using Micro-Task Markets for Rapid, Remote, and Low-Cost User Measurements</a></b><br />Collecting user input is important for many aspects of the design process, and includes techniques ranging from informal user surveys to rigorous laboratory studies. </span>
					<span style=" position:relative;left:90%;"><br /><b><a href="#" style="color:#464945;" onclick="fullVersion()">More</a></b></span><br />
				</h5>
			</div>
			<div class='col-xs-6 content_box' style='background:none'>
				<h1 style='background:#424242; color:#F8F8F8; border-radius:10px;  border: 1px solid grey; margin-top:-10px; padding:5px; font-size:22px;'>&nbsp;&nbsp;Your personal feed <b style="font-size:12px; position:relative; left:104px">Costs: 20</b> <img class='coins' style="position:relative; left:104px;" src='img/coins.png'></img></h1>
				<h5 style='background:white; position:relative; border-radius:10px; border:solid 1px; border-top-left-radius:0px; border-top-right-radius:0px;  border-color:#919090; top:-17px; height:70%; padding:5px; solid rgb(200, 200, 200);'>
					<span style=""><br /><b style="position:relative; left:10px;"><a href="#" style="color:#333;" id="link">Initial therapy with FOLFOXIRI and bevacizumab for metastatic colorectal cancer.</a></b><br /><text style="position:relative; left:10px;">BACKGROUND: A fluoropyrimidine plus irinotecan or oxaliplatin, combined with..</text></span><br />
					<span style=" position:relative;left:10px;"><br /><b><a href="#" style="color:#333;" id="link">High-dose rifapentine with moxifloxacin for pulmonary tuberculosis.</a></b><br />BACKGROUND: Tuberculosis regimens that are shorter and simpler than the current 6-month daily regimen are needed.</span>
					<span style=" position:relative;left:90%;"><br /><b><a href="#" style="color:#464945;" onclick="fullVersion()">More</b></span><br /></a>
				</h5>
			</div>
		</div>
	</div>
@stop

@section('sidebar')
	@parent
	@include('sidebarExtras')
@stop
