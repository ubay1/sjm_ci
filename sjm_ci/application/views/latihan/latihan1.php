

<div class="container-fluid">
	<h3>Loping Data dinamik dari controller ke view 
		<?php $uri = $this->uri->segment(3); 
			  $uri = explode("-",$uri, 3);
			  foreach ($uri as $row) {
			  	echo $row." ";
			  }
		?>		
	</h3> <br>

	<a class="btn btn-info" href="<?= base_url() ?>sjm/upload">latihan upload dengan CI</a>  <br><br>
	<ol>
		<?php  foreach ($todolist as $key) : ?>
			<li><?= $key ?></li>
		<?php endforeach; ?>
	</ol> <br>

	<?php  
	echo heading('CI Helper', 3, array('class'=>'text-danger text-center', 'style'=>'font-weight:bold;'));

	echo heading('Array Helper', 3, array('class'=>'text-danger', 'style'=>'font-weight:bold;'));
	$quotes = array(
		"Lorem ipsum dolor sit amet",
		"consectetur adipisicing elit, sed do eiusmod", 
		"tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation 
		ullamco laboris nisi ut aliquip ex ea commodo",
		"consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
		pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim 
		id est laborum." 
		); br(2);

	echo heading(" Ini random_element(nama_variabel / nama_variabel-_array)", 4).
		 "fungsi dari random_element adalah dapat mencetak acak nilai-nilai yang ada pada suatu array, contohnya dibawah ini : ". br().
		 random_element($quotes); echo br(2);

	echo heading('Form Helper', 3, array('class'=>'text-danger', 'style'=>'font-weight:bold;'));
	echo "
	1. form_open('sjm/profil'), syntax disamping jika dibuat HTML menjadi <br> <b><'form action='localhost/sjm_ci/sjm/profil' method='post'></'form> </b><br><br>
	
	2. form_open_multipart('sjm/profil), syntax ini biasanya digunakan untuk penanganan saat user ingin merubah foto profil, mengirim file, mengirim gambar. <br>
	jika dirubah ke HTML syntaxnya menjadi <br>
	<b><'form action='localhost/sjm_ci/sjm/profil' method='post' enctype='multipart/form-data' > </b> <br><br>

	3. form_hidden('id', '24'), jika dibuat ke html syntaxnya menjadi <br>
	<b><'input type='hidden' name='id' value='24' /></b> <br><br>

	4. form_input('name', 'value', 'atribut'), jika dibuat ke HTML maka syntaxnya menjadi : <br>
	<b><'input type='text' name='nama' value='24' class='form-control'/> </b><br><br>

	5. form_password('name', 'value', 'atribut'), jika dibuat ke HTML maka syntaxnya menjadi : <br>
	<b><'input type='password' name='password' value='24' class='form-control' /> </b> <br><br>

	6. form_upload('file'), jika dibuat k HTML maka syntaxnya menjadi : <br>
	<b><'input type='file' name='file' /> </b> <br><br>

	";
	echo form_open('sjm/profil'); echo br();
	echo form_open_multipart('sjm/profil');
	echo form_hidden('id', '24');
	echo form_input('nama', 'ubay dillah', array('class'=>'form-control'));
	echo form_password('password','ubay dilah', array('class'=>'form-control'));
	echo form_upload('file'); echo br(2);
	echo form_textarea('konten', 'id', array('class'=>'form-control'));
	

	echo heading('HTML Helper', 3, array('class'=>'text-danger', 'style'=>'font-weight:bold;'));
	echo "1. Heading <br> syntax : <b>heading('disini_string', dsiini headingnya. masukan 1-6)</b> <br>
	contoh : <br>
	echo heading('welcolme !', 4, array('class'=>'text-danger'));
	";
	echo heading('welcolme !', 4, array('class'=>'text-danger')); echo br(2);

	echo "2. ul <br> syntax : <b>heading('disini_string', disini headingnya. masukan 1-6)</b> <br>
	contoh : <br>
	$'list = array('red','yellow'); <br>
	$'class = array('class'=>'text-danger','style'=>'list-style:square; font-size:17px;'); <br>
	echo ul($'list,$'class);
	";
	$list = array('red','yellow');
	$class = array('class'=>'text-danger','style'=>'list-style:square; font-size:17px;');
	echo ul($list,$class); echo br();

	echo "3. img <br>syntax : <b>img(' disini letakan atribut yang dibuat dari aray')</b> <br>
	contoh : $'atribut = array('src'=>'assets/images/emot.png', 'class'=>'img-responsive', 'width'=>'100', 'height'=>'100'); <br>
	img($'atribut);
	";
	$atribut = array('src'=>'assets/images/emot.png', 'class'=>'img-responsive', 'width'=>'100', 'height'=>'100');
	echo img($atribut); echo br();
	
	echo "3. link_tag <br>syntax : <b>link_tag('letak file css kita','disini kita tulis rel dari link_tag, bisa stylesheet / manifest')</b> <br>
	conoth : link_tag('assets/style.css','manifest');
	";
	echo link_tag('assets/style.css','manifest');  echo br(2);
	
	echo "4. meta() <br> syntax : <b>meta('viewport','width=device-width, initial-scale=1');</b>";
	echo meta('viewport','width=device-width, initial-scale=1'); echo br();

	echo nbs(2); echo br();
	
	echo heading('Language Helper', 3, array('class'=>'text-danger', 'style'=>'font-weight:bold;'));
	echo "1. lang('language_key', 'form_item', array('class'=>'text-danger') <br> jika diubah ke HTML maka syntaxnya menajdi : <br>
	<b><'label for='form_item' class='bg-primary'></b>
	
	"; echo br(2);
	echo lang('language_key','form_item',array('class'=>'bg-primary')); echo br();
	
	echo heading('String Helper', 3, array('class'=>'text-danger', 'style'=>'font-weight:bold;'));
	echo "1.  repeater('hallo', 10), jika kode disamping dijalankan maka akan mencetak hallo sebanyak 10x. <br><br>

	2. random_string('disini kita bisa masukan alpha,alnum,basic,numeric,nozero,md5,sha1 ataupun array', 10); <br> jika dicetak maka akan mencetak secara acak nilai-nilainya. <br>
	";
	$str = "hallo";
	echo repeater($str, 10); echo br();
	echo random_string("numeric", 10); echo br();
	echo increment_string($str,' +++ ','world'); echo br();
	for ($i = 0; $i < 10; $i++)
	{
        echo alternator('string one', 'string two');
        echo br();
	} echo br(2);

	$str2 = "hallo world tai kucing";
	echo word_limiter($str2,3);  echo br();
	echo character_limiter($str2, 7); echo br();

	$string = "Here is a simple string of text that will help us demonstrate this function.";
	echo word_wrap($string, 25); echo br();

	echo anchor('sjm/profil', 'profil', array('class'=>'text-success')); echo br();

	$seg = array('sjm','halaman2','taikucingmanis');
	echo site_url($seg);

	?>

	
	
	<h3>Bermain dengan MODEL</h3>
	Model berfungsi untuk mongkoneksikan aplikasi web kita menggunakan database. <br>
	untuk menggunakan query SQL di CI kita menggunakan Query Builder.<br><br>
	
	<h3>Referensi Database</h3>
	<h4>1. Konek Database</h4>
	untuk mengkonekan database ada 2 cara yaitu dengan manual dan autoload. <br>
	1. autoload <br>
	cara mengkonekan-nya dengan kita mensetting di database.php kita bisa menemukannya pada folder	<i>config/database.php</i> <br><br>

	2.manual <br>
	Jika hanya sebagian dari halaman yang memerlukan konektivitas basisdata, kita dapat secara manual terhubung ke database dengan menambahkan baris kode ini dalam fungsi apa pun yang diperlukan, atau dalam konstruktor kelas (__construct) kita untuk membuat database tersedia secara global di kelas tersebut. <br>
	<i class="alert-info">$this->load->database()</i> <br><br>

	3. Reconnect /menghubungkan kembali (menjaga koneksi tetap hidup) <br>
	<i class="alert-info">$this->db->reconnect()</i> <br><br>

	4. Menutup koneksi database <br>
	<i class="alert-info">$this->db->close()</i> <br><br>

	<h4>2. Query database</h4>
	1. kita bisa membuat query dengan menggunakan syntax : <br>
	<i class="alert-info">$query = $this->db->query("SELECT * FROM artikel");</i> <br><br>

	2. Menampilkan nilai table <br>
		a. <i class="alert-info">$this->db->result()</i> <br>
		   Metode ini mengembalikan hasil kueri sebagai larik objek, atau larik kosong pada kegagalan. Biasanya kita akan menggunakannya dalam loop foreach, seperti ini:
		   <pre>
		   		$query = $this->db->query("SELECT * FROM artikel");
				foreach ($query->result() as $artikel) 
				{
					echo $artikel->judul; //hasilnya a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, 
					echo ", ";
				}
		   </pre>
		   Metode di atas adalah alias dari <i class="alert-info">$this->db->result_object()</i> <br><br>

		b. <i class="alert-info">$this->db->result_array()</i> <br>
		   Metode ini mengembalikan hasil kueri sebagai array murni, atau array kosong ketika tidak ada hasil yang dihasilkan. Biasanya Anda akan menggunakannya dalam loop foreach, seperti ini:
		   <pre>
		   		foreach ($query->result_array() as $artikel) 
		   		{
					echo $artikel['judul']; // hasilnya a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, 
					echo ", ";
				}
		   </pre> <br>

		 c. <i class="alert-info">Result Row</i> <br>
		 Metode ini mengembalikan satu baris hasil.
		 <pre>
		 	$query = $this->db->query("SELECT * FROM artikel");
		 	$row   = $query->row();
		 	if(isset($row))
		 	{
		 		echo $row->judul; // akan mencetak nilai pertama dari record artikel
		 		echo ", ";
		 	}
		 </pre> <br>

		 kita juga bisa menggunakan row_array(); dengan menentukan barisnya <br>
		 <pre>
		 	$query = $this->db->query("SELECT * FROM artikel");
		 	$row   = $query->row_array(2);
		 	if(isset($row))
		 	{
		 		echo $row->judul; // akan mencetak nilai ketiga dari record artikel
		 		echo ", ";
		 	}
		 </pre> <br>

		 selain itu kita juga bisa memilih nilai pertama,terakhir,nilai seanjutnya,nilai sebelumnya, <br>
		 <pre>
		 	$query = $this->db->query("SELECT * FROM artikel");
		 	$row   = $query->first_row();
		 	$row   = $query->next_row();
		 	$row   = $query->previous_row();
		 	$row   = $query->last_row();
		 </pre> <br><br>

		3. <i class="alert-info">Query Helper Method</i> <br>
		    <pre>
		 	$query = $this->db->query("SELECT * FROM artikel");
		 	echo   $query->num_rows(); //menghitung jumlah seluruh data
		 	echo   $this->db->count_all('artikel'); //menghitung jumlah seluruh data
		 	echo   $this->db->insert_id()
		 	echo   $this->db->affected_rows()
		 	echo   $this->db->last_query()
		 	echo   $this->db->platform() // menampilkan platform database apa yang kita gunakan
		 	echo   $this->db->version()  // menampilkan versi database berapa yagn kita gunkaan
		 </pre> <br><br>


		 <h4>3. Query Builder Class</h4>
		 <i class="alert-info">1. db->get</i> <br>
		 sebelumnya kita telah mengetahui cara membuat query dengan $this->db->query('Your Query'), di CodeIgniter kita bisa menyederhanakannya dengan menggunakan Query Builder Class. <br>
		 kita bisa membuatnya dengan syntax :
		 <i class="alert-info">$query = $this->db->get('nama_table')</i> <br>
		 kita bisa membaca kode tersebut dengan "SELECT * FROM nama_tabel". <br><br>

		 kit juga bisa memilih beberapa kolom table : <br>
		 <i class="alert-info">$query = $this->db->select('judul','konten')</i> <br><br>

		 <i class="alert-info">2. get_compiled_select</i> <br>
		 get_compiled_select berfungsi untuk menyusun query dari kode yang telah kita buat. contoh : <br>
		 <pre>
		 	$sql = $this->db->select('konten')->get_compiled_select('artikel');
		 	echo $sql; 
		 	//hasilnya <i>SELECT `konten` FROM `artikel` </i>
		 </pre>

		 <i class="alert-info">$this->db->select_max('artikel')</i><br>
		 Aggregate Function
		 <pre>
		 	$this->db->select_max('konten');
		 	$query = $this->db->get('artikel');

		 	hasilnya : "SELECT MAX('nama_kolom') AS konten FROM artikel"
		 </pre> <br>

		 <i class="alert-info">$this->db->from()</i> <br>
		 fungsi ini sama Seperti yang ditunjukkan sebelumnya, bagian FROM dari permintaan kita dapat ditentukan dalam fungsi 
		 $this-> db-> get (), jadi gunakan metode mana pun bisa sesuai yang kita inginkan. <br>
		 <pre>
		 	$this->db->select('konten','waktu');
		 	$this->db->from('artikel');
		 	$query2 = $this->db->get();
		 	foreach ($query2->result() as $roww) {
		 		echo $roww->konten;
		 	}

		 	hasilnya : SELECT konten,waktu FROM artikel
		 </pre> <br><br>

		 <i class="alert-info">$this->db->join()</i> <br>
		 fungsi ini menggabungkan 2 buah tabel. ada beberapa cara yaitu kita bisa gunakan left, right, outer, inner, left outer, and right outer. <br>
		 <pre>
		 	$this->db->select('*');
			$this->db->from('blogs');
			$this->db->join('comments', 'comments.id = blogs.id');
			$query = $this->db->get();

			// Produces:
			// SELECT * FROM blogs JOIN comments ON comments.id = blogs.id
		 </pre> <br><br>

		 <h4>Penggunaan Operator</h4><br>

		 <i class="alert-info">$this->db->where()</i> <br>
		 fungsi ini akaan menggunakan operator AND pada WHERE pada mysql. contoh:
		 <pre>
		 	$wherer = ['judul !='=>'a','konten'=>'a'];
		 	$this->db->select('konten','waktu');
		 	$this->db->from('artikel');
		 	$this->db->where($wherer);
		 	$query2 = $this->db->get();
		 	foreach ($query2->result() as $roww) {
		 		echo $roww->konten;
		 	}

		 	hasilnya // "SELECT * FROM artikel WHERE judul != 'a' AND konten='a'"
		 </pre> <br><br>

		 <i class="alert-info">$this->db->or_where()</i> <br>
		 fungsi ini akaan menggunakan operator OR pada WHERE pada mysql. contoh:
		 <pre>
		 	$wherer = ['judul !='=>'a','konten'=>'a'];
		 	$this->db->select('konten','waktu');
		 	$this->db->from('artikel');
		 	$this->db->or_where($wherer);
		 	$query2 = $this->db->get();
		 	foreach ($query2->result() as $roww) {
		 		echo $roww->konten;
		 	}

		 	hasilnya // "SELECT * FROM artikel WHERE judul != 'a' OR konten='a' "
		 </pre> <br><br>

		 <i class="alert-info">$this->db->or_where()</i> <br>
		 fungsi ini akaan menggunakan operator OR pada WHERE pada mysql. contoh:
		 <pre>
		 	$wherer = ['judul !='=>'a','konten'=>'a'];
		 	$this->db->select('konten','waktu');
		 	$this->db->from('artikel');
		 	$this->db->or_where($wherer);
		 	$query2 = $this->db->get();
		 	foreach ($query2->result() as $roww) {
		 		echo $roww->konten;
		 	}

		 	hasilnya // "SELECT * FROM artikel WHERE judul != 'a' OR konten='a' "
		 </pre> <br><br>

		 <i class="alert-info">$this->db->where_in()</i> <br>
		 fungsi ini akaan menggunakan operator IN pada WHERE pada mysql. contoh:
		 <pre>
		 	$wherer = array('jakarta','bandung','surabaya');
		 	$this->db->select('konten','waktu');
		 	$this->db->from('artikel');
		 	$this->db->where_in('city', $wherer);
		 	$query2 = $this->db->get();
		 	foreach ($query2->result() as $roww) {
		 		echo $roww->konten;
		 	}

		 	hasilnya // "SELECT * FROM artikel WHERE city IN ('jakarta','bandung','surabaya') "
		 </pre> <br><br>

		 <i class="alert-info">$this->db->where_not_in()</i> <br>
		 fungsi ini akaan menggunakan operator NOT IN pada WHERE pada mysql. contoh:
		 <pre>
		 	$wherer = array('jakarta','bandung','surabaya');
		 	$this->db->select('konten','waktu');
		 	$this->db->from('artikel');
		 	$this->db->where_not_in('city', $wherer);
		 	$query2 = $this->db->get();
		 	foreach ($query2->result() as $roww) {
		 		echo $roww->konten;
		 	}

		 	hasilnya // "SELECT * FROM artikel WHERE city NOT IN ('jakarta','bandung','surabaya') "
		 </pre> <br><br>

		

		 <?php  
		 // 	$query = $this->db->get('artikel', 5, 2);
		 // 	foreach ($query->result_array() as $row) {
		 // 		echo $row['judul'];
		 // 	} echo "<br>";

		 // 	$sql = $this->db->select_max('konten')->get_compiled_select('artikel');
		 // 	echo $sql;  echo "<br>";

		 // 	$this->db->select_max('konten');
		 // 	$query = $this->db->get('artikel');
		 // 	foreach ($query->result() as $row) {
		 // 		echo $row->konten;
		 // 	} echo "<br>";

		 // 	$wherer = ['judul'=>'a','konten'=>'a'];
		 // 	$this->db->select('konten','waktu');
		 // 	$this->db->from('artikel');
		 // 	$this->db->where($wherer);
		 // 	$query2 = $this->db->get();
		 // 	foreach ($query2->result() as $roww) {
		 // 		echo $roww->konten;
		 // 	}

		 // 	echo "<br>";

		 // 	$wherer = ['judul !='=>'a','konten'=>'a'];
		 // 	$whr =$this->db->where($wherer)->get_compiled_select("artikel");
		 // 	echo $whr;

		 // 	echo "<br>";

		 // 	$wherer2 = array('jakarta','bandung','surabaya');
		 // 	$whr2    = $this->db->where_in('city', $wherer2)->get_compiled_select("artikel");
		 // 	echo $whr2;

		 // 	echo "<br>";

		 // 	$wherer2 = array('jakarta','bandung','surabaya');
		 // 	$whr2    = $this->db->where_not_in('city', $wherer2)->get_compiled_select("artikel");
		 // 	echo $whr2;

		 // 	echo "<br>";

		 // 	$liker  = ['judul'=>'a', 'konten'=>'b'];
		 // 	$liker2 = array('a'=>'a','b'=>'b');
		 // 	$like    = $this->db->like('city','a','before')->get_compiled_select("artikel");
		 // 	$like2   = $this->db->like($liker)->get_compiled_select("artikel");
		 // 	echo $like." <br>". $like2;
		 	
		 // 	echo "<br>";

		 // 	$this->db->select('*');
			// $this->db->from('artikel');
			// $join = $this->db->join('coment', 'coment.id = artikel.id')->get_compiled_select();
			// echo $join;
		 ?>
</div>