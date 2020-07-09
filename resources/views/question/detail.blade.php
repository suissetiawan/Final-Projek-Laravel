@extends('master')

@push('script-head')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
@endpush

@section('title', 'Detail Pertanyaan')
@section('content')

	<div class="card card-widget">
        <div class="card-header">
            <div class="user-block">
            <p class="h3">
                Apa yang dimaksud LTS dalam Laravel 6.x ?
            </p>
            </div>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" title="Edit">
                    <a href="/questions/1/edit"><i class="fas fa-edit"></i></a>
                </button>
            </div>
        </div>

        <div class="card-body">
          	<p>
                Saya menggunakan laravel 6.x dan versi LTS, apa itu LTS? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam blanditiis voluptatibus quisquam iure facere beatae nulla sed inventore libero illo cumque recusandae quia, placeat fugiat molestias debitis aperiam, ipsa ipsam.
          	</p>
            <span class="float-right text-muted">
                <div class="callout callout-info">
                    <div class="row">
                        <p><small>Pada 9 Juli 15:48</small></p>
                    </div>
                    <div class="row">
                        <img class="img-circle" src="{{asset('/adminlte/dist/img/user1-128x128.jpg')}}" alt="User Image" width="20">
                        <p><small>&nbsp;Reva Doni Aprilio</small></p>
                    </div>
                </div>
            </span>
        </div>

        <div class="card-footer card-comments">
            <div class="card-comment">
            	<img class="img-circle img-sm" src="{{asset('/adminlte/dist/img/user3-128x128.jpg')}}" alt="User Image">
              	<div class="comment-text">
                	<span class="username">
                        Taufik Hidayat
                  		<span class="text-muted float-right">1 hari yang lalu</span>
                	</span>
                    Gak tau
              	</div>
            </div>
            <div class="card-comment">
                <img class="img-circle img-sm" src="{{asset('/adminlte/dist/img/user3-128x128.jpg')}}" alt="User Image">
                <div class="comment-text">
                    <span class="username">
                        Aziz
                        <span class="text-muted float-right">2 hari yang lalu</span>
                    </span>
                    hmm
                </div>
            </div>
        </div>

        <div class="card-footer">
            <form action="/answers" method="post">
            	@csrf
              <input type="hidden" name="pertanyaan_id" id="pertanyaan_id" value="1">
            	<input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
              <img class="img-fluid img-circle img-sm" src="{{asset('/adminlte/dist/img/user1-128x128.jpg')}}" alt="Alt Text">
              <!-- .img-push is used to add margin to elements next to floating images -->
              <div class="img-push row">
                <div class="input-group">
                  <!-- /btn-group -->
                  <input type="text" class="disabled form-control" name="isi_jawaban" id="isi_jawaban" placeholder="Tambahkan komentar">
                </div>
              </div>
            </form>
        </div>
    </div>
    
    <div class="card">
        <div class="card-header">
          <h3 class="card-title"><strong>2 Jawaban</strong></h3>
        </div>

        <div class="card-body">
            <div class="post">
              <div class="user-block">
                <img class="img-circle img-bordered-sm" src="{{asset('/adminlte/dist/img/user1-128x128.jpg')}}" alt="user image">
                <span class="username">
                  <a href="#">Alam</a>
                </span>
                <span class="description">Hari ini</span>
              </div>
              <!-- /.user-block -->
              <p>
                LTS merupakan kepanjangan dari Long Term Support, artinya versi Laravel 5.5 akan sedikit berbeda dengan versi sebelumnya. Perbedaan itu sendiri yaitu, pada Laravel 5.5 akan lebih lama mendapat dukungan yang lebih lama. Versi LTS menerima perbaikan bug selama dua tahun, dan perbaikan keamanan selama tiga tahun. Sedangkan pada versi yang bukan LTS hanya menerima dukungan perbaikan bug selama 6 bulan, dan perbaikan keamanan selama satu tahun.
              </p>
            </div>

            <div class="post">
              <div class="user-block">
                <img class="img-circle img-bordered-sm" src="{{asset('/adminlte/dist/img/user1-128x128.jpg')}}" alt="User Image">
                <span class="username">
                  <a href="#">Annisa</a>
                </span>
                <span class="description">1 hari yang lalu</span>
              </div>
              <!-- /.user-block -->
              <p>
                Nah seperti itu 
              </p>
            </div>

            <div class="post">
                <h4>Jawaban Anda</h4>
                <div class="form-group">
                    <textarea name="isi" class="form-control my-editor">
                        {!! old('isi', $content ?? '') !!}
                    </textarea>
                </div>
            </div>

        </div>
        <!-- /.card-body -->
      </div>

@endsection

@push('scripts')
    <script>
        console.log('ok');
      var editor_config = {
        path_absolute : "/",
        selector: "textarea.my-editor",
        plugins: [
          "advlist autolink lists link image charmap print preview hr anchor pagebreak",
          "searchreplace wordcount visualblocks visualchars code fullscreen",
          "insertdatetime media nonbreaking save table contextmenu directionality",
          "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_browser_callback : function(field_name, url, type, win) {
          var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
          var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

          var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
          if (type == 'image') {
            cmsURL = cmsURL + "&type=Images";
          } else {
            cmsURL = cmsURL + "&type=Files";
          }

          tinyMCE.activeEditor.windowManager.open({
            file : cmsURL,
            title : 'Filemanager',
            width : x * 0.8,
            height : y * 0.8,
            resizable : "yes",
            close_previous : "no"
          });
        }
      };

      tinymce.init(editor_config);
    </script>
@endpush