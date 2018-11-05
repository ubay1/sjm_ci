<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/latihan.css">

<div id="jarak-teks">
<div class="container-fluid">

	<div class="text-center h3 text-judul">Latihan Framework Codeigniter</div>

	<h4><u>1. Pengenalan HELPER pada CI</u></h4>
		kita bisa meload helper dengan cara membuatnya di dalam methodnya dengan syntax <b>$this->load->helper('nama helper');</b> <br> atau juga bisa meload secara otomatis di file <b>autoload</b> pada folder config.
		<br><br>

<div class="panel-group">
<div class="panel  panel-success">
	<div class="panel-heading" data-toggle='collapse' href='#collapse1'> 
		<div class="panel-title">Array Helper </div>
	</div>
	<div class="panel-collapse collapse" id="collapse1">
		<div class="panel-body">
			<ul>
				<li class="li-ref">
					element() <br>
					contoh penggunaannya : <br>

					<pre>
					$array = array(
					'color'=>'red',
					'shape'=>'round'
					);

					echo element('color', $array);
					</pre>

					fungsi element diatas akan menampilkan <b>red.</b>, jadi syntax diatas sama saja seperti <b>echo $array['color'];</b>
				</li>

				<li class="li-ref">
					random_element() = menampilkan value array secara acak<br>
					contoh penggunaan : <br>

					<pre>
					$aray = array('hello', 'nama', 'saya', ' ubay');
					echo random_element($aray);
					</pre>
				</li>
			</ul> <br>

			<?php  
				echo form_error('field', '<div class="error">', '</div>');
			?>
		</div>
	</div>
</div>

<div class="panel  panel-success">
	<div class="panel-heading" data-toggle='collapse' href='#collapse2'> 
		<div class="panel-title">HTML Helper </div>
	</div>
	<div class="panel-collapse collapse" id="collapse2">
		<div class="panel-body">
			<ul>
				<li class="li-ref">
					heading('value', (1-6), 'atribut'), heading ini akan mencetak <'h1> sampai <'h6> <br>
					<pre>
					echo heading('welcome',1, array('class'=>'text-danger'));

					<'h1> Welcome <'/h1>
					</pre>
				</li>
				<li class="li-ref">
					img('arahkan ketempat disimpannya gambar'); //kita juga bisa menggunakan array untuk membuat atributnya. <br>
					<pre>
					echo img('assets/images/emot.png');

					<'img src='localhost/sjm_ci/assets/images/emot.png'>

					$img_properti = array(
					'class'=>'image-responsive', 
					'height'=>'70', 'width'=>'70', 
					'title'=>'ini imageku',
					'src'=>'assets/images/emot.png');

					echo img($img_properti);

					<'img class='image-responsive' height='70' width='70' title='ini gambarku' 
					src='localhost/sjm_ci/assets/images/emot.png'>
					</pre>
				</li>
				<li class="li-ref">
					link_tag($link_properti), akan membuat syntax link <br>
					<pre>
					$link_properti = array('rel'=>'icon', 'type'=>'image/png', 'href'=>'assets/images/emot.png');
					echo link_tag($link_properti);

					<'link rel="icon" type="image/png" href="http://localhost/sjm_ci/assets/images/emot.png" />
					</pre>
				</li>
				<li class="li-ref">
					ul($list, $atriibut) <br>
					<pre>
					$list = array('1a','2b','3c','4d');
					$atr  = array('style'=>'list-style:none;');
					echo ul($list, $atr);

					<'ul style="list-style:none;">
					  <'li>1a<'/li>
					  <'li>2b<'/li>
					  <'li>3c<'/li>
					  <'li>4d<'/li>
					<'/ul>
					</pre>
				</li>
				<li class="li-ref">
					meta($atribut).
					<pre>
					$atr = array('name'=>'viewport', 'content'=>'width=device-width, initial-scale=1')
					echo meta($atr);

					<'meta name="viewport" content="width=device-width, initial-scale=1" />
					</pre>
				</li>
				<li class="li-ref">
					br(2);
					<pre>
					echo br(2); //syntax ini akan mencetak <'br> sebanyak 2x

					<'br><'br>
					</pre>
				</li>
			</ul>
		</div>
	</div>
