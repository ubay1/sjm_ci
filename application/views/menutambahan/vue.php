<style>
	#intro{ margin-top:70px; margin-bottom:50px; display:grid; grid-template-rows:100px 100px 100px 100px 100px; grid-gap:6px;}
	.navbar-inverse{background:#41b882;}
	.navbar-inverse .navbar-nav > li:hover{background-color:#2F9E6C;}
	#v1{grid-row-start:1; grid-column-start:1; grid-column-end:6; background:#6BEF93; color:#000; padding:10px;  box-shadow:0px 2px 0px#0E0E0E;}
	#v2{grid-row-start:2; grid-column-start:1;  grid-column-end:6; background:#53DC7D; color:#000; padding:10px;  box-shadow:0px 2px 0px#0E0E0E;}
	#animal{list-style:none;}
</style>
<div class="container">
	<div id="intro">
		
		<div id="v1">
			Vue instance <br>
			{{pesan}}
		</div>

		<div id="v2">
			Data binding <br>
			<ul>
				<li v-for="animal in hewan" id="animal" :title="pesan">
					{{animal}}
				</li>
			</ul>
		</div>
	</div>
</div>

<script type="text/javascript">
	new Vue({
	
		el: "#intro",
		data:{
			pesan:"hy ini vue dengan CI "+new Date(),

			hewan:['anjay, babs, kodok, monkey'],

		}
	
	})
</script>