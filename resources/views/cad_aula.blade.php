@include('padrao')
@section('conteudo')
 
 <!-- ========== title-wrapper end ========== -->

 
     

     <div class="col">
         <div class="card-style settings-card-2 mb-30">
             <div class="title mb-30">
                 <h6>Aulas</h6>
             </div>
             <form method="post" action="{{route('cadastro-aula')}}">
                @csrf
                 <div class="row">

                     <div class="col-12">
                        <div class="input-style-1">
                             <label>Id curso</label>
                             <input type="text" name="idcurso" placeholder="Id curso..." />
                         </div>
                     </div>
                     <div class="col-12">
                         <div class="input-style-1">
                             <label>Nome da aula</label>
                             <input type="text" name="tituloaula" placeholder="Nome da aula..." />
                         </div>
                     </div>
                     <div class="col-12">
                         <div class="input-style-1">
                             <label>urlaula</label>
                             <input type="text" name="urlaula" placeholder="urlaula??..." />
                         </div>
                     </div>
                     
                     <div class="col-12">
                         <button class="main-btn primary-btn btn-hover">
                             Adicionar Aula
                         </button>
                     </div>
                 </div>
             </form>
         </div>
         <!-- end card -->
     </div>
     <!-- end col -->
 </div>
 <!-- end row -->
 </div>
 <!-- end container -->
 </section>
 <!-- ========== section end ========== -->