</div>

<div class="panel  panel-success">
	<div class="panel-heading" data-toggle='collapse' href='#collapse3'> 
		<div class="panel-title">Form Helper </div>
	</div>
	<div class="panel-collapse collapse" id="collapse3">
		<div class="panel-body">
			<ul>
				<li class="li-ref">
					1. form_open('sjm/profil'), syntax disamping jika dibuat HTML menjadi <br> 
					<pre>
					echo form_open('sjm/profil');

					<'form action='localhost/sjm_ci/sjm/profil' method='post'></'form>
					</pre>
				</li>
				<li class="li-ref">
					2. form_open_multipart('sjm/profil), syntax ini biasanya digunakan untuk penanganan saat user ingin merubah foto profil, mengirim file, mengirim gambar. <br> jika dirubah ke HTML syntaxnya menjadi <br>
					<pre>
					echo form_open_multipart('sjm/profil);

					<'form action='localhost/sjm_ci/sjm/profil' method='post' enctype='multipart/form-data' > 
					</pre>
				</li>
				<li class="li-ref">
					3. form_hidden('id', '24'), jika dibuat ke html syntaxnya menjadi <br>
					<pre>
					echo form_hidden('id', '24');

					<'input type='hidden' name='id' value='24' />
					</pre>
				</li>
				<li class="li-ref">
					4. form_input('name', 'value', 'atribut'), jika dibuat ke HTML maka syntaxnya menjadi : <br>
					<pre>
					echo form_input('nama', '24', array('class'=>'form-control'));

					<'input type='text' name='nama' value='24' class='form-control'/> 
					</pre>
				</li>
				<li class="li-ref">
					5. form_password('name', 'value', 'atribut'), jika dibuat ke HTML maka syntaxnya menjadi : <br>
					<pre>
					echo form_password('password', 'pasword', array('class'=>'form-control'));

					<'input type='password' name='password' value='24' class='form-control' /> 
					</pre>
				</li>
				<li class="li-ref">
					6. form_upload('file'), jika dibuat k HTML maka syntaxnya menjadi : <br>
					<pre>
					echo form_upload('file');

					<'input type='file' name='file' /> 
					</pre>
				</li>
				<li class="li-ref">
					7. form_textarea('name', 'values', 'atribut'), jika dibuat k HTML maka syntaxnya menjadi : <br>
					<pre>
					echo form_textarea('isikonten','isi konten' array('class'=>'form-control'));

					<'textarea name='isikonten' class='form-control'> isi </'textarea>
					</pre>
				</li>
				<li class="li-ref">
					8. form_dropdown('name', $option), jika dibuat k HTML maka syntaxnya menjadi : <br>
					<pre>
					$options = array(
					'kelas1'=>'kelas 1',
					'kelas2'=>'kelas 2',
					);
					echo form_dropdown('kelas', $options);

					<'select name="kelas">
					<'option value="kelas1" selected="selected">kelas 1</option>
					<'option value="kelas2" selected="selected">kelas 2</option>
					<'/select>
					</pre>
					<pre> dengan menggunakan multiple

					$options = array(
					'kelas1'=>'kelas 1',
					'kelas2'=>'kelas 2',
					);
					$option2 = array('kelas1','kelas2');
					echo form_dropdown('kelas', $options, $option2);

					<'select name="kelas" multiple="multiple">
					<'option value="kelas1" selected="selected">kelas 1</option>
					<'option value="kelas2" selected="selected">kelas 2</option>
					<'/select>
					</pre>
				</li>
				<li class="li-ref">
					9. form_submit('name', 'value', 'atraibut'), jika dibuat k HTML maka syntaxnya menjadi : <br>
					<pre>
					echo form_submit('submit', 'submit', array('class'=>'form-control'));

					<'input type='submit' name='submit' value='submit' class='form-control'>
					</pre>
				</li>
				<li class="li-ref">
					10. form_button($var), jika dibuat k HTML maka syntaxnya menjadi : <br>
					<pre>
					$atr = array('class'=>'btn btn-danger', 'name'=>'reset', 'type'=>'reset', 'content'=>'Reset');
					echo form_button($atr);

					<'button name="reset" type="reset" class="btn btn-danger" >Reset<'/button>
					</pre>
				</li>
				<li class="li-ref">
					11. set_value('quantity','isinya harus ikuti dengan name pada form tsb'), jika dibuat k HTML maka syntaxnya menjadi : <br>
					<pre>
					echo form_input('nama', set_value('quantity','nama saya ubay'), array('class'=>'form-control'));

					<'input type="text" name="nama" value="nama saya ubay" class="form-control">
					</pre>
				</li>
				<li class="li-ref">
					12. form_error('nama name dari form input yang dituju'),
					<pre>
					echo form_error('username');

					form_error berkaitan dengan set_rules dan set_message pada form_validation library.
					</pre>
				</li>
				<li class="li-ref">
					13. validation_errors(),
					<pre>
					echo validation_errors();

					validation_errors() berkaitan dengan set_rules dan set_message pada form_validation library.
					</pre>
				</li>
			</ul>
		</div>
	</div>
</div>

<div class="panel  panel-success">
	<div class="panel-heading" data-toggle='collapse' href='#collapse4'> 
		<div class="panel-title">URL Helper </div>
	</div>
	<div class="panel-collapse collapse" id="collapse4">
		<div class="panel-body">
			<ul>
				<li class="li-ref">
					site_url($atribut), 
					<pre>
					Mengembalikan URL situs kita, seperti yang ditentukan dalam file konfigurasi kita. 
					File index.php (atau apa pun yang telah kita tetapkan sebagai index_page situs kita di file konfigurasi) akan ditambahkan ke URL, 
					karena setiap segmen URI yang kita lewati ke fungsi, ditambah url_suffix sebagaimana diatur dalam file konfigurasi kita.
					kita dianjurkan untuk menggunakan fungsi ini kapan saja kita perlu membuat URL lokal sehingga halaman kita menjadi lebih portabel jika perubahan URL kita.

					$segment = array('sjm/latihan/latihanhelper');
					echo site_url($segment);

					http://localhost/sjm_ci/sjm/latihan/latihanhelper
					</pre>
				</li>
				<li class="li-ref">
					base_url('letkan uri-segment disini'), 
					<pre>
					Fungsi ini mengembalikan hal yang sama seperti site_url (), tanpa index_page atau url_suffix yang ditambahkan.
					Juga seperti site_url (), kita dapat menyediakan segmen sebagai string atau array. Berikut ini contoh string:

					echo base_url("blog/post/123"); 

					$segment = array('sjm/latihan/latihanhelper');
					echo site_url($segment);
					</pre>
				</li>
				<li class="li-ref">
					anchor('url', 'linkname', 'attributes'). hasilnya jika diubah ke HTML sama seperti tag <'a>
					<pre>
					anchor('sjm', 'home', array('class'=>'text-danger'))

					<'a href='localhost/sjm_ci/sjm' class='text-danger'> home <'/a>
					</pre>
				</li>
				<li class="li-ref">
					anchor_popup('url', 'linkname', 'attributes'). membuat link dengan menampilkan secara popup. hasilnya jika diubah ke HTML sama seperti tag <'a>
					<pre>
					$atts = array(
					'width'       => 800,
					'height'      => 600,
					'scrollbars'  => 'yes',
					'status'      => 'yes',
					'resizable'   => 'yes',
					'screenx'     => 0,
					'screeny'     => 0,
					'window_name' => '_blank'
					);

					echo anchor_popup('', 'Click Me!', $atts);

					<'a href="http://localhost/sjm_ci/" 
					onclick="window.open('http://localhost/sjm_ci/', '_blank', 'width=800,height=600, scrollbars=yes,
					menubar=no, status=yes, resizable=yes,screenx=0,screeny=0'); return false;">
					Click Me!<'/a>

					window_name tidak benar-benar atribut, 
					tetapi argumen ke metode JavaScript window.open () 
					<'http://www.w3schools.com/jsref/met_win_open.asp>, 
					yang menerima baik nama jendela atau target jendela.
					</pre>
				</li>
				<li class="li-ref">
					redirect('url'), biasanya digunakan saat pembuatan login page. jika session telah dibuat maka redirect ke controller halaman beranda.
				</li>
			</ul>
			<?php
				
			?>
		</div>
	</div>
</div>

<br><br>

<h4><u>2. Pengenalan Library pada CI</u></h4>
		kita bisa meload library dengan cara membuatnya di dalam methodnya dengan syntax <b>$this->load->library('nama library');</b> <br> atau juga bisa meload secara otomatis di file <b>autoload</b> pada folder config.

		untuk menggunakan library kita bisa akses <b>$this->(nama library)</b>
		<br><br>

<div class="panel-group">

<div class="panel  panel-success">
	<div class="panel-heading" data-toggle='collapse' href='#collapse5'> 
		<div class="panel-title">File Uploading Library </div>
	</div>
	<div class="panel-collapse collapse" id="collapse5">
		<div class="panel-body">
			<ul>
				1. Proses Membuat Form Upload <br>
				<ul>
					<li>buat file pada <b>views/folder_tujuan</b> dengan nama <b>upload_form.php</b> echo form_open_multipart('tulis tujuan controller dan method disini')</li>
					<pre>
					echo form_open_multipart('latihan/do_upload');

					$atr = array('type'=>'file', 'name'=>'userfile'); //name='userfile' ini tidak bisa diubah, 
					harus 'userfile'
					echo form_input($atr);

					$atr2 = array(
					'type'=>'submit', 'name'=>'submit', 
					'class'=>'btn btn-danger', 'value'=>'kirim');
					echo form_submit($atr2);

					echo form_close();
					</pre>

					<li>
						lalu kita buat file <b>upload_sukses.php</b> pada folder <b>view</b> yang sama. <br>
					<pre>
					<'ul>
						<'?php foreach ($upload_data as $item => $value):?>
						<'li><'?php echo $item;?>: <'?php echo $value;?><'/li>
						<'?php endforeach; ?>
					<'/ul>
					</pre>
					</li>
					<li>
						lalu kita buat method didalam controller <b>latihan</b> dngan nama 
						<b>do_upload</b> berikut isi syntaxnya.<br>
						<pre>
						<i>// ini adalah folder tempat menyimpan foto atau file kita. kita bisa membuatnya pada folder root CI.</i>
						<b>$config['upload_path'] = './uploads/'; </b>

						<i>//ini adalah jenis ekstensi yang diperbolehkan untuk diupload</i>
						<b>$config['allowed_types'] = 'gif|jpg|png';</b>

						<i>// kita mensetting ukuran lebar dan panjang pada gambar, serta ukuran gambar tsb.
						jika gambar tidak sesuai maka akan terjadi error</i>
						<b>$config['max_size']  = '1024'; //1mb</b>


						<b>$config['max_width']  = '1000';</b>
						<b>$config['max_height']  = '768';</b>

						$this->load->library('upload', $config); //dinamik data

						<i>disini kita cek jika data error maka tampilkan error</i>
						if ( ! $this->upload->do_upload()){
							$data['error'] = "<'script> alert('ada yang error') <'/script>";
							$this->load->view('header');
							$this->load->view('latihan/do_upload', $data, FALSE);
						}
						else{
							$data = array('upload_data' => $this->upload->data());
							$this->load->view('latihan/upload_sukses', $data);
						}
						</pre>
					</li>
					<li>
						Referensi Guide <br>
						<pre>
						1. <b>Setting preferensi</b>
						<i>// untuk menentukan tempat penyimpanan gambar ang diupload</i>
						<b>$config['upload_path'] = './uploads/'; </b>

						<i>// untuk menentukan jenis ekstensi yang diizinkan</i>
						<b>$config['allowed_types'] = 'gif|jpg|png'; </b>

						<i>// kosongkan jika ingin membuat ukuran gambar yang diupload menjadi tanpa batas, 
						biasanya php membuat secara default yakni (2048kb) 2MB </i>
						<b>$config['max_size']     = '2048'; </b>
						<b>$config['max_width'] = '1024'; </b>
						<b>$config['max_height'] = '768'; </b>

						$this->load->library('upload', $config);

						$this->upload->initialize($config);
						</pre>
					</li>
				</ul>
			</ul>
		</div>
	</div>
</div>

<div class="panel  panel-success">
	<div class="panel-heading" data-toggle='collapse' href='#collapse6'> 
		<div class="panel-title">Form Validation Library </div>
	</div>
	<div class="panel-collapse collapse" id="collapse6">
		<div class="panel-body">
			Sebelum menjelaskan pendekatan CodeIgniter untuk validasi data, mari kita gambarkan skenario yang ideal:
			<br>
			1. Suatu formulir ditampilkan. <br>
			2. Anda mengisinya dan mengirimkannya. <br>
			3. Jika Anda mengirimkan sesuatu yang tidak valid, atau mungkin melewatkan item yang diperlukan, formulir tersebut ditampilkan ulang berisi data Anda bersama dengan pesan kesalahan yang menjelaskan masalah. <br>
			4. Proses ini berlanjut sampai Anda telah mengirimkan formulir yang valid. <br><br>

			Pada bagian penerima, skrip harus: <br>
			1. Periksa data yang dibutuhkan. <br>
			2. Verifikasi bahwa data tersebut adalah jenis yang benar, dan memenuhi kriteria yang benar. Misalnya,  brjika nama pengguna dikirim, harus divalidasi untuk hanya berisi karakter yang diizinkan. Panjangnya harus minimum, dan tidak melebihi panjang maksimal. Nama pengguna tidak boleh menjadi nama pengguna orang lain yang ada, atau bahkan kata yang dilindungi undang-undang. Dan lain-lain <br>
			3. Sanitasi data untuk keamanan. <br>
			4. Pra-format data jika diperlukan (Apakah data perlu dipangkas? HTML encode? Dll) <br>
			5. Siapkan data untuk dimasukkan dalam database. <br><br>

			Meskipun tidak ada yang sangat rumit tentang proses di atas, biasanya membutuhkan sejumlah kode yang signifikan, dan untuk menampilkan pesan kesalahan, berbagai struktur kontrol biasanya ditempatkan dalam bentuk HTML. Validasi formulir, meski sederhana untuk dibuat, umumnya sangat berantakan dan membosankan untuk diterapkan. <br><br>

			<b>set_rules()</b> = untuk memeriksa form input milik kita, misal kita memiliki form input teks dengan name='nama'.
			di set_rules() kita bisa berikan rules-rules apa saja yang harus dimmiliki oleh form tersebut, misal kita masukan required (harus diisi), min_length[5]->minimal inputan yang dimasukan 5 karakter, dll. <br><br>

			<b>set_message()</b> = setelah set_rules() dibuat, selanjutnya kita buat  set_message untuk memberikan pesan yang akan tampil di form jika inputan yang kita ketikan tidak memenuhi rules-nya. <br><br>

			<b>run() == FALSE</b> = lalu kita masukan code ini. code ini akan membaca, jika form yang kita kirim terjadi error yang tidak diketahui, maka tampilkan pesan kesalahan, jika tidak maka tampilkan pesan sukses. <br><br>


			lalu pada view kita hanya perlu menuliskan <b>form_error('disini diisi name dari form')</b>. jika codde ini tidak dimasukan maka tidak akan tampil pesan apapun. baik itu benar atau salah.

		</div>
	</div>
</div>

<div class="panel  panel-success">
	<div class="panel-heading" data-toggle='collapse' href='#collapse7'> 
		<div class="panel-title">Input Class Library </div>
	</div>
	<div class="panel-collapse collapse" id="collapse7">
		<div class="panel-body">
			<b>1. Akses dari Form data menggunakan POST,GET,COOKIE, atau SERVER</b> <br>
			CodeIgniter dilengkapi dengan metode helper yang memungkinkan kita mengambil/menangkap inputan POST, GET, COOKIE, atau item SERVER. Keuntungan utama menggunakan metode yang disediakan CI daripada mengambil item secara langsung ($ _POST ['something']) adalah bahwa metode akan memeriksa untuk melihat apakah item diatur dan mengembalikan NULL jika belum diatur. Ini memungkinkan kita dengan mudah menggunakan data tanpa harus menguji apakah suatu item ada lebih dulu. Dengan kata lain, biasanya kita mungkin melakukan sesuatu seperti ini: <br>
			
			<pre> $something = isset ($_POST ['something']) ? $ _POST ['something']: NULL; </pre>

			Jika Dengan metode CodeIgniter, kita dapat melakukan secara dengan mudah:

			<pre>$something = $this->input->post('something');</pre>
		</div>
	</div>
</div>

<div class="panel  panel-success">
	<div class="panel-heading" data-toggle='collapse' href='#collapse8'> 
		<div class="panel-title">Session Library </div>
	</div>
	<div class="panel-collapse collapse" id="collapse8">
		<div class="panel-body">
			<b>1. cek session</b> <br>
			kita bisa men cek sesion dengan 3 cara : 
			<pre>
			1. $nama = $_SESSION['username']
			2. $nama = $this->session->username
			3. $nama = $this->session->userdata('nama')

			jika kita ingin mengambil seluruh session yang diset, kita bisa menggunakan 
			cara ketiga menjadi <b>$this->session->userdata()</b>
			</pre> <br>

			<b>2. set session</b> <br>
			untuk menset beberapa session kita dapat menggunakan set_userdata(''). <br>
			untuk menset hanya satu data saja yang diset bisa gunakan set_userdata('nama',"ubay"); <br><br>

			<b>3. memverifikasi apakah ada nilai session atau tidak</b> <br>
			kit bisa gunakan
			<pre>
			 1. isset($_SESSION['nilai_session']);
			 2. $this->session->has_userdata('nilai_session');
			</pre> <br>

			<b>4. Menghapus Session</b> <br>
			jika set_userdata() untuk membuat sebuah session, maka untuk menghapusnya kita bisa gunakan unset_userdata(). :
			<pre>
			$this->session->unset_userdata('nilai_session');

			jika ingin menghapus lebih dari 1 session : 

			$sesi = array('id_user', 'username');
			$this->session->unset_userdata($sesi);
			</pre> <br>

			<b>5. Flashdata</b> <br>
			fungsi ini saya bisa bilang adalah callback dari hasil inputan kita, misal kita ingin menyimpan kedatabase, lalu jika kita berhasil menyimpannya maka kita set_flashdata('pesan','sukses simpan'); di controller. lalu di view tinggal kita panggil saja <b>$this->session->flashdata('pesan');</b> <br>

			<b>6. sess_destroy()</b> <br>
			fungsi ini juga sama seperti unset_userdata() yakni untuk menghapus nilai session. <br>
			<pre>
			kita bisa menggunkana : session_destroy()
			</pre>

		</div>
	</div>
</div>


<div class="panel  panel-success">
	<div class="panel-heading" data-toggle='collapse' href='#collapse9'> 
		<div class="panel-title">HTML table Library </div>
	</div>
	<div class="panel-collapse collapse" id="collapse9">
		<div class="panel-body">


		</div>
	</div>
</div>

<br><br>

<h4><u>3. Database Referensi</u></h4>

<div class="panel  panel-success">
	<div class="panel-heading" data-toggle='collapse' href='#collapse10'> 
		<div class="panel-title">Menampilkan Data dengan query</div>
	</div>
	<div class="panel-collapse collapse" id="collapse10">
		<div class="panel-body">
			<b>1. Query standar dengan banyak hasil (versi objeck)</b> <br>
			<pre>
			$query = $this->db->query("SELECT * FROM user");
			$query = $this->db->query("SELECT title,name,email From user");

			untuk mencetaknya bisa gunakan code ini :
			foreach ($query->result as $row)
			{
				$row->title;
				$row->name;
				$row->email;
			}

			<b>hasil $query->result() akan mngembalikan nilai object.</b>
			</pre> <br>

			<b>2. Query standar dengan banyak hasil (versi array)</b> <br>
			<pre>
			foreach ($query->result as $row)
			{
				$row['title'];
				$row['name'];
				$row['email'];
			}
			</pre> <br>

			<b>3. Query standar dengan satu hasil</b> <br>
			hanya menampilkan 1 data.
			<pre>
			$query = $this->db->query('SELECT name FROM my_table LIMIT 1');
			$row = $query->row();
			echo $row->name;
			</pre> <br>

			<b>3. Query standar dengan satu hasil (array version)</b> <br>
			hanya menampilkan 1 data. namun dengan gaya array.
			<pre>
			$query = $this->db->query('SELECT name FROM my_table LIMIT 1');
			$row = $query->row_array();
			echo $row['name'];
			</pre> <br>


		</div>
	</div>
</div>

<div class="panel  panel-success">
	<div class="panel-heading" data-toggle='collapse' href='#collapse11'> 
		<div class="panel-title">Menambahkan data ke database</div>
	</div>
	<div class="panel-collapse collapse" id="collapse11">
		<div class="panel-body">
			<b>Standar Insert</b>
			<pre>
			$sql = "INSERT INTO mytable (title, name) VALUES (".$this->db->escape($title).", ".$this->db->escape($name).")";
			$this->db->query($sql);
			echo $this->db->affected_rows();

			fungsi $this->db->escape($title) sangat berguna karna Fungsi ini 
			menentukan tipe data string sehingga hanya dapat melepaskan data string.
			Ini juga secara otomatis menambahkan tanda kutip tunggal di sekitar data sehingga Anda tidak perlu membuat tanda kutip lagi.
			</pre>
		</div>
	</div>
</div>

<div class="panel  panel-success">
	<div class="panel-heading" data-toggle='collapse' href='#collapse12'> 
		<div class="panel-title">Query builder</div>
	</div>
	<div class="panel-collapse collapse" id="collapse12">
		<div class="panel-body">
			<b>1. Query builder Get -> 	Pola Get Builder memberi kita cara yang dibuat menjadi sederhana untuk mengambil data: </b>
			<pre>
			$query = $this->db->get('table_name');
			foreach ($query->result() as $row)
			{
			        echo $row->title;
			}

			Fungsi get () di atas mengambil semua hasil dari tabel yang ada pada database kita. 
			Kelas Query Builder berisi berbagai fungsi lengkap untuk bekerja dengan data.
			</pre> <br>

			<b>2. Query builder Insert</b> <br>
			<pre>
			$data = array('title'=>$title,'name'=>$name);
			$this->db->insert('user', $data);

			code diatas  jika diubah dalam bentuk PHP native : 
			Insert into user (title,name) VALUES ('{$title}', '{$name}');
			</pre> <br>

			<b>3. Penanganan Error</b> <br>
			<pre>
			if ( ! $this->db->simple_query('SELECT `example_field` FROM `example_table`'))
			{ 
				$error = $this->db->error(); // Has keys 'code' and 'message'
			}
			</pre> <br>

			<b>4. Query builder Select</b> <br>
			<pre>
			1. result() Array
			$query = $this->db->query("SELECT * FROM user");
			$query = $this->db->query("SELECT title,name,email From user");

			untuk mencetaknya bisa gunakan code ini :
			foreach ($query->result as $row)
			{
				$row->title;
				$row->name;
				$row->email;
			}

			<b>hasil $query->result() akan mngembalikan nilai object.</b>
			</pre>

			<pre>
			2. result_array()

			foreach ($query->result_array as $row)
			{
				$row['title'];
				$row['name'];
				$row['email'];
			}

			<b>hasil $query->result_array() akan mngembalikan nilai array.</b>
			</pre>

			<pre>
			3. row() & row_array()

			$query = $this->db->query("SELECT * FROM artikel");
		 	$row   = $query->row();
		 	if(isset($row))
		 	{
		 		echo $row->judul; // akan mencetak nilai pertama dari record artikel
		 		echo ", ";
		 	}

		 	$row   = $query->row_array();
		 	if(isset($row))
		 	{
		 		echo $row['judul']; // akan mencetak nilai pertama dari record artikel
		 		echo ", ";
		 	}
			</pre>
		</div>
	</div>
</div>



<br>
<?php 
	// if (isset($error_send)) {
	// 		echo $error_send;
	// }
	
	if (isset($sukses_send)) {
			echo $sukses_send;
	}

	echo form_error('nama', '<span style="background:red; color:#fff;" >','</span>');	

	$atr = array('name'=>'nama', 'value'=>set_value('nama'));
	echo form_open('latihan/form');
	echo form_input($atr);
	echo form_submit('submit', 'kirim');
	echo form_close(); echo br(2);

	$query = $this->db->query('SELECT * FROM user');
	
	echo $this->table->generate($query);
?>








</div>
</div>

<br><br><br>
