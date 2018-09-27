<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_berita extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model(array('Kategori_model','Berita_model','Datatables_model'));        
        $this->load->helper('date');
    }
    public function index()
    {
        $data = array(
            'title' => 'Berita',
            'add_css'  => array(
                'dist/backend/plugins/datatables/datatables.css'
            ),
            'add_js'   => array(
                'dist/backend/plugins/datatables/jquery.dataTables.min.js',
                'dist/backend/plugins/datatables/jquery.dataTables.responsive.min.js',
                'dist/backend/js/datatables.js'
            )
        );
        if ($this->session->flashdata('msg')) {
            $data['mess'] = $this->session->flashdata('msg');
        }
        $this->Ui->admin('berita/v_index',$data);
    }

    public function tambah() {
        $data = array(
            'title'    => 'Berita',
            'subtitle' => 'Tambah Berita',
            'kategori' => $this->Kategori_model->list(1)->result_object(),
            'add_css'  => array(
                'dist/backend/plugins/summernote/summernote-lite.css'
            ),
            'add_js'   => array(
                'dist/backend/plugins/summernote/summernote-lite.js',
                'dist/backend/js/editor.js'
            ),
            'kategori_select' => $this->input->post('kategori') ? $this->input->post('kategori') : array(),
            'default_value'   => array('berita_judul' => $this->input->post('berita_judul'),'berita_deskripsi' => $this->input->post('berita_deskripsi'))
        );
        if ($this->Berita_model->insert() == TRUE) {
            $this->session->set_flashdata('msg', 'Berhasil ditambahkan!');
            redirect('admin_berita');
        }
        $this->Ui->admin('berita/v_form_berita',$data);
    }

    
    public function edit() {
        $berita_id = $this->input->get('id');
        $berita = $this->Berita_model->listById($berita_id)->result_object();
        $kategori = $this->Berita_model->selectKategori($berita_id);
        if (count($berita) == 0) {
            redirect('404');
        }
        $data = array(
            'title'           => 'Berita',
            'subtitle'        => 'Edit Berita',
            'kategori'        => $this->Kategori_model->list(1)->result_object(),
            'add_css'         => array(
                'dist/backend/plugins/summernote/summernote-lite.css'
            ),
            'add_js'          => array(
                'dist/backend/plugins/summernote/summernote-lite.js',
                'dist/backend/js/editor.js'
            ),
            'berita'          => $berita[0],
            'kategori_select' => $this->input->post('kategori') ? $this->input->post('kategori') : $kategori,
            'default_value'   => array(
                'berita_judul' => $this->input->post('berita_judul') ? $this->input->post('berita_judul') : trim($berita[0]->berita_judul),
                'berita_deskripsi' => $this->input->post('berita_deskripsi') ? $this->input->post('berita_deskripsi') : htmlspecialchars_decode(trim($berita[0]->berita_deskripsi))
            )
        );

        if ($this->Berita_model->update($berita_id) == TRUE) {
            $this->session->set_flashdata('msg', 'Berhasil diubah!');
            redirect('admin_berita');
        }
        $this->Ui->admin('berita/v_form_berita',$data);
    }

    function json()
    {
        $output = $this->Berita_model->datatables();
        //output dalam format JSON
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function hapus($berita_id = 0) {        
        $berita = $this->Berita_model->listById($berita_id)->result_object();

        if (count($berita) > 0) {
            if($this->session->username == $berita[0]->admin_username) {
                $this->Berita_model->delete($berita_id);
                $this->session->set_flashdata('msg', 'Berhasil dihapus');
                redirect('admin_berita');
            } else {
                show_404();
            } 
        } else {
            show_404();
        }
    }
    
    public function insert_doc() {
        $judul = array('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur, nulla!','
                Architecto cupiditate vel quae ipsum veritatis accusantium corporis aliquid quibusdam.','
                Laborum voluptates, quis quibusdam voluptas numquam eveniet enim eius ducimus!','
                Quidem alias cum error ad impedit laudantium incidunt sequi quia.','
                Assumenda quia, voluptatum veritatis vitae eius dignissimos dolores nemo ex!','
                Tempore consequuntur amet, libero odit cumque est incidunt nemo itaque?','
                Quos tempore consectetur eius a corporis fugiat veritatis, explicabo vel.','
                Culpa, iste doloremque perferendis ipsam asperiores maxime repellendus recusandae error!','
                Accusantium laudantium fugit incidunt itaque qui explicabo, aut ipsam sint.','
                Ad enim mollitia reiciendis dolores aperiam. Alias mollitia quos asperiores?');
        $isi = array('Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa sequi rerum atque ab, modi dolorem placeat velit quo recusandae non accusantium quidem quod sit voluptates ducimus debitis sint nam odio accusamus iure dignissimos! Esse, est? Deserunt error, facere blanditiis reiciendis consequuntur natus molestias repudiandae saepe exercitationem nisi suscipit nam voluptatum incidunt eos deleniti, non nostrum nobis aliquam! Magnam, ipsum molestias. Accusantium, praesentium hic ex sint nostrum velit? Odio consectetur accusantium, dolor qui error voluptatum maxime eius, facere maiores incidunt laudantium voluptatibus placeat porro iure itaque provident, suscipit reiciendis ad distinctio sunt quibusdam rem. Inventore corrupti at expedita distinctio adipisci sit.',
                'Non commodi voluptate sequi ratione quibusdam, sed possimus ad aliquam, earum beatae unde ullam quam sint vel iure dolorem molestias, pariatur numquam eius itaque in vitae voluptatem! Quos hic quae, recusandae unde dolor esse aliquam at odit dignissimos maxime reiciendis porro laboriosam itaque quia velit nihil, doloribus quo commodi eaque harum ad eos minus molestias? Ducimus explicabo natus id mollitia ex fuga distinctio molestiae consectetur eius suscipit quaerat labore aliquam libero deserunt non, odit reprehenderit animi rerum, iusto tempora illo? Quo esse rem consectetur dolor velit quis, cupiditate suscipit! Eveniet perferendis tempore atque molestiae corrupti incidunt deleniti beatae soluta iusto!',
                'Laborum est fuga ipsa excepturi dolores tempore quo veritatis perferendis pariatur quaerat nostrum dignissimos, vero, ea saepe sapiente perspiciatis vitae porro, doloremque ipsam quae quas quibusdam commodi ducimus! Recusandae saepe dolorem harum rem omnis, minus inventore eius labore nisi quo id vitae amet iste veniam quasi nostrum aliquid ipsam aperiam quos nobis dolores maiores vel aliquam. Molestiae pariatur saepe veniam? Itaque quae atque ut a cumque culpa eius saepe recusandae enim numquam, ducimus cupiditate, natus dolores, labore sunt ex aspernatur accusantium ullam. Repellat nobis molestiae excepturi officia totam ducimus asperiores, voluptates error iusto optio, cupiditate aliquam impedit ratione atque quidem.',
                'Laudantium, voluptatibus culpa suscipit ipsum necessitatibus optio, eveniet nihil praesentium aut ratione rem soluta velit veniam, eos possimus maiores incidunt cumque. Amet corporis placeat numquam, maiores quibusdam perferendis, magni nam unde adipisci modi laboriosam. Dolorum natus cum saepe ea eligendi porro, incidunt fuga sunt ad debitis omnis? Dolorem aspernatur voluptatibus nihil. Asperiores illo nulla adipisci quo vel maiores reiciendis quaerat aut. Asperiores veniam ipsam quis vel similique, consectetur accusantium obcaecati ad ab debitis recusandae totam vero officia et corporis, fuga id dolorum dicta, repellendus cumque. Ratione veniam nam facilis, obcaecati sed consequatur delectus nemo iste, nostrum sint, dolorem esse a.',
                'Amet, ipsam aperiam. Maiores distinctio iusto possimus iure ex nobis non blanditiis modi nisi. Accusamus repellendus harum aliquam, dicta fugiat illo commodi hic eveniet laudantium ipsam, culpa similique dolor enim est dolores, aut aliquid maxime! Voluptates nesciunt dignissimos deserunt assumenda vitae, culpa est, velit adipisci soluta perferendis, fugiat animi ullam dolorum cum. Accusamus beatae laboriosam quaerat vel quasi reiciendis nemo adipisci cum, modi amet consequuntur veritatis placeat dolorem. Voluptates asperiores nostrum nulla soluta natus, modi ab at nemo vero iusto voluptate ad aspernatur! Est culpa ab, aliquid non consequatur fugit dolorum reprehenderit laudantium necessitatibus praesentium eius soluta recusandae excepturi asperiores.',
                'Culpa molestiae unde voluptatibus, quam facilis dolor ut, a inventore magni ex ipsam, sit aliquid voluptate. Accusantium architecto sint hic corrupti fugit maiores id consectetur sed cupiditate a sequi repellendus doloribus ut, perferendis, autem provident? Commodi eius, atque dicta ipsa molestias repellat quisquam quo labore blanditiis rem eum consequatur tempore fugiat perferendis unde ut error nostrum. Hic alias perferendis porro nemo corrupti atque nisi, sit animi cupiditate nulla ea ratione natus nobis, eos laboriosam eius, reprehenderit eligendi voluptas temporibus beatae. Totam adipisci ea, aperiam recusandae repudiandae, provident sit repellendus consequatur consequuntur eveniet voluptas tempora facilis deleniti saepe eaque qui ullam.',
                'Odit quibusdam unde itaque incidunt, quaerat modi explicabo laboriosam voluptates repellendus accusantium deserunt provident iure dolore, voluptatum vero molestiae? Maxime illo non veniam libero voluptatibus corrupti, maiores ipsam delectus perspiciatis id necessitatibus? Facere doloremque ratione ea. Quia, nihil cum. Voluptate, fugiat veniam. Consequatur, ad sint? Aperiam et incidunt nam eaque, tenetur id sunt corporis doloribus eius provident rerum temporibus cum voluptate explicabo quis odit. Officiis non beatae fugiat vel nam minima laboriosam voluptas omnis temporibus vero, similique dolorum tenetur voluptate sed perferendis, ducimus nesciunt sint neque nihil quia! Similique quaerat ea modi recusandae iste unde nostrum quisquam in numquam ut.',
                'Enim tenetur optio sint praesentium inventore molestias, quam numquam iusto rem quo, aut temporibus nulla, mollitia ipsam quasi exercitationem at labore dolorem sit velit unde veniam ducimus nisi impedit! Consequuntur minus, dolores dolorem doloremque quos praesentium minima impedit non tenetur natus, eaque sapiente excepturi quis optio ipsam hic, animi voluptates vero quae magni ipsa architecto? Dolores necessitatibus dolor voluptatum distinctio, earum sequi ipsa? Qui quasi architecto unde sunt, iusto amet ab modi asperiores. Illo distinctio dolor ipsa architecto obcaecati debitis consequatur quibusdam praesentium eveniet ab, animi odio magnam hic. Quod quos consequatur perspiciatis assumenda nemo magnam, officia ipsum inventore praesentium.',
                'Aliquam, autem. Dolore possimus neque eos earum exercitationem corporis. Vero voluptatem tempore iure facilis ratione similique consequuntur, perferendis unde maiores ipsam neque temporibus animi deleniti nam, dicta nobis explicabo magnam quidem excepturi eveniet mollitia. Ratione blanditiis nemo officia quibusdam quod perspiciatis fuga reiciendis assumenda tenetur adipisci nam quis, suscipit, officiis error quisquam. Aliquid dignissimos ipsum voluptatibus odio ut modi. Velit facilis aspernatur voluptates, saepe officiis eos! Ipsam tenetur, minima fuga et laudantium nam blanditiis quam porro dignissimos doloribus natus eaque ipsum magni cumque molestiae recusandae sit reprehenderit voluptatibus dicta architecto! Quae, quod voluptate illo dolore animi esse explicabo dolorum corporis.',
                'Eaque soluta tenetur at porro culpa minima, beatae, possimus eum placeat ratione praesentium veritatis illo, quidem autem officia hic? Quo rem, fugit quibusdam molestias, officia debitis recusandae ad consequuntur possimus deserunt expedita. Aspernatur, aperiam voluptas quo qui provident corporis blanditiis et reiciendis debitis eum dolore quos suscipit unde fuga ratione, at dolorem sapiente vero, quis asperiores quidem dolor ea maiores illum. Laboriosam id saepe, laborum omnis et quo possimus dolorem sint expedita modi ullam non voluptas voluptate accusantium itaque odio quidem eveniet temporibus. Officiis, quas deleniti? Doloremque assumenda hic expedita nulla corrupti officia ab perferendis recusandae, consequuntur, cupiditate, perspiciatis earum.');
        for ($i=0; $i < 100; $i++) {
            $data['berita_judul'] = $judul[mt_rand(0,9)];
            $data['berita_deskripsi'] = '&lt;p&gt;'.$isi[mt_rand(0,9)].'&lt;/p&gt;';
            $data['admin_username'] = $this->session->username;
            $this->db->insert('berita',$data);
            $berita_id = $this->db->insert_id();
            $this->db->insert('berita_kategori',array('berita_id' => $berita_id,'kategori_id' => 1));
        }
    }
}

/* End of file Admin_berita.php */
